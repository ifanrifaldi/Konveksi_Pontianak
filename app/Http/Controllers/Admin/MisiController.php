<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Misi;

class MisiController extends Controller
{
    
    public function index()
    {
        $data['list_misi'] = Misi::all();

        return view('backend.profil.misi.index', $data);
    }

    
    public function store(Request $request)
    {
        $misi = New Misi();
        $misi->misi = request('misi');
        $misi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($misi)
    {
        $misi = Misi::find($misi);
        $misi->misi = request('misi');
        $misi->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($misi)
    {
        Misi::destroy($misi);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
