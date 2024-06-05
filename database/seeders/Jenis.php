<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jenis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JenisAktaModels::create([
            'jenis_akta' => 'Notaris',
            'deskripsi' => 'akta pendirian persero terbatas (PT)'
        ]);
    }
}
