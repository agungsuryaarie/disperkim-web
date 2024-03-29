<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';

    protected $fillable = [
        'kategori', 'judul', 'slug', 'isi', 'viewer', 'tanggal', 'jam', 'foto'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
