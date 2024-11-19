<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketua_Program_Studi extends Model
{
    use HasFactory;
    protected $table = 'Ketua_Program_Studi';
    protected $fillable = ['nidn_dosen'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn_dosen', 'nidn');
    }
}
