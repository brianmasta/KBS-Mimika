<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Struktural extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'name',
        'jabatan',
        'sosial_media',
        'foto',
    ];
}
