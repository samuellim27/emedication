<?php

namespace App\Http\Controllers;

use App\CheckOut;
use Illuminate\Http\Request;
use Validator;
class CheckOutController extends Controller
{
//get checkout details
    function get($id){
        $checkout = new CheckOut;

        return $checkout->find($id);

    }

    //add checkout details
    function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',


        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $checkout = new CheckOut();
        $checkout->name = $request->name;
        $checkout->email = $request->email;
        $checkout->address = $request->address;
        $checkout->orderdate = $request->orderdate;
        $checkout->save();
       return $checkout->get();
        //return response()->json([
            //"status" => $request->email
        //]);
    }

}
