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
        $IRS = IRS::all(); 
        $jadwal = Jadwal::all();
        $mata_kuliah = MataKuliah::all();
        return view('mahasiswa/irs', ['jadwal' => $jadwal, 'MataKuliah' => $mata_kuliah]);
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
