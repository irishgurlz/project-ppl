<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Actor extends Authenticatable
{
    use HasFactory;
    protected $table = 'actor';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password', 'role'];
}
