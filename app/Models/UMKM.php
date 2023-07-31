<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;

    protected $fillable = ['nama_umkm', 'deskripsi', 'gambar_umkm', 'gambar_produk'];
    protected $table = 'umkms';
}
