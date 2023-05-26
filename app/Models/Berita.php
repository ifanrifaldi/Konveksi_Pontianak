<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;

class Berita extends Model
{
    protected $table="berita";

    function handleUploadFoto()
    {
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "Berita";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $gambar->extension();
            $url = $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();

        }
    }
}
