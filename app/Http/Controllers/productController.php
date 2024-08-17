<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    
    public function addProduct(Request $req){
        // validate the input fields
        $formFields = $req->validate([
            "name" => ['required','min:3','max:50'],
            "actual_price" => ['required','integer','min:100','max:500000'],
            "discount_price" => ['required','integer','min:100','max:50000'],
            "description" => ['required','min:10','max:300'],
            "image" => ['required','mimes:jpg,png,jpeg']
        ]);

            $formFields['image'] = $req->file('image')->store('productImages','public');


            // send the data into the database

            Products::create($formFields);
            return back()->with('message','Product added successfully!');



    }



    public function getProducts(){
        $prod = Products::all();
        return view('welcome',compact('prod'));
    }

    



}