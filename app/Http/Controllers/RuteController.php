<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rute;
use App\Models\Pesawat;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Rute $rute)
    {
        //
        $rute = rute::all();
        return view('rute.index', compact('rute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Rute $rute, Pesawat $pesawat)
    {
        $rute = Rute::all();
        $pesawat = Pesawat::all();
        return view('rute.create', compact('rute','pesawat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Rute $rute)
    {
        // dd($request);
        $request->validate([
            'pesawat_id' => 'required',
            'tujuan' => 'required',
            'rute_awal' => 'required',
            'rute_akhir' => 'required',
            'harga' => 'required',
        ]);

        $rute::create([
        'pesawat_id' => $request['pesawat_id'],
        'tujuan' => $request['tujuan'],
        'rute_awal' => $request['rute_awal'],
        'rute_akhir' => $request['rute_akhir'],
        'harga' => $request['harga'],
        ]);

        return redirect()->route('rute.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Rute $rute)
    {
        $rute = rute::all();
        return view('rute.show' , compact('rute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rute $rute)
    {
        $rute = rute::all();
        return view('rute.edit' , compact('rute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rute $rute)
    {
        //
        $request->validate([
            'tujuan' => 'required',
            'rute_awal' => 'required',
            'rute_akhir' => 'required',
        ]);


        $maskapai->update($request->all());

        return redirect()->route('rute.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rute $rute)
    {
        //
        $rute = rute::where('id', $rute->id)->delete();
        return redirect()->route('rute.index');
    }
}
