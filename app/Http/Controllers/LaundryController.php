<?php

namespace App\Http\Controllers;

use App\Models\HargaBarang;
use App\Models\Laundry;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laundry::all();
        return view('Laundry.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = pelanggan::all();
        $data1 = HargaBarang::all();
        return view('Laundry.add', compact('data', 'data1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = $request->harga * $request->kg;
        Laundry::create([
            'nama_pel' => $request->nama,
            '/kg' => $request->kg,
            'harga' => $total
        ]);
        return redirect('/Laundry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function show(Laundry $laundry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function edit(Laundry $laundry)
    {
        $data = pelanggan::all();
        $data1 = Harga::all();
        return view('Laundry.edit', compact('data', 'data1', 'Laundry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laundry $laundry)
    {
        $total = $request->harga * $request->kg;
        $laundry->update([
            'nama_pel' => $request->nama,
            'kg' => $request->kg,
            'harga' => $total
        ]);
        return redirect('/laundry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laundry $laundry)
    {
        $laundry->delete();
        return redirect('/laundry');
    }
}
