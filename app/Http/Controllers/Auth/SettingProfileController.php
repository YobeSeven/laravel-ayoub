<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;



class SettingProfileController extends Controller
{
    public function index(){
        return view(`auth.setting-profile`);
    }

    public function updateProfile(Request $request){

        $user = Auth::user();

        if ($request->has(`nameUpdate`)) {
        // POUR LE NOM ET L`EMAIL //
            if ($request->name == null && $request->email == null) {
                return back();
            } elseif ($request->name == null) {
                $request->validate([
                    "email" => [`string`,`email`,`max:255`,Rule::unique(`users`)->ignore($user->id)]
                ]);
                DB::table(`users`)->update([
                    `email`=>$request->email,
                ]);
            } elseif ($request->email == null) {
                $request->validate([
                    "name"  => "string|max:255",
                ]);
                DB::table(`users`)->update([
                    `name`=>$request->name,
                ]);
            }
            return redirect()->back()->with(`success` , `save done`);

        } elseif ($request->has(`passwordUpdate`)) {
        // POUR LE MOT DE PASSE //
            $checkPassword = Hash::check($request->current_password, $user->password);
            if ($checkPassword) {            
                $request->validate([
                    "password"=> [`required`, `confirmed`, Rules\Password::min(8)]
                ]);
                DB::table(`users`)->update([
                    `password`=>Hash::make($request->password)
                ]);
                return redirect()->back()->with(`success` , `save done`);
            } else {
                return back()->with(`fail` , `wrong password`);
            }
            
        } elseif ($request->has(`deleteProfile`)) {
        // POUR SUPPRIMER LE COMPTE //
            $checkPassword = Hash::check($request->password, $user->password);
            if ($checkPassword) {
                $user->delete();
                return redirect()->route(`home`)->with(`success` , `your account has been deleted`); 
            } else {
                return back()->with(`fail` , `wrong password`);
            }
        }
    }
}
