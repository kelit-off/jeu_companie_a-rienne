<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        try {
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            if($request->password != $request->password_confirmation) {
                throw new \Exception('Password and password confirmation do not match');
            }
            $user->password = Hash::make($request->password);
            $user->company_name = $request->company_name;
            $user->companie_iata = $request->companie_iata;
            $user->save();

            Auth::login($user);

            return redirect()->to("/game")->with('success', 'You have been successfully registered');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function postLogin(Request $request)
    {   
        try {
            $user = User::where('username', $request->username)->first();
            if(!$user) {
                throw new \Exception('User not found');
            }
            if(!Hash::check($request->password, $user->password)) {
                throw new \Exception('Password is incorrect');
            }

            Auth::login($user);
            return redirect()->to("/game")->with('success', 'You have been successfully logged in');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
