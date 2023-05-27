<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Models\Rayon;
use App\Models\Anggota;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keluarga extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'keluargas';

    protected $fillable = [
        'name',
        'alamat',
        'asal_jemaat',
        'rayon_id',
        'provinsi',
        'kabupaten',
        'distrik',
        'kelurahan',
        'rt',
        'pos',
        'hp',
        'status',
        'keterangan',
    ];

    public function anggotas()
    {
        return $this->hasMany(Anggota::class, 'kk_id', 'id')->orderby('created_at');
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }

}
