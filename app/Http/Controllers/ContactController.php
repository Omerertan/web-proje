<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\User;
use App\Model\Message;
use Auth;

class ContactController extends Controller
{
    public function index() 
    {
        $role= Auth::user()->role_id;

        if(isset($role) && !empty($role) && $role == 3)
        {
            return redirect()->intended('/');
        }        
        else
        {
           $firstname =  Auth::user()->firstname;
           $lastname = Auth::user()->lastname;
           $email =  Auth::user()->email;

           return view("Contact.index")->with(compact('firstname','lastname', 'email'));
        }
              
    }
    public function createMessage() 
    {
        // https://formspree.io/xzbdpjyd

        $role= Auth::user()->role_id;

        if(isset($role) && !empty($role) && $role == 3)
        {
            return redirect()->intended('/');
        }   
        else 
        {
           $user_id = Auth::user()->id;           
           $veri = User::find($user_id);

           $firstname = request('firstname');
           $lastname = request('lastname');
           $email = request('email');
           $text = request()->get('Text');

           

           if(request('firstname') == $veri->firstname && request('lastname')== $veri->lastname && $veri->email == request('email') &&  !empty($text)) 
           {    
                Message::create([
                    'text' => $text,
                    'user_id' => $user_id,
                ]);

                return redirect()->route('home');  
           }
           else 
           {
                $errors = ['email'=>'!! Ad, soyad ve email bilgilerini değiştirmeyiniz. Mesaj alanını boş bırakmayınız !!'];
                return back()->withErrors($errors);
           }

        }


    }

}
