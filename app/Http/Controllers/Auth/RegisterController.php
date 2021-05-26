<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
    
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => ['required', 'confirmed', Rules\Password::min(8)],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->role_id = 3;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        // $user = User::create([
                // ne pas oublier
        // ]);
        
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('profile.index')->with("success" , "Account created !");
    }
}
