<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Models\Agama;
use App\Models\Darah;
use App\Models\Kelamin;
use App\Models\Hubungan;
use App\Models\Keluarga;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use Illuminate\Support\Carbon;
use App\Models\Kewarganegaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;
    use Uuid;
    
    protected $table = 'anggotas';

    protected $fillable = [
        'name',
        'nik',
        'kelamin_id',
        'tempat_lahir',
        'tanggal_lahir',
        'agama_id',
        'pendidikan_id',
        'pekerjaan_id',
        'darah_id',
        'perkawinan_id',
        'hubungan_id',
        'suku',
        'kewarganegaraan_id',
        'nama_ayah',
        'nama_ibu',
        'kk_id'
    ];

    public function hubungan()
    {
        return $this->belongsTo(Hubungan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function perkawinan()
    {
        return $this->belongsTo(Perkawinan::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function darah()
    {
        return $this->belongsTo(Darah::class);
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo(Kewarganegaraan::class);
    }

    public function kelamin()
    {
        return $this->belongsTo(Kelamin::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }

}
