<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Input extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nis', 'nama_siswa', 'jenis_kelamin', 'tahun_masuk', 'asal_kota', 'asal_sekolah'];

    public function setExpiredAttribute($value)
    {
        $this->attributes['tahun_masuk'] = date('Y-m-d H:i:s');
    }
}