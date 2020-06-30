<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\aspirasi;

class Laporan extends Model
{
protected $fillable = [
    'nama', 'lokasi', 'kategori','proses', 'keluhan'
];
}
