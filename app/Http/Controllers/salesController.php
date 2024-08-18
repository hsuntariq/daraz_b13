<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class salesController extends Controller
{
    public function addSale(Request $req){
        $formFields = $req->validate([
            "name" => 'required',
            "actual_price" => 'required',
            "discount_price" => 'required',
            "description" => 'required',
            "image" => ['required','mimes:jpg,jpeg,png,webp'],
        ]);

        // add image to the folder
        $formFields['image'] = $req->file('image')->store('sale_images','public');
        // send data to the database
        Sales::create($formFields);
        return back()->with('message','Sale added successfully!');
    }



    




}