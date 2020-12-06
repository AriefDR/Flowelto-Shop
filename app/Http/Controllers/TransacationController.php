<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Category;
use App\Transaction;
use App\TypePayment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TransacationController extends Controller
{
    /**
     * Fungsi ini akan menampilkan checkout
     * User harus memiliki items di shopping chart
     * Untuk melanjutkan ke halaman checkout
     */
    public function getCheckout()
    {
        if (!Session::has('cart'))
            return redirect()->route('flower.shoppingCart')->withErrors('Opsss something went wrong!');
        $category = Category::all();
        $typePayments = TypePayment::all();
        return view('checkout', compact('category', 'typePayments'));
    }

    /**
     * Fungsi ini akan memasukan data dari cart ke DB
     * Semua data yang berada di Cart akan di pindahkan ke DB
     * Jika data berhasil masuk ke DB maka Session cart akan di hapus
     */
    public function postCheckout(Request $request)
    {
        $request->validate([
            'typePayments' => 'required|integer',
            'destination_address' => 'required|min:8'
        ]);

        if (!Session::has('cart'))
            return redirect()->route('flower.shoppingCart');
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        try {
            $transaction = new Transaction;
            $transaction->cart = serialize($cart);
            $transaction->status_payment = "paid";
            $transaction->user_id = Auth::user()->id;
            $transaction->payment_id = $request->typePayments;
            $transaction->destination_address = $request->destination_address;
            $transaction->total_price = $cart->totalPrice;
            $transaction->save();
        } catch (\Exception $e) {
            return redirect()->route('get.checkout')->withErrors($e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Transaction is Successful');
    }
    /**
     * Fungsi ini akan menampilkan histori checkout
     * Tampilan ini berisi table dengan waktu checkout
     * Terdapat 1 halaman yang berisi 9 data menggunakan pagination
     */
    public function getHistory()
    {
        $category = Category::all();
        $transactions = Transaction::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(9);
        return view('transactionhistory', compact('category', 'transactions'));
    }
    /**
     * Fungsi ini akan menampilkan detail checkout
     * Sama seperti tampilan shopping cart
     * Berisi items apa saja yang di beli oleh User
     */
    public function getDetailHistory($id)
    {
        $date = Auth::user()->transactions->where('id', $id)->first();
        $category = Category::all();
        $transactions = Auth::user()->transactions->where('id', $id);
        $transactions->transform(function ($transaction, $key) {
            $transaction->cart = unserialize($transaction->cart);
            return $transaction;
        });
        return view('detailtransactionhistory', compact('transactions', 'category','date'));
    }
}
