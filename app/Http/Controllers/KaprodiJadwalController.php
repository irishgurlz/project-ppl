<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_Studi;
use App\Models\Angkatan;
use App\Models\MataKuliah;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Jadwal;
use App\Models\Ruang;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\DB;
use Carbon\Carbon;



class KaprodiJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mata_kuliah = MataKuliah::all();
        $dosen = Dosen::all();
        return view('Kaprodi.aturJadwal', ['mata_kuliah' => $mata_kuliah, 'dosen' => $dosen]);
    }

    public function getMataKuliahSemester(Request $request){
        $request->validate([
            'jenis_semester' => 'required',
        ]);

        $program_studi = Program_Studi::find($request->id_program_studi);

        if ($request -> jenis_semester == 'ganjil'){
            $mata_kuliah = MataKuliah::whereRaw('mata_kuliah.semester % 2 = 1')->paginate(10);
            // $mata_kuliah = MataKuliah::where('semester', '=', 2)->get();
        }
        else if ($request -> jenis_semester == 'genap'){
            $mata_kuliah = MataKuliah::whereRaw('mata_kuliah.semester % 2 = 0')->paginate(10);
        }
        else{
            $mata_kuliah = null;
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Mata Kuliah Berhasil Diambil',
            'data' => view('Kaprodi.partial.table_mata_kuliah', compact('mata_kuliah'))->render()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $mata_kuliah = MataKuliah::all();
        // $jadwal = Jadwal::all();
        $jadwal = Jadwal::where('kodemk', $request->kodemk)->first();

        // $mata_kuliah = MataKuliah::all();
        $mata_kuliah = MataKuliah::where('kodemk', $request->kodemk)->first();


        $ruang = Ruang::where('status', '=', '1')
                ->where('id_program_studi', '=', 3)
                ->get();

        return view('Kaprodi.tambahKelas', compact('mata_kuliah', 'jadwal', 'ruang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodemk' => 'required|exists:mata_kuliah,kodemk',
            'kelas_matkul' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i', // Validasi jam_selesai
            'kuota' => 'required|integer|min:1',
            'id_ruang' => 'required|exists:ruang,id', 
            'jenis_semester' => 'required|string|in:Ganjil,Genap', 
        ]);
    
        Jadwal::create([
            'kodemk' => $request->kodemk,
            'kelas_matkul' => $request->kelas_matkul,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai, // Menyimpan jam_selesai
            'kuota' => $request->kuota,
            'id_ruang' => $request->id_ruang,
            'jenis_semester' => $request->jenis_semester,
        ]);
    
        return redirect('/kaprodi/aturJadwal')->with('success', 'Jadwal berhasil ditambahkan.');
    }


    public function checkRuangan(Request $request)
    {
        $ruangId = $request->input('id_ruang'); // ID ruangan
        $hari = $request->input('hari'); // Hari
        $jamMulaiBaru = Carbon::parse($request->input('jam_mulai'))->format('H:i'); // Format jam mulai baru
        $jamSelesaiBaru = Carbon::parse($request->input('jam_selesai'))->format('H:i'); // Format jam selesai baru

        // Log untuk debugging
        \Log::info('Checking availability', [
            'id_ruang' => $ruangId,
            'hari' => $hari,
            'jam_mulai' => $jamMulaiBaru,
            'jam_selesai' => $jamSelesaiBaru,
        ]);

        // Cek apakah ada jadwal yang tumpang tindih
        $jadwal = Jadwal::where('id_ruang', $ruangId)
                        ->where('hari', $hari)
                        ->where(function ($query) use ($jamMulaiBaru, $jamSelesaiBaru) {
                            $query->where(function ($subQuery) use ($jamMulaiBaru, $jamSelesaiBaru) {
                                $subQuery->where('jam_mulai', '<=', $jamSelesaiBaru)
                                        ->where('jam_selesai', '>=', $jamMulaiBaru); // Waktu baru bertabrakan
                            });
                        })
                        ->exists();

        // Log hasil pengecekan
        \Log::info('Room status', [
            'occupied' => $jadwal
        ]);

        if ($jadwal) {
            return response()->json([
                'status' => 'occupied',
                'message' => 'Ruangan sudah terisi pada jam ini'
            ]);
        } else {
            return response()->json([
                'status' => 'available',
                'message' => 'Ruangan tersedia'
            ]);
        }
    }

    
    
    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mata_kuliah = MataKuliah::find($id);
        $jadwal = Jadwal::where('kodemk', $mata_kuliah->kodemk)->get();
        return view('Kaprodi.detailsaturJadwal', compact('mata_kuliah', 'jadwal'));
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
