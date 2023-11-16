<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function post_login(Request $request)
    {
        // $val=$request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ]);
        // // dd($request ->all());
        // $user=$request->only('email','password');
        // if(Auth::attempt($user)){
        //     return redirect('message');
        // }else{
        //     return redirect('login');
        // };
        // dd($request);
        // Auth::attempt($user);

        // $credentials = [
        //     'email' => $request['email'],
        //     'password' => $request['password'],
        // ];

        // if(Auth::attempt($credentials)) {
        //     return redirect()->route('/');
        // }

        // return 'Failure';
    }
    public function register()
    {
        return view("auth.register");
    }

    public function post_register(Request $request)
    {

        Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => $request->password,
            "nationality" => $request->nationality,
            "adriss" => $request->adriss,
        ]);
        $val = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);


        return redirect()->route('login');
    }
}
