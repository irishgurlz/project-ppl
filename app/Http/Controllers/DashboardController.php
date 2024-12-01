<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Ketua_Program_Studi;

class DashboardController extends Controller
{
    public function akademik(){
        $actor = auth()->user();
        return view('/Bagian Akademik/dashboard', compact('actor'));
    }

    public function dekan(){
        $actor = auth()->user();
        return view('/Dekan/dashboard', compact('actor'));
    }

    public function mahasiswa(){
        $actor = auth()->user();
        return view('/Mahasiswa/dashboard', compact('actor'));
    }

    public function kaprodi(){
        $actor = auth()->user();
        // $kaprodi = Ketua_Program_Studi::first();
        return view('/Kaprodi/dashboard', compact('actor'));
    }

    public function pembimbing(){
        $actor = auth()->user();
        // $kaprodi = Ketua_Program_Studi::first();
        return view('/pembimbing/dashboard', compact('actor'));
    }
}
