<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class ResetForgotPasswordController extends Controller
{
    public function index($token){
        return view('auth.reset-forgot-password',['token' => $token]);
    }   

    public function store(Request $request){
        $request->validate([
            "email"     => "required|string|email|max:255|",
            "password"  => ["required", "confirmed", Rules\Password::min(8)],
        ]); 

        $resetPassword = DB::table("password_resets")
        ->where(["email"=>$request->email , "token"=>$request->token])
        ->first();

        if (!$resetPassword) {
            return back()->withInput()->with("fail" , "Invalid Token");
        } else {

            User::where("email" , $request->email)
            ->update(["password" => Hash::make($request->password)]);
            DB::table("password_resets")->where(["email" => $request->email])->delete();

            return redirect()->route("profile.index")->with("success" , "Your password has been changed");
        }
    }

}
