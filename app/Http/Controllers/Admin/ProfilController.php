<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
   
    public function index()
    {
        $data['list_profil'] = Profil::all();

        return view('backend.profil.index', $data);
    }

   
    public function create()
    {
        return view('backend.profil.create');
    }

   
    public function store(Request $request)
    {
        $profil = New Profil();
        $profil->profil_konveksi = request('profil_konveksi');
        $profil->visi = request('visi');
        $profil->misi = request('misi');
        $profil->moto = request('moto');
        $profil->tujuan = request('tujuan');
        $profil->handleUploadFoto();
        $profil->save();

        return redirect('admin/profil')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function show($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('backend.profil.show', $data);
    }

   
    public function edit($profil)
    {
        $data['profil'] = Profil::find($profil);

        return view('backend.profil.edit', $data);
    }

   
    public function update(Profil $profil)
    {
        $profil->profil_konveksi = request('profil_konveksi');
        $profil->visi = request('visi');
        $profil->misi = request('misi');
        $profil->moto = request('moto');
        $profil->tujuan = request('tujuan');
        $profil->handleUploadFoto();
        $profil->save();

        return redirect('admin/profil')->with('success', 'Data Berhasil di Simpan');
    }

   
    public function destroy($profil)
    {
        Profil::destroy($profil);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
