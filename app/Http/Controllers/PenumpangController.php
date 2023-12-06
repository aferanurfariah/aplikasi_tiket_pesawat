<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penumpang = Penumpang::all();
        return view('penumpang.index',compact('penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Penumpang $penumpang)
    {
        $penumpang = Penumpang::all();
        return view('penumpang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Penumpang $penumpang)
    {
        //
        $request->validate([

            'nama_penumpang' => 'required',
            'alamat_penumpang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',

        ]);

        $penumpang = new Penumpang;


        $penumpang->nama_penumpang= $request->nama_penumpang;
        $penumpang->alamat_penumpang = $request->alamat_penumpang;
        $penumpang->tanggal_lahir = $request->tanggal_lahir;
        $penumpang->jenis_kelamin = $request->jenis_kelamin;
        $penumpang->no_telepon = $request->no_telepon;

        $penumpang->save();
        if ($request->user() && $request->user()->id == 1) {
            return redirect('pemesanan.create');
        }
         else {
            // Jika bukan pengguna pertama, arahkan ke halaman lain
            return redirect('penumpang.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Penumpang $penumpang)
    {
        //
        return view('penumpang.show', compact('penumpang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penumpang $penumpang)
    {
        //
        return view('penumpang.edit', compact('penumpang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penumpang $penumpang)
    {
        //
        $request->validate([
            'alamat_penumpang' => 'required',
        ]);

        $penumpang->update($request->all());

        return redirect()->route('penumpang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penumpang $penumpang)
    {
        //
        $penumpang = penumpang::where('id', $penumpang->id)->delete();
        return redirect()->route('penumpang.index');
    }
}
