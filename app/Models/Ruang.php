<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    
    // Menambahkan 'status' ke dalam array $fillable
    protected $fillable = ['nama_ruang', 'kapasitas', 'id_program_studi', 'id_gedung', 'status'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung');
    }

    public function programStudi()
    {
        return $this->belongsTo(Program_Studi::class, 'id_program_studi');
    }
}
