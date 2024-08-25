<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addToCart(Request $req){
        $user_id = auth()->user()->id;
        $formFields = $req->validate([
            "name" =>'required',
            "description" =>'required',
            "actual_price" =>'required',
            "discount_price" =>'required',
            "image" =>'required',
        ]);


        $formFields['user_id'] = $user_id;

        Cart::create($formFields);
        
        return response()->json('Added to cart');

    }


    public function getCartData(){
        $myCart = Cart::where('user_id',auth()->user()->id)->count();
        return response()->json($myCart);
    }
    public function getMyCart(){
        $myCart = Cart::where('user_id',auth()->user()->id)->get();
        return view('users.cart',compact('myCart'));
    }


    public function deleteCartData($id){
        $findItem = Cart::find($id);
        $findItem->delete();
        return back()->with('message','Deleted Successfully');
    }

    public function updateQuantity(Request $req,$id){
        $findItem = Cart::find($id);
        $findItem->update([
            "quantity" => $req->input('quantity')
        ]);
        return back()->with('message','Updated successfully!');
    }
}