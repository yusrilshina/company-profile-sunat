<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "galleries";
    protected $fillable = [
        'gambar',
        'nama',
        'umur',
        'alamat',
    ];
    protected $dates = ['deleted_at'];
}
