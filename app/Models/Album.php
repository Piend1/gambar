<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;


    public $table = "master.albums";

    protected $fillable = [
        "id",
        "nama_album",
        "deskripsi",
        "tanggal_dibuat",
    ];
}
