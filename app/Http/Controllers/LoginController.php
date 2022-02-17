<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function post_login(Request $request)
    {
        
        $user = Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
        if($user) {
            return redirect('/dashboard');
        }
        $message = "Email or Passsword do not match";
        session()->flash('error', $message);
        return back();
    }
}
