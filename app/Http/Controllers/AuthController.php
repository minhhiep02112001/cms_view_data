<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect()->route('admin.index');
        }
        return view('admin.auth.login');
    }
    function postLogin(Request $request){
        $user = User::where('email' , $request->email)->first();

        if($user){
            if(Auth::attempt(['email' => $request->email , 'password' => $request->password])){
                return redirect()->route('admin.index');
            }else{
                return back()->with('notification_error' , 'Password fails');
            }
        }else{
            return back()->with('notification_error' , "Account doesn't not exists");
        }
    }
    function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('admin.login');
    }
}
