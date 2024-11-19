<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $fillable = ['nama_gedung'];

    
    public function listRuang()
    {
        return $this->hasMany(ruang::class, 'id_gedung');
    }

    // public function programStudi(){
    //     return $this->belongsToMany(Program_Studi::class,'ruang')->withPivot(['nama_ruang', 'kapasitas', 'status']);
    // }

    public function ruang(){
        return $this->hasMany(Ruang::class); 
    }
}
