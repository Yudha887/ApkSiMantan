<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flag::create([
            "name" => "Dokumen Administrasi"
        ]);

        Flag::create([
            "name" => "Dokumen Pengembalian"
        ]);

        Flag::create([
            "name" => "Dokumen Usaha"
        ]);

        Flag::create([
            "name" => "Dokumen Peminjaman" 
        ]);
    }
}
