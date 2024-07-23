<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan';
    protected $fillable = [
        "nama_keluhan",
        "ongkos",
       // ini foregkey no_pol
       // ini foregkey id_customer
       // ini foregkey id_pegawai

    ];
}
