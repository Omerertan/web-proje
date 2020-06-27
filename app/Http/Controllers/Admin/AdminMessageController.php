<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message;

class AdminMessageController extends Controller
{
    public function index() 
    {
        $messages = Message::join('users', 'messages.user_id', '=', 'users.id')->get();

        return view('admin.message', compact('messages'));
    }
}
