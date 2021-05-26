<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view(`auth.login`);
    }

    public function store(Request $request){
        $request->validate([
            `email`     => `required|string|email|max:255`,
            `password`  => `required`,
        ]);
        
        $user = User::where(`email` , $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route(`profile.index`);
            } else {
                return back()->with(`fail` ,`wrong password`);
            }
        } else {
            return back()->with(`fail`,`No email in DB`);
        }
    }
}
