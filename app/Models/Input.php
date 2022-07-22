<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Input extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nis', 'nama_siswa', 'jenis_kelamin', 'tahun', 'asal_kota', 'asal_sekolah'];

    public function setTahunAttribute($value)
    {
        $this->attributes['tahun'] = date('Y-m-t', strtotime($value));
    }
}