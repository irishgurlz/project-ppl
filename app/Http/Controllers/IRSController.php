<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IRS;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Auth;



class IRSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $mahasiswa_id = $user->user->id_mahasiswa;
        $irs = IRS::where('id_mahasiswa', $mahasiswa_id)->get();
        // $IRS = IRS::all(); 
    
        $jadwal = Jadwal::with(['ruang', 'listMataKuliah'])->get(); 
    
        $mata_kuliah = MataKuliah::all();
    
        // Mengirim data ke view
        return view('mahasiswa.irs', compact('jadwal', 'mata_kuliah', 'irs'));
    }

    // $mata_kuliah = MataKuliah::all();
    // $irs = IRS::all();

    // $request->validate([
    //     'kodemk' => 'required|exists:mata_kuliah,kodemk',
    //     'hari' => 'required|string|max:255',
    //     'jam_mulai' => 'required|date_format:H:i',
    //     'jam_selesai' => 'required|date_format:H:i', 
    // ]);

    // Jadwal::create([
    //     'kodemk' => $request->kodemk,
    //     'hari' => $request->hari,
    //     'jam_mulai' => $request->jam_mulai,
    //     'jam_selesai' => $request->jam_selesai, 
    // ]);

    

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
        $jadwal = Jadwal::where('kodemk', $kodemk)->with('listMataKuliah', function ($mk) {
            $mk->select('kodemk', 'nama_mata_kuliah', 'sks');
        })
        ->get();

        // Return the data as JSON
        return response()->json($jadwal);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    public function getSKS(Request $request)
    {
        // Ambil data dari form
        $jadwal = (object) [
            'id_jadwal' => $request->id,
            'kodemk' => $request->kodemk,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'sks' => $request->sks,
            'id_mahasiswa' => $request->id_mahasiswa,
        ];
    
        return view('mahasiswa.sks', compact('jadwal'));
    }  
    
    /**
     * Store a newly created resource in storage.
     */

     public function create(Request $request)
     {
        //  $irs = Jadwal::where('kodemk', $request->kodemk)->first();
 
        //  // $mata_kuliah = MataKuliah::all();
        //  $mata_kuliah = MataKuliah::where('kodemk', $request->kodemk)->first();
 
        //  $user = Auth::user();
        //  $prodi_id = $user->user->id_program_studi;
 
        //  $ruang = Ruang::where('status', '=', '1')
        //          ->where('id_program_studi', '=', $prodi_id)
        //          ->get();
 
        //  return view('Kaprodi.tambahKelas', compact('mata_kuliah', 'jadwal', 'ruang'));
     }

    public function store(Request $request)
    {
        $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswa,id',
            'id_jadwal' => 'required|exists:jadwal,id',
        ]);

        // $irs = IRS::create([
        //     'id_mahasiswa' => $request->id_mahasiswa,
        //     'id_jadwal' => $request->id_jadwal,
        // ]);
        $mahasiswa = Mahasiswa::find($request->id_mahasiswa);
        $mahasiswa->irs()->create([
            'id_jadwal'=> $request->id_jadwal,
        ]);
        return redirect('/mahasiswa/dashboard')->with('success', 'IRS berhasil ditambahkan.');
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
