<?php

namespace App\Models;

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;


class Galeri extends Model
{
    protected $table="galeri";

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "galeri";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }
}
