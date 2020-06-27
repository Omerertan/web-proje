<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Cookie;

class AdminController extends Controller
{   
    public function __construct() 
    {
        $this->middleware('guest')->except('logout');
    }

    public function login() 
    {
        
        if(request()->isMethod('post')) 
        {
                        
            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = [

                'email' => request()->get('email'),
                'password' => request()->get('password'),
                'role_id' => 1

            ];
            
            $password = request('password');
            $email = request('email');
            $remember = request('rememberme');
            
            if(isset($remember) && !empty($remember)) 
            {
                Cookie::queue('email', $email, 120);
                Cookie::queue('password', $password);
                Cookie::queue('remember', true, 120);
            }

            if(Auth::guard('yonetim')->attempt($credentials, request()->has('rememberme'))) 
            {   
                                       
                return redirect()->route('admin.notice');
            }
            else 
            {   
                return back()->withInput()->withErrors(['email'=>'Hatalı giriş']);
            }

        }
       
        return view('admin.login');
    }

    public function logout() 
    {
        Auth::guard('yonetim')->logout();
        request()->session()->flush();
        request()->session()->regenerate();

        return redirect()->route('admin.login');
    }

}
