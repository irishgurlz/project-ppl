<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'Mahasiswa' => 'App\Models\Mahasiswa',
    'Dekan' => 'App\Models\Dekan',
    'Ketua Program Studi' => 'App\Models\Ketua_Program_Studi',
    'Pembimbing Akademik' => 'App\Models\PembimbingAkademik',
    'Bagian Akademik' => 'App\Models\BagianAkademik',

    
]);

class Actor extends Authenticatable
{
    use HasFactory;
    protected $table = 'actor';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password', 'role'];

    
    public function user(){
        return $this->morphTo();
    }
}
