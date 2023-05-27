<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        $data['list_tujuan'] = Tujuan::all();

        return view('backend.profil.tujuan.index', $data);
    }

    
    public function store(Request $request)
    {
        $tujuan = New Tujuan();
        $tujuan->tujuan = request('tujuan');
        $tujuan->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function update($tujuan)
    {
        $tujuan = Tujuan::find($tujuan);
        $tujuan->tujuan = request('tujuan');
        $tujuan->save();

        return back()->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($tujuan)
    {
        Tujuan::destroy($tujuan);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
