<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }
    function welcome()
    {
        return view('welcome');
    }

    function registration()
    {
        return view('registration');
    }

    function loginPost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            /** @var User $users */
            $user = Auth::user();
            if($user->is_admin){
                $users = User::all();
                return view('welcome', ['users' => $users ?? []]);
            }

            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "login failed");
    }

    function registrationPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $data['name'] = $request-> input('name');
        $data['email'] = $request-> input('email');
        $data['password'] =Hash::make( $request-> input('password'));
           $user = User::create($data);
           if(!$user){
               return redirect(route('registration'))->with("error", "registration failed");
           }
           return redirect(route('login'))->with("success", "registration successful");
    }
    function logout(){
        //Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
