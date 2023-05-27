<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        $data['list_visi'] = Visi::all();

        return view('backend.profil.visi.index', $data);
    }

    
    public function store(Request $request)
    {
        $visi = New Visi();
        $visi->visi = request('visi');
        $visi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($visi)
    {
        $visi = Visi::find($visi);
        $visi->visi = request('visi');
        $visi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($visi)
    {
        Visi::destroy($visi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
