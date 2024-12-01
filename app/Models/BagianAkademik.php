<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianAkademik extends Model
{
    use HasFactory;
    protected $table = 'akademik';
    protected $fillable = ['nip'];

    public function actors(){
        return $this->morphOne(Actor::class, 'user');
    }
}
