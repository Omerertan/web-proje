<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\Notice;

class NoticeController extends Controller
{
    
    
    public function index()
    {              
       return view('admin.notice');
    }

    public function createNotice() 
    {
        // $text = request()->get('Text');
        // dd($text);

        if (Auth::guard('yonetim')->check()) 
        {

           $user_id =  Auth::guard('yonetim')->user()->id;
           // $first =  Auth::guard('yonetim')->user()->firstname;
           
           // dd("id : ".$user_id. " adı ". $first);
          $text = request('Text');
           
          // dd(request('Text'));
          if(isset($user_id) && !empty($user_id) && isset($text) && !empty($text)) 
          {
                Notice::create([
                'text' =>  $text,
                'user_id' => $user_id,
               ]);
          }
           

           return redirect()->route('admin.notice');         
        }
        else 
        {
            return view('admin.login');   
        }

       

    }
}
