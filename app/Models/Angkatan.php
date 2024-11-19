<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;
    
    protected $table = 'angkatan';
    
    // Menambahkan 'status' ke dalam array $fillable
    protected $fillable = ['angkatan'];
}
