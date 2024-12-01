<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ketua_Program_Studi;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = ['nidn', 'nama_dosen'];

    public function KetuaProgramStudi() {
        return $this->belongsTo(Ketua_Program_Studi::class, 'nidn_dosen');
    }

    public function PembimbingAkademik()
    {
        return $this->hasOne(PembimbingAkademik::class, 'nidn_dosen', 'nidn');
    }

}
