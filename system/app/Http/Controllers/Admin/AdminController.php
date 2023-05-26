<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.index');
    }

    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('backend.admin.index', $data);
    }

    
    public function store()
    {
        $admin = New Admin;
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadFoto();

        $admin->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    
    
    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        if(request('password')) $admin->password = request('password');
        $admin->handleUploadFoto();

        $admin->save();

        return back()->with('success', 'Data Berhasil Di simpan');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil Di hapus');
    }
}
