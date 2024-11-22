<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use App\Models\Ruang;
use App\Models\Program_Studi;
use Illuminate\Support\Facades\Validator;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display the list of rooms (ruang).
        $allGedung = Gedung::all(); 
        $program_studi = Program_Studi::all();
        return view('Bagian Akademik.alokasi.intro-alokasi', ['allGedung' => $allGedung, 'program_studi' => $program_studi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all Gedung and Program Studi data for the form.
        $allGedung = Gedung::all(); 
        $gedung = Gedung::all();
        $program_studi = Program_Studi::all();
        
        // Return the view with the fetched data.
        return view('Bagian Akademik.alokasi.add-ruang', [
            'allGedung' => $allGedung, 
            'program_studi' => $program_studi,
            'gedung' => $gedung
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'id_gedung' => 'required|exists:gedung,id',
            'nama_ruang' => 'required|string',
            'kapasitas' => 'required|integer',
            'id_program_studi' => 'required|exists:program_studi,id',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }
    
        $gedung = Gedung::find($request->id_gedung);
        $prodi = Program_Studi::find($request->id_program_studi);
    
        $ruang = Ruang::create([
            'nama_ruang' => $request->nama_ruang,
            'kapasitas' => $request->kapasitas,
            'id_gedung' => $gedung->id, 
            'id_program_studi' => $prodi->id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Ruang berhasil ditambahkan!',
            'data' => [
                'nama_ruang' => $ruang->nama_ruang,
                'kapasitas' => $ruang->kapasitas,
                'nama_program_studi' => $prodi->nama_program_studi,
            ],
        ]);

        // Nanti hapus
        // $request->validate([
        //     'nama_ruang' => 'required',
        //     'kapasitas' => 'required|integer',
        //     'id_program_studi' => 'required|exists:program_studi,id',
        //     'id_gedung' => 'required|exists:gedung,id'
        // ]);
    
        // $ruang = new Ruang;
        // $ruang->nama_ruang = $request->nama_ruang;
        // $ruang->kapasitas = $request->kapasitas;
        // $ruang->id_program_studi = $request->id_program_studi;
        // $ruang->id_gedung = $request->id_gedung;
    
        // $ruang->save();
        // $gedung = Gedung::find($request->id_gedung);
        // return redirect()->route('gedung.show', $gedung->id)
        // ->with('success', 'Ruang berhasil ditambahkan.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Code to display a specific Ruang if needed.
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
        // Fetch all Gedung and Program Studi data for the form.
        $allGedung = Gedung::all(); 
        $gedung = Gedung::find($id);
        $ruang = Ruang::find($id);
        $program_studi = Program_Studi::all();
        
        // Return the view with the fetched data.
        return view('Bagian Akademik.alokasi.edit-ruang', [
            'allGedung' => $allGedung, 
            'program_studi' => $program_studi,
            'gedung' => $gedung,
            'ruang' => $ruang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Code to update a specific Ruang if needed.
        $request->validate([
            'nama_ruang' => 'required',
            'kapasitas' => 'required|integer',
            'id_program_studi' => 'required|exists:program_studi,id',
            'id_gedung' => 'required|exists:gedung,id'
        ]);
    
        $ruang = Ruang::find($id);
        $ruang->nama_ruang = $request->nama_ruang;
        $ruang->kapasitas = $request->kapasitas;
        $ruang->id_program_studi = $request->id_program_studi;
        $ruang->id_gedung = $request->id_gedung;
    
        $ruang->save();
        $gedung = Gedung::find($request->id_gedung);
                return redirect()->route('gedung.show', $gedung->id)
            ->with('success', 'Ruang berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruang = Ruang::find($id);
    
        $id_gedung = $ruang->id_gedung;
        $ruang->delete();
        $gedung = Gedung::find($id_gedung);
        return redirect()->route('gedung.show', $gedung->id)
            ->with('success', 'Ruang berhasil dihapus.');
    }
}
