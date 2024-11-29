<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = [
        'kodemk', 
        'id_ruang', 
        'hari', 
        'jam_mulai',
        'jam_selesai', 
        'jenis_semester', 
        'kelas_matkul',
        'kuota'
    ];

    /**
     * Relasi ke MataKuliah (many-to-one).
     */
    public function listMataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'kodemk', 'kodemk');
    }
    

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'id_ruang'); 
    }
}
