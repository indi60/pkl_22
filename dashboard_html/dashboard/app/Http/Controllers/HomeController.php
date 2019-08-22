<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home/dashboard');
    }
    public function index()
    {
        return view('home/index');
    }

    public function minor()
    {
        return view('home/minor');
    }
    public function reolisasi()
    {
        return view('home/reolisasi');
    }
    public function ptk()
    {
        return view('home/ptk');
    }
        public function bantuan()
    {
        return view('home/bantuan');
    }
    public function absensi()
    {
        return view('home/absensi');
    }
    public function agenda()
    {
        return view('home/agenda');
    }
    // public function home()
    // {
    // 	return view('home/home');
    // }
    // public function reolisasi()
    // {
    //     return view('home/reolisasi');
    // }
}
