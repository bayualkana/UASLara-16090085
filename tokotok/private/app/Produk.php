<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    protected $fillable = ['namaproduk', 'series', 'ukuran', 'harga', 'gambar', 'deleted_at'
    ];
protected $dates = ['deleted_at'];
}
