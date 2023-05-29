<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Profil extends Model
{
    protected $table="profil";

    function handleUploadFoto()
    {
        if (request()->hasFile('struktur_organisasi')) {
            $struktur_organisasi = request()->file('struktur_organisasi');
            $destination = "Profil";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $struktur_organisasi->extension();
            $url = $struktur_organisasi->storeAs($destination, $filename);
            $this->struktur_organisasi = "app/" . $url;
            $this->save();

        }
    }
}
