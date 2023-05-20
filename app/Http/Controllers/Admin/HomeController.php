<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Underwear;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.underwears.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'size' => 'required',
            'visible' => 'required|numeric|min:0|max:1',
            'image' => 'nullable|image',
        ]);
        if (!empty($data['image'])) {
            $img_path = Storage::put('uploads', $data['image']);
            $data['image'] = $img_path;
        } else {
            $data['image'] = 'uploads/default.jpg';
        }
        $underwear = new Underwear();
        $underwear->fill($data);
        $underwear->slug = $underwear->createSlug($data['name']);
        $underwear->save();
        return redirect()->route('admin.underwears.index', $underwear->slug);
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
        if (Auth::user()->role == 1) {
            return view('admin.underwears.edit', ['underwear' => $underwear]);
        } else {
            return view('guest.welcome');
        }
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
        $data = $request->all();
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'visible' => 'required|numeric|min:0|max:1',
            'image' => 'nullable|image',
        ]);
        if ($data['name'] != $underwear->name) {
            $underwear->name = $data['name'];
            $underwear->slug = $underwear->createSlug($data['name']);
        }

        if ($data['price'] != $underwear->price) {
            $underwear->price = $data['price'];
        }
        if ($data['quantity'] != $underwear->quantity) {
            $underwear->quantity = $data['quantity'];
        }
        if ($data['size'] != $underwear->size) {
            $underwear->size = $data['size'];
        }
        if ($data['visible'] != $underwear->visible) {
            $underwear->visible = $data['visible'];
        }
        if (!empty($data['image'])) {
            Storage::delete($underwear->image);

            $img_path = Storage::put('uploads', $data['image']);
            $underwear->image = $img_path;
        }
        $underwear->update();

        return redirect()->route('admin.underwears.index');
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

