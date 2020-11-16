<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Flower;
use App\Category;
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
        if ($valQty > $flower->stock)
            return redirect()->back()->withErrors('opps the amount of interest is less than you desire ');
        else {
            $oldCart = Session::has('cart') ?  Session::get('cart') : null;
            $cart = new Cart($oldCart);
            $cart->add($flower, $flower->id, $valQty);

            $request->session()->put('cart', $cart);
            return redirect()->back()->with('success', 'item added to cart');
        }
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'valQty' => 'required|integer|min:1'
        ]);
        $valQty = $request->input('valQty');
        $flower = Flower::find($id);
        if ($valQty > $flower->stock)
            return redirect()->back()->withErrors('ops Insufficient stock of ' . $flower->flower_name);
        else {
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

    public function removeItem($id)
    {
        $flower = Flower::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        if (count($cart->items) > 0)
            Session::put('cart', $cart);
        else
            Session::forget('cart');
        return redirect()->back();
    }
}
