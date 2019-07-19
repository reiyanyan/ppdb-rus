<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        if(!Auth::guest()){
            switch(Auth::user()->role){
                case 1:
                    return view('admin.index');
                case 2:
                    return view('admin.index');
                case 3:
                    return view('admin.index');
                case 4:
                    return view('student.index');
                case 5: 
                    return view('student.index');
            }
        } else {
            return view('student.index');
        }
    }
    
    public function home(){
        switch(Auth::user()->role){
            case 1:
            return view('admin.index');
            case 2:
                return view('admin.index');
            case 3:
                return view('admin.index');
            case 4:
                return view('student.index');
            case 5: 
                return view('student.index');
        }
    }

}
