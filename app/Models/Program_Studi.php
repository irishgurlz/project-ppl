<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program_Studi extends Model
{
    use HasFactory;
    protected $table = 'Program_Studi';
    protected $fillable = ['nama_program_studi', 'id_ketua_program_studi'];

    public function listRuang(){
        return $this->hasMany(Ruang::class,'id_program_studi');
    }

    public function listMataKuliah(){
        return $this->hasMany(MataKuliah::class,'id_program_studi');
    }

    // public function gedung(){
    //     return $this->belongsToMany(Gedung::class,'ruang')->withPivot(['nama_ruang', 'kapasitas', 'status']);
    // }

    public function ruang(){
        return $this->hasMany(Ruang::class); 
    }

    public function ketua_program_studi()
    {
        return $this->hasOne(Ketua_Program_Studi::class, 'id');
    }

    
}
