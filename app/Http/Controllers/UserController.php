<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Redirect;
use Carbon\Carbon;
use Validator;
use Session;
class UserController extends Controller
{
    //

    public function index(){
        return "user";
    }
    public function login(){
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'email'            => 'required',
            'password'         => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }else{
    	    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                
              
                if(Auth::user()->user_type == "Barangay"){
                    return redirect()->route('barangay.dashboard');
                   
                }
                else{
                    
                    return redirect()->route('admin.dashboard');
                }
    	    }else{
                Session::flash('flash_message','Your login credentials dont match an account in our system.');
    	        return redirect()->back();
    	    }
    	}
    }
                    public function logout()
                    {
                        
                        Auth::logout();
                        return redirect('/');

                    }

                    public function user_list(){
                        return "wew";
                    }

}
