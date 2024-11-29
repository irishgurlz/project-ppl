<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_Studi;
use App\Models\MataKuliah;
use App\Models\Jadwal;
use App\Models\Ruang;
use Illuminate\Support\Facades\Validator;


class DekanJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allProgramStudi = Program_Studi::all(); 
        return view('Dekan.atur jadwal.intro-jadwal', ['allProgramStudi' => $allProgramStudi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $allProgramStudi = Program_Studi::all();
        $program_studi = Program_Studi::find($id);
        $mata_kuliah = MataKuliah::all(); 
        return view('Dekan.atur jadwal.detail-program_studi', compact('allProgramStudi', 'program_studi', 'mata_kuliah'));
    }

    public function getMataKuliahSemester(Request $request)
    {
        $request->validate([
            'jenis_semester' => 'required',
            'id_program_studi' => 'required|exists:program_studi,id', 
        ]);
    
        $program_studi = Program_Studi::find($request->id_program_studi);
    
        if ($request->jenis_semester == 'ganjil') {
            $mata_kuliah = MataKuliah::where('id_program_studi', $program_studi->id)
                ->whereRaw('mata_kuliah.semester % 2 = 1')
                ->paginate(10);
        } elseif ($request->jenis_semester == 'genap') {
            $mata_kuliah = MataKuliah::where('id_program_studi', $program_studi->id) 
                ->whereRaw('mata_kuliah.semester % 2 = 0')
                ->paginate(10);
        } else {
            $mata_kuliah = MataKuliah::where('id_program_studi', $program_studi->id) 
                ->paginate(10);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Data Mata Kuliah Berhasil Diambil',
            'data' => view('Dekan.partial.table_mata_kuliah', compact('mata_kuliah', 'program_studi'))->render()
        ]);
    }
    
    public function updateStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
    
        $jadwal = Jadwal::findOrFail($request->id);
        $jadwal->status = $request->status;
        $jadwal->save();     
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
    }

    public function updateAllStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'jadwalIds' => 'required|array',
            'jadwalIds.*' => 'exists:jadwal,id',

        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
        $jadwal = Jadwal::whereIn('id', $request->jadwalIds)->get();
    
        foreach ($jadwal as $jadwals) {
            $jadwals->status = $request->status;
            $jadwals->save();
        }
    
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
    }


    public function updateStatusMk(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status_jadwal' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
    
        $mata_kuliah = MataKuliah::findOrFail($request->id);
        $mata_kuliah->status_jadwal = $request->status_jadwal;
        $mata_kuliah->save();     
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
    }

    
    public function updateAllStatusMk(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status_jadwal' => 'required',
            'MataKuliahIds' => 'required|array',
            'MataKuliahIds.*' => 'exists:mata_kuliah,id',

        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
        $mata_kuliah = MataKuliah::whereIn('id', $request->MataKuliahIds)->get();
    
        foreach ($mata_kuliah as $mata_kuliahs) {
            $mata_kuliahs->status_jadwal = $request->status_jadwal;
            $mata_kuliahs->save();
        }
    
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
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

    public function showMataKuliah (string $id){
        // $program_studi = Program_Studi::find($id);
        $allProgramStudi = Program_Studi::all();
        $ruang = Ruang::all();
        $mata_kuliah = MataKuliah::find($id);
        $jadwal = Jadwal::where('kodemk', $mata_kuliah->kodemk)->get();
        return view('Dekan.atur jadwal.detail-mata-kuliah', compact('allProgramStudi','mata_kuliah', 'jadwal', 'ruang'));
    }
}
