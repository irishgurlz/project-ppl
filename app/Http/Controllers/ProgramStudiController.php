<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_Studi;
    use App\Models\Ruang;
use App\Models\Ketua_Program_Studi;
use Illuminate\Support\Facades\Validator;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $program_studi = Program_Studi::all(); 
        $ketua_program_studi = Ketua_Program_Studi::with('dosen')->get();
        return view('Bagian Akademik.input prodi.detail-prodi', ['program_studi' => $program_studi, 'ketua_program_studi' => $ketua_program_studi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Bagian Akademik.input prodi.add-prodi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_program_studi' => 'required',
            'id_ketua_program_studi' => 'required|exists:ketua_program_studi,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $ketua_program_studi = Ketua_Program_Studi::find($request->id_ketua_program_studi);
        $program_studi = Program_Studi::create([
            'nama_program_studi' => $request->nama_program_studi,
            'id_ketua_program_studi' => $ketua_program_studi->id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Program Studi Berhasil Ditambahkan!',
            'data' => $program_studi
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $program_studi = Program_Studi::find($id);
        $ketua_program_studi = Ketua_Program_Studi::with('dosen')->get();
        return view('Bagian Akademik.input prodi.edit-prodi', ['program_studi'=>$program_studi,  'ketua_program_studi' => $ketua_program_studi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming data
        $request->validate([
            'nama_program_studi' => 'required',
            'id_ketua_program_studi' => 'required|exists:ketua_program_studi,id',
        ]);
        $program_studi = Program_Studi::findOrFail($id);

        $program_studi->nama_program_studi = $request->input('nama_program_studi');

        $ketua_program_studi = Ketua_Program_Studi::findOrFail($request->input('id_ketua_program_studi'));
        $program_studi->ketua_program_studi()->associate($ketua_program_studi);
    
        $program_studi->save();

        return redirect('/akademik/program_studi')->with('success', 'Program Studi updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program_studi = Program_Studi::find($id);
        $program_studi->listRuang()->delete();
        $program_studi->delete();
    
        return redirect('/akademik/program_studi');
    }
}
