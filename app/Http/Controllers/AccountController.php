<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Cookie;

class AccountController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest')->except('logout');
    }

    public function login() 
    {
        //Account klasörü içnde login dosyasına yönlendirir.
        return view("Account.login");
    }
    public function createlogin()
    {
            $password = request('password');
            $email = request('email');
            $remember = request('rememberme');
            
            if(isset($remember) && !empty($remember)) 
            {
                Cookie::queue('email', $email, 120);
                Cookie::queue('password', $password);
                Cookie::queue('remember', true, 120);
            }

        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt(['email' => request('email'), 'password' => request('password')], request()->has('rememberme')))
        {
            request()->session()->regenerate();
            return redirect()->intended('/');
        }
        else 
        {
            $errors = ['email'=>'Email veya parolanız yanlış'];
            return back()->withErrors($errors);
        }

    }        
    public function register() 
    {
        return view("Account.register");
    }
    public function createRegister() 
    {
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'roleid' => 'required'
        ]);
        
        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'password' => Hash::make(request('password')),
            'email' => request('email'),
            'birthday' => request('birthday'),
            'role_id' => request('roleid')
        ]);
        
        auth()->login($user);

        return redirect()->route('home');

    }
    public function logout() 
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();

        return redirect()->route('account.login');
    }
    
    public function password() 
    {
        // $user = DB::table('users')->where('email', '=', request('email'))
        // ->first();

        // if ($user == null) {

        //    // dd("çalıştı");
        // }

        return view('mails.password');
    }
    public function resetPassword() 
    {
        $user = DB::table('users')->where('email', '=', request('email'))
        ->first();

        // dd($user);

        if ($user == null) {

            $errors = ['email'=>'Geçerli email bulunamadı'];
            return back()->withErrors($errors);
        }
        else 
        {
            dd("çalıştı");
            // DB::table('users')->insert([
            //     'token' => str_random(60)
            // ]);
        }


    }

}
