<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_Studi;
use App\Models\Ruang;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Validator;


class DekanProdiController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
    
        $ruang = Ruang::findOrFail($request->id);
        $ruang->status = $request->status;
        $ruang->save();     
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
    }

    public function updateAllStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'ruangIds' => 'required|array',
            'ruangIds.*' => 'exists:ruang,id',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }
        $ruangs = Ruang::whereIn('id', $request->ruangIds)->get();
    
        foreach ($ruangs as $ruang) {
            $ruang->status = $request->status;
            $ruang->save();
        }
    
        return response()->json(['success' => true, 'message' => 'Status berhasil diperbarui!']);
    }
    
    

    public function showFromRuang(string $id)
    {
        //
        $program_studi = Program_Studi::find($id);
        $allProgramStudi = Program_Studi::all();
        $ruang = Ruang::all(); 
        return view('Dekan.alokasi.detail-program_studi', ['program_studi' => $program_studi, 'allProgramStudi' => $allProgramStudi, 'ruang' => $ruang]);
    }

    // public function showFromJadwal(string $id)
    // {
    //     $allProgramStudi = Program_Studi::all();
    //     $program_studi = Program_Studi::find($id);
    //     $mata_kuliah = MataKuliah::all(); 
    //     return view('Dekan.atur jadwal.detail-program_studi', ['allProgramStudi' => $allProgramStudi, 'program_studi' => $program_studi, 'mata_kuliah' => $mata_kuliah]);
    // }
}
