<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Admin;

class LoginController extends Controller
{
   function index(){
		return view('login.index');
	}

		function verify(Request $request){

		$admins = Admin::where('username', $request->username)
					->where('password', $request->password)
					->get();

		if(count($admins) < 1){
			$users = User::where('username', $request->username)
						->where('password', $request->password)
						->get();
			if(count($users) > 0){
				$request->session()->put('username', $request->username);
				return redirect()->route('home.index');
			}else{
				$request->session()->flash('msg', 'invalid username/password');
				return redirect()->route('login.index');
			}
		}else{
			$request->session()->put('username', $request->username);
			return redirect()->route('adminhome.index');
		}	
	}
}
