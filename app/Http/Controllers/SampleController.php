<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index()
    {
    	if(!session()->has('id'))
    	{
    		return redirect('/');
    	}
    	else
    	{
    		return view('mainpage');
    	}
    }
}
