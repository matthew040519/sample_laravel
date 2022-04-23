<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (!session()->has('id')) {
            return view('login');
        }
    	else
        {
            return view('mainpage');
        }
    }

    public function login(Request $request)
    {
    		$username = $request->username;
    		$password = $request->password;

    		$user = DB::table('tblusers')->where('username', '=', $username)->get();

    		$count = 0;

    		foreach ($user as $users) {
    			$count = 1;
    			if(Hash::check($password, $users->password))
    			{
    				$request->session()->put('id', $users->user_id);
    				$request->session()->put('username', $users->username);

    				return redirect('mainpage');
    			}
    			else 
    			{
    				return redirect()->back()->with('status', 'Wrong Username or Password');
    			}
    		}

    		if ($count == 0)
    		{
    			return redirect()->back()->with('status', 'Wrong Username or Password');
    		}
    }

    public function logout()
    {
    	session()->flush();
    	return redirect('/');
    }
}
