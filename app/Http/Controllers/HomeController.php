<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Notice;

class HomeController extends Controller
{
    
    public function index() 
    {
        $notices = Notice::orderBy('id','DESC')->take(3)->get();
        
        return view("Home.index", compact('notices'));        
    }
    public function noticeList() 
    {
        $role= Auth::user()->role_id;

        if(isset($role) && !empty($role) && $role == 3)
        {
            return redirect()->intended('/');
        }
        else
        {
            $notices = Notice::orderBy('id','DESC')->get();

           return view("Home.noticelist", compact('notices'));
        }
       
        
    }
}
