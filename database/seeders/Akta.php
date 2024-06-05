<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Akta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AktaModels::create([
            'id_notaris' => '1',
            'id_klien' => '1',
            'jenis_akta' => 'akta jual beli',
            'tgl_pembuatan' => '2021-04-24',
            'deskripsi' => 'akta jual beli tanah'
        ]);
    }
}
