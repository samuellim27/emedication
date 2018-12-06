<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    //get all items in cart
    function carts()
    {
        $cart = new Cart;

        return $cart->get();
    }

    //get specific item in cart
    function cart($id){
        $cart = new Cart;

        return $cart->find($id);

    }

    //add medications to cart (post)
    function addtocart(Request $request)
    {
        $cart = new Cart;
        $cart->name = $request->name;
        $cart->price = $request->price;
        $cart->quantity = $request->quantity;
        $cart->save();
        return $cart->get();
    }

    //update quantity of specific medication in cart
    function update(Request $request, $id)
    {
        $cart = new Cart;
        $cart->quantity = $request->quantity;

        $cart = Cart::findOrFail($id);
        $cart->update($request->all());

        return $cart;
    }

    //delete specific medication from cart
    function delete($id)
    {

        Cart::find($id)->delete();

        return 'Deleted';

    }
}