<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Komentar;

class BeritaController extends Controller
{
    
    public function index()
    {
        $data['list_berita'] = Berita::all();

        return view('backend.berita.index', $data);
    }

    public function create()
    {
        return view('backend.berita.create');
    }

    
    public function store()
    {
        $berita = New Berita;
        $berita->nama_penulis = request('nama_penulis');
        $berita->judul = request('judul');
        $berita->isi = request('isi');
        $berita->handleUploadFoto();
        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('backend.berita.show', $data);
    }

    
    public function edit($berita)
    {
        $data['berita'] = Berita::find($berita);
        
        return view('backend.berita.edit', $data);
    }

    
    public function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->nama_penulis = request('nama_penulis');
        $berita->judul = request('judul');
        $berita->isi = request('isi');
        $berita->handleUploadFoto();
        $berita->save();

        return redirect('admin/berita')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }

    public function showKomentar($berita)
    {
        $data['berita'] = Berita::find($berita);
        $data['list_komentar'] = Komentar::where('id_berita', $berita)->get();

        return view('backend.berita.komentar', $data);
    }
}
