<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index(){
        return view('auth.forgot-password');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email , 'token' => $token , 'created_at' => Carbon::now()]
        );

        Mail::send('auth.email-verify-password', ['token' => $token] , function ($message) use($request) {
            $message->to($request->email);
            $message->from('ayoub@pro.com');
            $message->subject('Reset Password');
        });
        
        return redirect()->back()->with('success' , 'We sent you an email with a link to reset password');
    }

}
