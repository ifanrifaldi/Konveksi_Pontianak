<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        $data['list_moto'] = Moto::all();

        return view('backend.profil.moto.index', $data);
    }

    
    public function store(Request $request)
    {
        $moto = New Moto();
        $moto->moto = request('moto');
        $moto->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($moto)
    {
        $moto = Moto::find($moto);
        $moto->moto = request('moto');
        $moto->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($moto)
    {
        Moto::destroy($moto);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
