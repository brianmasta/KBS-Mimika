<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'galeris';

    protected $fillable = [
        'judul',
        'gambar',
    ];
}
