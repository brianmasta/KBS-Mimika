<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tamplatesurat extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'tamplate_Surats';

    protected $fillable = [
        'judul',
        'file',
    ];
}
