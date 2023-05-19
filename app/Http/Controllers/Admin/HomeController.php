<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Underwear;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $underwears = Underwear::all();
        if (Auth::user()->role == 1) {
            return view('admin.underwears.index', ['underwears' => $underwears]);
        } else {
            return view('guest.welcome');
        }
    }

    public function create()
    {
        return view('admin.underwears.create');
    }
}

