<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;

class AccountController extends Controller
{
    // login controller 
    public function index()
    {
    	return view('account.login');
    }

    // Login controller post
    public function checkLogin(Request $request)
    {
    	$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/students');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details...');
        }
    }
 
    // register controller
    public function register()
    {
        return view('account.register');
    }

    // register controller post
    public function checkRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = new User();

        $user_data->name = request('name');
        $user_data->email = request('email');
        $user_data->password = Hash::make(request('password'));

        $user_data->save();

        return redirect('/account');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/account');
    }
}