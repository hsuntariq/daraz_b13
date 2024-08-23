<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req){
        $formFields = $req->validate([
            "name" => 'required',
            "sub_category" => 'required',
            "image" => ['required','mimes:jpeg,png,jpg,webp']
        ]);

        $formFields['image'] = $req->file('image')->store('category_images','public');
        

        // insert into backend

        Category::create($formFields);
        return back()->with('message','Category added successfully!');


    }


    public function getCategory(){
        $categories = Category::all();
        return view('admin.add-product',compact('categories'));
    }

 

}