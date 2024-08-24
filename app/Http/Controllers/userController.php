<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function signUP(Request $req){
        $formFields = $req->validate([
            "phone" => 'required',
            "password" => 'required',
            "month" => 'required',
            "day" => 'required',
            "year" => 'required',
            "gender" => 'required',
            "name" => 'required',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        // send data to the backend
        $user = User::create($formFields);
        // start the user session
        auth()->login($user);
        return redirect('/')->with('message','Welcome ' . auth()->user()->name);


    }


    public function logout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return back()->with('message','See you soon');
    }


    public function login(Request $req){
        $formFields = $req->validate([
            "phone" => 'required',
            "password" => 'required',
        ]);


        // check if use exists or not
        if(auth()->attempt($formFields)){
            $req->session()->regenerateToken();
            if(auth()->user()->role== 'admin'){
                return redirect('/admin-dashboard')->with('message','Welcome back');
            }else{
                return redirect('/')->with('message','Welcome back');

            }
        }else{
            return back()->with('message','Invalid credentials');
        }


    }


}