<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Penumpang;
use App\Models\Rute;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pemesanan = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemesanan = Pemesanan::all();
        $penumpang = Penumpang::all();
        $rute = Rute::all();
        return view('pemesanan.create', compact('penumpang', 'pemesanan','rute'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pemesanan $pemesanan)
    {
        //
        // dd($request);
        $request->validate([

            'penumpangs_id' => 'required',
            'rute_id' => 'required',
            'kode_pemesanan' => 'required',
            'jumlah_kursi_pemesanan' => 'required',
            'tanggal_berangkat' => 'required',
            'tempat_pemesanan' => 'required',
            'kelas_maskapai' => 'required',
            'boarding_pass' => 'required',
            'total_bayar' => 'required',
            'tujuan' => 'required',
            'take_off' => 'required'
        ]);

        $pemesanan = new Pemesanan;
        $pemesanan->penumpangs_id = $request->penumpangs_id;
        $pemesanan->rute_id = $request->rute_id;
        $pemesanan->kode_pemesanan = $request->kode_pemesanan;
        $pemesanan->jumlah_kursi_pemesanan = $request->jumlah_kursi_pemesanan;
        $pemesanan->tanggal_berangkat = $request->tanggal_berangkat;
        $pemesanan->tempat_pemesanan = $request->tempat_pemesanan;
        $pemesanan->kelas_maskapai = $request->kelas_maskapai;
        $pemesanan->boarding_pass = $request->boarding_pass;
        $pemesanan->total_bayar = $request->total_bayar;
        $pemesanan->tujuan = $request->tujuan;
        $pemesanan->take_off = $request->take_off;
        $pemesanan->save();

        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
