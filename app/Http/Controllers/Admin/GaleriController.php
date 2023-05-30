<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $data['list_galeri'] = Galeri::all();
        return view('backend.galeri.index', $data);
    }

    
    public function store()
    {
        $galeri = New Galeri;
        $galeri->label = request('label');
        $galeri->pemesan = request('pemesan');
        $galeri->bahan = request('bahan');
        $galeri->jumlah = request('jumlah');
        $galeri->handleUploadFoto();

        $galeri->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    
    
    public function update(Galeri $galeri)
    {
        $galeri->label = request('label');
        $galeri->pemesan = request('pemesan');
        $galeri->bahan = request('bahan');
        $galeri->jumlah = request('jumlah');
        $galeri->handleUploadFoto();

        $galeri->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    public function destroy($galeri)
    {
        Galeri::destroy($galeri);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }
}
