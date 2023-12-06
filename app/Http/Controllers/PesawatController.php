<?php

namespace App\Http\Controllers;

use App\Models\Pesawat;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesawat = pesawat::all();
        return view('pesawat.index', compact('pesawat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pesawat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'kode_pesawat' => 'required',
            'nama_maskapai' => 'required',
            'jumlah_kursi_pesawat' => 'required',
            'keterangan' => 'required',
        ]);

        $pesawat = new pesawat;

        $pesawat->id = $request->id;
        $pesawat->kode_pesawat = $request->kode_pesawat;
        $pesawat->nama_maskapai = $request->nama_maskapai;
        $pesawat->jumlah_kursi_pesawat = $request->jumlah_kursi_pesawat;
        $pesawat->keterangan = $request->keterangan;

        $pesawat->save();

        return redirect()->route('pesawat.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pesawat $pesawat)
    {
        //
        return view('pesawat.show' , compact('pesawat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesawat $pesawat)
    {
        //
        return view('pesawat.edit' , compact('pesawat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesawat $pesawat)
    {
        //
        $request->validate([
            'keterangan' => 'required',
        ]);

        $pesawat->update($request->all());

        return redirect()->route('pesawat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesawat $pesawat)
    {
        //
        $pesawat = pesawat::where('id', $pesawat->id)->delete();
        return redirect()->route('pesawat.index');
    }
}
