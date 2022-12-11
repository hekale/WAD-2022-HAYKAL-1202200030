<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class user_controller extends Controller
{
    public function index()
    {
        $showroom=Showroom::orderBy('id','desc')->get();
        return view('showroom.index', compact('showrooms'));
    }

    public function create()
    {
        return view('showroom.create');
    }

    public function store (Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName().'-'.time()
                    .'-'. $request->img_path->extension();
        $request->img_path->move(public_path('image'),$imgName);

        Showroom::create([
            'nama' => $request ->name,
            'harga' => $request ->price,
            'gambar' => $imgName
        ]);

        return redirect ('/showroom');
    }
}