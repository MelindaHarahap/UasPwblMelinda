<?php

namespace App\Http\Controllers;

use App\Models\HargaBarang;
use App\Models\Member;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HargaBarang::all();
        return view('hargaBarang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hargaBarang.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Harga::create([
            'nama' => $request->nama,
            'hargaBarang' => $request->hargaBarang
        ]);
        return redirect('/hargaBarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HargaBarang  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(Harga $hargaBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HargaBarang  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit(HargaBarang $harga)
    {
        return view('harga.edit', compact('harga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HargaBarang $harga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HargaBarang $harga)
    {
        $harga->update([
            'nama' => $request->nama,
            'harga' => $request->hargaBarang
        ]);
        return redirect('/harga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harga $hargaBarang)
    {
        $harga->delete();
        return redirect('/hargaBarang');
    }
}
