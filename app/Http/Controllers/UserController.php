<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{	
	public function index()
	{
		return view('admin.a_users');
	}


    public function getUserDetails(){
    	$allusers = User::all();
    	
    	return view('admin.a_users')->with('user_data', $allusers);
    }
}
