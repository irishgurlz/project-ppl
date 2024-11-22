<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $fillable = [
        'kodemk',
        'nama_mata_kuliah', 
        'sks', 
        'nidn_dosen_1', 
        'nidn_dosen_2', 
        'nidn_dosen_3', 
        'id_program_studi',
        'jenis_mata_kuliah', 
        'semester'
    ];

    /**
     * Relasi ke Jadwal (one-to-many).
     */
    public function dosen1()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen_1', 'nidn');
    }
    
    public function dosen2()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen_2', 'nidn');
    }
    
    public function dosen3()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen_3', 'nidn');
    }
    
}
