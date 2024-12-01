<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketua_Program_Studi extends Model
{
    use HasFactory;
    protected $table = 'Ketua_Program_Studi';
    protected $fillable = ['nidn_dosen', 'id_program_studi'];

    public function dosen()
    {
        return $this->hasOne(Dosen::class, 'nidn_dosen');
    }

    public function programStudi()
    {
        return $this->belongsTo(Program_Studi::class, 'id_program_studi');
    }

    public function actors(){
        return $this->morphOne(Actor::class, 'user');
    }
}
