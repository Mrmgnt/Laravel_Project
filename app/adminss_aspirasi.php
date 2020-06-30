<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_aspirasi extends Model
{
    protected $fillable = [
        'nama', 'lokasi', 'kategori','proses', 'keluhan'
    ];
}
