<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PermitController extends Controller
{
    public function index() 
    {
        $users = User::all();

        return view('admin.permit', compact('users'));
    }
    public function editPermit( $id) 
    {        
        $yeniRole = request()->get('roleid');

        // dd("yeni rol" . $yeniRole);

        if($id > 0 &&  $yeniRole>0) 
        {
            $user = User::find($id);
            $user->update([
                'role_id' => $yeniRole,
            ]);
        }

        return redirect()->route('admin.permit');  
    }
}
