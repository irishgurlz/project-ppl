<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;
    protected $table = 'Dekan';
    protected $fillable = ['nip', 'fakultas'];

    public function actors(){
        return $this->morphOne(Actor::class, 'user');
    }
}
