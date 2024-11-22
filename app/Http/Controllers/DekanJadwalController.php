<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program_Studi;

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
    public function show(string $id)
    {
        $allProgramStudi = Program_Studi::all(); 
        return view('Dekan.atur jadwal.detail-program_studi', ['allProgramStudi' => $allProgramStudi]);
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

    public function showSemester (){
        // $program_studi = Program_Studi::find($id);
        $allProgramStudi = Program_Studi::all();
        return view('Dekan.atur jadwal.detail-semester', ['allProgramStudi' => $allProgramStudi]);
    }
}
