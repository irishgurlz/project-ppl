<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan facade DB diimpor
use App\Models\Dekan;
use App\Models\Program_Studi;
use App\Models\Ketua_Program_Studi;
use App\Models\Dosen;
use App\Models\BagianAkademik;
use App\Models\PembimbingAkademik;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // DB::table('actor')->insert([
    //     // [
    //     //     'name' => 'Aniqah Nursabrina',
    //     //     'email' => 'aniqahnursabrina@akademik.com',
    //     //     'password' => bcrypt('akademik'),
    //     //     'role' => 'akademik'
    //     // ],
    //     // [
    //     //     'name' => 'Aniqah Nursabrina',
    //     //     'email' => 'aniqahnursabrina@dekan.com',
    //     //     'password' => bcrypt('dekan'),
    //     //     'role' => 'dekan'
    //     // ],
    //     // [
    //     //     'name' => 'Qun Adrian',
    //     //     'email' => 'qunadrian@kaprodi.com',
    //     //     'password' => bcrypt('kaprodi'),
    //     //     'role' => 'ketua_program_studi'
    //     // ],
    //     // [
    //     //     'name' => 'Emi Sabrina',
    //     //     'email' => 'emisabrina@kaprodi.com',
    //     //     'password' => bcrypt('kaprodi'),
    //     //     'role' => 'ketua_program_studi'
    //     // ],
    //     // [
    //     //     'name' => 'Yesi Dwiningtias',
    //     //     'email' => 'yesidwi@mahasiswa.com',
    //     //     'password' => bcrypt('mahasiswa'),
    //     //     'role' => 'mahasiswa'
    //     // ]
    // ]);
    
    // $this->Dekan();
    // $this->program_studi('Informatika');
    // $this->program_studi('Statistika');
    // $this->program_studi('Fisika');
    
    // $this->Ketua_Program_Studi('1234567890', 'Nandha Trimerdiani H', Program_Studi::where('nama_program_studi', 'Informatika')->first());
    // $this->Ketua_Program_Studi('1234567891', 'Yesi Dwi', Program_Studi::where('nama_program_studi', 'Statistika')->first());
    
    // $nip_akademik = uniqid();
    // $this->Akademik($nip_akademik, 'Aniqah Nursabrina');
    // $this->Akademik(uniqid(), 'Sabrina');
    

    // $nama_dosen = [
    //     'Dinar Mutiara, S.T., M.infoTech',
    //     'Sandy Kurniawan, S.Kom., M.Kom.',
    //     'Dr.Eng. Adi Wibowo, S.T. M.Si.',
    //     'Rismiyati, B.Eng., M.Si',
    //     'Dr. Aris Puji Widodo, S.T. M.Kom.',
    //     'Dr. Aris Sugiharto, S.Kom., M.Kom.',
    //     'Priyo Sidik Sasongko, S.Si., S.Kom. '
    // ];
    
    
    // $i = 1;
    // foreach ($nama_dosen as $nama) {
        //     $this->dosen($nama, '123456781'.$i);
        //     $i++;
        // }
        public function run(): void
        {
            // $this->isiMahasiswa();
            $mahasiswa = Mahasiswa::create([
                'nim' => '240601221xxx',
                'alamat' => 'Talaga Bestari Blok D3 No.6',
                'angkatan' => 2022,
                'id_program_studi' => 1,
                'telepon' => '081286714691',
                'status_mahasiswa' => 'Aktif',
                'id_pembimbing_akademik' => '1',

            ]);
              
              $mahasiswa->actors()->create([
                'name' => 'Sausan Berliana',
                'email' => 'mahasiswa1@mahasiswa.com',
                'password' => bcrypt('mahasiswa'),
                'role' => 'mahasiswa',
              ]);

        }
        
        public function isiMahasiswa()
        {
            $nama_pembimbing_akademik = [
                'Dinar Mutiara, S.T., M.infoTech',
                'Sandy Kurniawan, S.Kom., M.Kom.',
                'Dr.Eng. Adi Wibowo, S.T. M.Si.',
            ];
        
            foreach ($nama_pembimbing_akademik as $index => $nama) {
                // Generate NIDN based on index (ensure it matches your requirements)
                $nidn = '1406' . str_pad($index + 1, 4, '0', STR_PAD_LEFT);
        
                // Call function to create Pembimbing Akademik and Mahasiswa
                $this->Mahasiswa($nidn, $nama);
            }
        }
        
        public function Mahasiswa($nidn, $nama)
        {
            // Create Pembimbing Akademik
            $dosen = Dosen::create([
                'nidn' => $nidn,
                'nama_dosen' => $nama,
            ]);
        
            // Create Mahasiswa associated with the Pembimbing Akademik
            $mahasiswa = Mahasiswa::create([
                'NIM' => 'NIM' . rand(1000, 9999), // Generating random NIM, adjust as necessary
                'alamat' => 'Alamat default', // Replace with your actual logic
                'angkatan' => date('Y'), // Example, adjust accordingly
                'id_program_studi' => 1, // Use the actual program studi ID
                'telepon' => '08123456789', // Example phone number
                'status_mahasiswa' => 'Aktif', // Example status
                'id_pembimbing_akademik' => $dosen->id,
            ]);
        
            // Create user actor for the Mahasiswa
            $id = Mahasiswa::max('id');
            $mahasiswa->actors()->create([
                'name' => $nama,
                'email' => "pembimbing$id@pembimbing.com",
                'password' => bcrypt('pembimbing'),
                'role' => 'pembimbing_akademik',
            ]);
        }
        


    // public function Dekan(){
    //     $user = Dekan::create([
    //         'nip' => fake()->randomNumber(9, true) . fake()->randomNumber(9, true),
    //         'fakultas' => 'Sains dan Matematika'
    //     ]);
    //     $user->actors()->create([
    //         'name' => 'Aniqah Nursabrina',
    //         'email' => 'aniqahnursabrina@dekan.com',
    //         'password'=>bcrypt('dekan'),
    //         'role' => 'dekan',
    //     ]);
    // }


    // public function program_studi($nama){
    //     $prodi = Program_Studi::create([
    //         'nama_program_studi' =>$nama,
    //     ]);
    // }
    
    // public function Ketua_Program_Studi($nidn, $nama, $prodi){
    //     $dosen = Dosen::create([
    //         'nidn' => $nidn,
    //         'nama_dosen' => $nama,
    //     ]);

    //     $user = $dosen->KetuaProgramStudi()->create([
    //         'id_program_studi' => $prodi->id,
    //         'nidn_dosen' => $dosen->nidn,
    //     ]);

    //     $id = Ketua_Program_Studi::max('id');
    //     $user->actors()->create([
    //         'name' => $nama,
    //         'email' => "kaprodi$id@kaprodi.com",
    //         'password'=>bcrypt('kaprodi'),
    //         'role' => 'ketua_program_studi',
    //     ]); 
    // }

    public function isiPembimbingAkademik()
    {
        $nama_dosen = [
            'Dinar Mutiara, S.T., M.infoTech',
            'Sandy Kurniawan, S.Kom., M.Kom.',
            'Dr.Eng. Adi Wibowo, S.T. M.Si.',
            'Rismiyati, B.Eng., M.Si',
            'Dr. Aris Puji Widodo, S.T. M.Kom.',
            'Dr. Aris Sugiharto, S.Kom., M.Kom.',
            'Priyo Sidik Sasongko, S.Si., S.Kom. '
        ];
    
        foreach ($nama_dosen as $index => $nama) {
            // Generate NIDN berdasarkan index (pastikan sesuai kebutuhan Anda)
            $nidn = '2023' . str_pad($index + 1, 4, '0', STR_PAD_LEFT);
    
            // Panggil fungsi PembimbingAkademik dengan parameter
            $this->PembimbingAkademik($nidn, $nama);
        }
    }
    
    public function PembimbingAkademik($nidn, $nama)
    {
        $dosen = Dosen::create([
            'nidn' => $nidn,
            'nama_dosen' => $nama,
        ]);
    
        $user = $dosen->PembimbingAkademik()->create([
            'nidn_dosen' => $dosen->nidn,
        ]);    
    
        $id = PembimbingAkademik::max('id');
        $user->actors()->create([
            'name' => $nama,
            'email' => "pembimbing$id@pembimbing.com",
            'password' => bcrypt('pembimbing'),
            'role' => 'pembimbing_akademik',
        ]); 
    }

    

    //  public function Akademik($nip, $nama ){
    //     $user= BagianAkademik::create([
    //         'nidn' => fake()->randomNumber(9, true) . fake()->randomNumber(9, true),
    //         'nama_dosen' => $nama,
    //     ]);

    //     $id = BagianAkademik::max('id');
    //     $user->actors()->create([
    //         'name' => $nama,
    //         'email' => "akademik$id@akademik.com",
    //         'password'=>bcrypt('akademik'),
    //         'role' => 'akademik',
    //     ]); 
    // }


    // public function dosen($nama, $nidn) {
    //     Dosen::create([
    //         'nama_dosen' => $nama,
    //         'nidn' => $nidn,
    //     ]);
    // }

}
