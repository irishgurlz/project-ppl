<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Dosen;
use App\Models\Program_Studi;
use Illuminate\Support\Facades\Validator;


class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mata_kuliah = MataKuliah::all();
        $dosen = Dosen::all();
        return view('Kaprodi.inputMataKuliah1', ['mata_kuliah' => $mata_kuliah, 'dosen' => $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mata_kuliah = MataKuliah::all();
        $dosen = Dosen::all();
        $program_studi = Program_Studi::all();

        return view('Kaprodi.inputMataKuliah', ['mata_kuliah' => $mata_kuliah, 'dosen' => $dosen, 'program_studi' => $program_studi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debugging: log data request yang dikirim
        \Log::info('Data yang dikirim:', $request->all());
    
        $request->validate([
            'kodemk' => 'required|unique:mata_kuliah,kodemk',
            'nama_mata_kuliah' => 'required|unique:mata_kuliah,nama_mata_kuliah|max:255',
            'sks' => 'required|integer|min:1|max:6',
            'id_program_studi' => 'required|exists:program_studi,id', // Validasi ID Program Studi
            'nidn_dosen_1' => 'required|exists:dosen,nidn',
            'nidn_dosen_2' => 'nullable|exists:dosen,nidn|different:nidn_dosen_1',
            'nidn_dosen_3' => 'nullable|exists:dosen,nidn|different:nidn_dosen_1|different:nidn_dosen_2',
            'jenis_mata_kuliah' => 'required|string',
            'semester' => 'required|integer|min:1',
        ], [
            'nidn_dosen_2.different' => 'Dosen 2 tidak boleh sama dengan Dosen 1.',
            'nidn_dosen_3.different' => 'Dosen 3 tidak boleh sama dengan Dosen 1 atau Dosen 2.',
        ]);
    
        // Membuat data mata kuliah baru
        $mata_kuliah = MataKuliah::create([
            'kodemk' => $request->kodemk,
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
            'nidn_dosen_1' => $request->nidn_dosen_1,
            'nidn_dosen_2' => $request->nidn_dosen_2,
            'nidn_dosen_3' => $request->nidn_dosen_3,
            'id_program_studi' => $request->id_program_studi,
            'jenis_mata_kuliah' => $request->jenis_mata_kuliah,
            'semester' => $request->semester,
        ]);
    
        return redirect('/kaprodi/mata_kuliah')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mata_kuliah = MataKuliah::all();
        $dosen = Dosen::all();
        return view('Kaprodi.inputMataKuliah1', ['mata_kuliah' => $mata_kuliah, 'dosen' => $dosen]);
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
