<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aspirasi extends Model
{
    protected $fillable = [
        'nama', 'lokasi', 'kategori','proses', 'keluhan'
    ];
}
