<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan facade DB diimpor

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('actor')->insert([
            // [
            //     'name' => 'Aniqah Nursabrina',
            //     'email' => 'aniqahnursabrina@akademik.com',
            //     'password' => bcrypt('akademik'),
            //     'role' => 'akademik'
            // ],
            // [
            //     'name' => 'Aniqah Nursabrina',
            //     'email' => 'aniqahnursabrina@dekan.com',
            //     'password' => bcrypt('dekan'),
            //     'role' => 'dekan'
            // ],
            [
                'name' => 'Qun Adrian',
                'email' => 'qunadrian@kaprodi.com',
                'password' => bcrypt('kaprodi'),
                'role' => 'ketua_program_studi'
            ],
            [
                'name' => 'Emi Sabrina',
                'email' => 'emisabrina@kaprodi.com',
                'password' => bcrypt('kaprodi'),
                'role' => 'ketua_program_studi'
            ],
            // [
            //     'name' => 'Yesi Dwiningtias',
            //     'email' => 'yesidwi@mahasiswa.com',
            //     'password' => bcrypt('mahasiswa'),
            //     'role' => 'mahasiswa'
            // ]
        ]);
    }
}
