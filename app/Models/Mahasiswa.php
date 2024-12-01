<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['NIM', 'alamat', 'angkatan', 'id_program_studi', 'telepon', 'status_mahasiswa', 'id_pembimbing_akademik'];

    public function actors(){
        return $this->morphOne(Actor::class, 'user');
    }

    public function irs(){
        return $this->hasMany(IRS::class, 'id_mahasiswa');
    }
}
