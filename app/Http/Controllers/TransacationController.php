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

    public function getCheckout()
    {
        if (!Session::has('cart'))
            return redirect()->route('flower.shoppingCart')->withErrors('Opsss something went wrong!');
        $category = Category::all();
        $typePayments = TypePayment::all();
        return view('checkout', compact('category', 'typePayments'));
    }

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

    public function getHistory()
    {
        $category = Category::all();
        $transactions = Transaction::paginate(9);
        return view('transactionhistory', compact('category', 'transactions'));
    }

    public function getDetailHistory($id)
    {
        $category = Category::all();
        $transactions = Auth::user()->transactions->where('id', $id);
        $transactions->transform(function ($transaction, $key) {
            $transaction->cart = unserialize($transaction->cart);
            return $transaction;
        });
        return view('detailtransactionhistory', compact('transactions', 'category'));
    }
}
