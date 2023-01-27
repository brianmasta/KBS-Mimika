<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal_Ibadah extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'jadwal_ibadahs';

    protected $fillable = [
        'date',
        'keluarga',
        'alamat',
        'liturgi',
        'firman',
    ];

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }
}
