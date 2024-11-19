<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program_Studi;
use App\Models\Gedung;
use App\Models\Ruang;


class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = Program_Studi::find(1);
        $gedung = Gedung::max('id');
        for ($i = 3; $i < 10; $i++) {
            Ruang::create([
                'nama_ruang' => "A10".$i,
                'kapasitas' => 20,
                'status' => '0',
                'id_program_studi' => $prodi->id,
                'id_gedung' => $gedung,
            ]);
        }
    }
}
