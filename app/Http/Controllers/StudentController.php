<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function activate(){
        return view('student.activate');        
    }

    public function activation(){
        return view('student.activation');                
    }

    public function signin(){
        return view('student.signin');                
    }

    public function siswa_daftar(){
        return view('student.daftar');
    }

    public function siswa_daftar_preview(){
        return view('student.daftar_preview');
    }

    public function siswa_dashboard(){
        return view('student.dashboard');
    }

}
