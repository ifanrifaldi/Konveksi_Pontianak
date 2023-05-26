<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Admin extends ModelAuthenticate
{
    protected $table ="admin";

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Data-Admin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            
        }
    }
}
