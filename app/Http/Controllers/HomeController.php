<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Product;

class HomeController extends Controller
{
    function index(Request $request){
	   if($request->session()->has('username')){
				return view('home.index');
	   }
	   else{
		   return redirect('/login');
	   }
	}

	function adminindex(Request $request){
	   if($request->session()->has('username')){
				return view('adminhome.index');
	   }
	   else{
		   return redirect('/login');
	   }
	}	

	function adduser(){
		return view('adminhome.adduser');
	}

	function storeuser(Request $request){
		$request->validate([
			'name'=>'required',
			'phone'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone =$request->phone;
        $user->username = $request->username;
        $user->password =$request->password;
        $user->email ='user@gmail.com';
        $user->location ='Kuril';

        if($user->save()){
            return redirect()->route('adminhome.index');
        }else{
            return redirect()->route('adminhome.adduser');
        }
	}
	function userlist(Request $request){
		if($request->session()->has('username')){  
            $stds = User::all();
            return view('adminhome.userlist')->with('users', $stds);

        }else{
            return redirect()->route('login.index');
        }
	}

	function edit($id){
    	$user = User::find($id);
    	return view('adminhome.edit')->with('user', $user);
    }


    function update(Request $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
    	return redirect()->route('adminhome.userlist');
    }

    function addproduct(){
    	return view('home.addproduct');
    }

    function storeproduct(Request $request){
		$request->validate([
			'name'=>'required',
			'quantity'=>'required',
            'price'=>'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->quantity =$request->quantity;
        $product->price = $request->price;

        if($product->save()){
            return redirect()->route('home.index');
        }else{
            return redirect()->route('home.addproduct');
        }
	}
	function productlist(Request $request){
		if($request->session()->has('username')){  
            $stds = Product::all();
            return view('home.productlist')->with('users', $stds);

        }else{
            return redirect()->route('login.index');
        }
	}

	function editproduct($id){
		$product = Product::find($id);
    	return view('home.edit')->with('user', $product);
	}

	 function updateproduct(Request $request, $id){

        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
    	return redirect()->route('home.productlist');
    }

    function deleteproduct($id){
    	$product = Product::find($id);
    	$product->delete();
    	return redirect()->route('home.productlist');
    }

    function deleteuser($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->route('adminhome.userlist');
    }
	
}
