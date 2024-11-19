<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Ruang;
use App\Models\Program_Studi;
use Illuminate\Support\Facades\Validator;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allGedung = Gedung::all(); 
        $program_studi = Program_Studi::all();
        return view('Bagian Akademik.alokasi.intro-alokasi', ['allGedung' => $allGedung, 'program_studi' => $program_studi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allGedung = Gedung::all(); 
        return view('Bagian Akademik.alokasi.add-gedung', ['allGedung' => $allGedung]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_gedung' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $allGedung = Gedung::create([
            'nama_gedung' => $request->nama_gedung
        ]);
        $program_studi = Program_Studi::all();

        return response()->json([
            'success' => true,
            'message' => 'Gedung Berhasil Ditambahkan!',
            'data' => $allGedung
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gedung = Gedung::find($id);
        $allGedung = Gedung::all(); // To show all gedung in the sidebar
        $ruang = Ruang::all(); 
        $program_studi = Program_Studi::all();
        return view('Bagian Akademik.alokasi.detail-gedung', ['gedung' => $gedung, 'allGedung' => $allGedung, 'ruang' => $ruang, 'program_studi' => $program_studi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_gedung' => 'required',
        ]);

        $gedung = Gedung::find($id);
        $gedung->nama_gedung = $request->input('gedung');

        $gedung->save();
        return redirect('/akademik/gedung');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $allGedung = Gedung::find($id);
        $allGedung->listRuang()->delete();
        $allGedung->delete();

        return redirect('/akademik/gedung');
    }
}
