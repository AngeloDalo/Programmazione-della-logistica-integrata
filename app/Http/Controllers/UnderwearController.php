<?php

namespace App\Http\Controllers;

use App\Underwear;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UnderwearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $underwears = Underwear::all();
        dd(Auth::user()->role);
        if (Auth::user()->role == 1) {
            return view('admin.underwears.index', ['underwears' => $underwears]);
        } else {
            return view('guest.apartments.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Underwear  $underwear
     * @return \Illuminate\Http\Response
     */
    public function show(Underwear $underwear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Underwear  $underwear
     * @return \Illuminate\Http\Response
     */
    public function edit(Underwear $underwear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Underwear  $underwear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Underwear $underwear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Underwear  $underwear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Underwear $underwear)
    {
        //
    }
}
