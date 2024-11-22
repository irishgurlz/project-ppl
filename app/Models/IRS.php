<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    use HasFactory;
    protected $table = 'irs';
    protected $fillable = ['id_mahasiswa', 'id_jadwal', 'tahun_ajaran', 'jenis_semester', 'status'];

    public function listMataKuliah(){
        return $this->hasMany(MataKuliah::class,'id_mata_kuliah');
    }
}
