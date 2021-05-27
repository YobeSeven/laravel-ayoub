<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterSender;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
    
        $request->validate([
            "name"      => "required|string|max:255",
            "email"     => "required|string|email|max:255|unique:users",
            "password"  => ["required", "confirmed", Rules\Password::min(8)],
        ]);
        
        $user = User::create([
            "name"      => $request->name,
            "role_id"   =>  3,
            "email"     => $request->email,
            "password"  => Hash::make($request->password),
        ]);
        
        event(new Registered($user));
        Mail::to($request->email)->send(new RegisterSender($request));
        Auth::login($user);
        return redirect()->route("profile.index")->with("success" , "Account created ! We sent you an email");
    }
}
