<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Flower;
use App\Category;
use App\Transaction;
use App\TypePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getShoppingCart()
    {
        $category = Category::all();
        if (!Session::has('cart')) {
            return view('shoppingCart', compact('category'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingCart', [
            'flowers' => $cart->items, 'totalPrice' => $cart->totalPrice,
            'category' => $category
        ]);
    }

    public function addToCart(Request $request, $id)
    {
        $request->validate([
            'valQty' => 'required|integer|min:1'
        ]);
        $valQty = $request->input('valQty');
        $flower = Flower::find($id);

        $oldCart = Session::has('cart') ?  Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($flower, $flower->id, $valQty);

        $request->session()->put('cart', $cart);
        return redirect()->back()->with('success', 'item added to cart');
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'valQty' => 'required|integer|min:0'
        ]);
        $valQty = $request->input('valQty');
        $flower = Flower::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->update($flower, $flower->id, $valQty);

        if (count($cart->items) > 0)
            $request->session()->put('cart', $cart);
        else
            Session::forget('cart');
        return redirect()->back();
    }
}
