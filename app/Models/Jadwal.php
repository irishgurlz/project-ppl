<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = [
        'id_mata_kuliah', 
        'id_ruang', 
        'hari', 
        'jam', 
        'tahun_ajaran', 
        'semester'
    ];

    /**
     * Relasi ke MataKuliah (many-to-one).
     */
    public function listMataKuliah()
    {
        return $this->hasMany(MataKuliah::class, 'id_mata_kuliah', 'id');
    }
}
