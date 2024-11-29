<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IRS;
use App\Models\Jadwal;
use App\Models\MataKuliah;


class IRSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data IRS (asumsi ada filter berdasarkan mahasiswa atau kondisi lainnya)
        $IRS = IRS::all(); // Pastikan hanya mengambil data IRS untuk mahasiswa yang sedang login
    
        // Mengambil jadwal beserta relasi ruang dan mata kuliah
        $jadwal = Jadwal::with(['ruang', 'listMataKuliah'])->get(); // Dengan eager loading untuk memuat relasi
    
        // Mengambil semua data mata kuliah
        $mata_kuliah = MataKuliah::all();
    
        // Mengirim data ke view
        return view('mahasiswa.irs', compact('jadwal', 'mata_kuliah', 'IRS'));
    }
    

    // public function getJadwal(Request $request) {
    //     $request->validate([
    //         'kodemk' => 'required',
    //     ]);
    
    //     // Fetch Jadwal data based on kodemk
    //     $jadwal = Jadwal::where('kodemk', $request->kodemk)->get();
    
    //     // Check if data is found
    //     if ($jadwal->isEmpty()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Data Jadwal Tidak Ditemukan',
    //         ]);
    //     }
    
    //     // Return the response including the rendered HTML
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Data Jadwal Berhasil Ditampilkan',
    //         'data' => view('mahasiswa.partial.table-jadwal', compact('jadwal'))->render()
    //     ]);
    // }

    public function getJadwal(Request $request)
    {
        $kodemk = $request->get('kodemk');
        
        // Retrieve the jadwal data based on the kodemk
        $jadwal = Jadwal::where('kodemk', $kodemk)->get();

        // Return the data as JSON
        return response()->json($jadwal);
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
    public function show(string $id)
    {
        //
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
