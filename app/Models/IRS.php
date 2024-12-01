<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    use HasFactory;
    protected $table = 'irs';
    protected $fillable = ['id_mahasiswa', 'id_jadwal', 'status'];

    public function listMataKuliah(){
        return $this->hasMany(MataKuliah::class,'kodemk');
    }

    public function listJadwal(){
        return $this->hasMany(Jadwal::class,'id_jadwal');
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
