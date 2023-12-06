<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugas = Petugas :: all();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Petugas $petugas)
    {
        //
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
        ]);

        $petugas = new Petugas;

        $petugas->id = $request->id;
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->nama_petugas = $request->nama_petugas;

        $petugas->save();

        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
