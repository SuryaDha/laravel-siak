<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'dosen') {
            return redirect()->route('dosen.dashboard');
        } elseif (Auth::user()->role == 'mahasiswa') {
            return redirect()->route('mahasiswa.dashboard');
        } else {
            return view('home');
        }
    }
}
