<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rekap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('rekap')->insert([
            'bulan' => 'Januari',
            'tgl_akta' => '2024-05-22',
            'jenis_akta' => 'AJB',
            'jumlah_akta' => '1',
            'jumlah_pph' => '1000000',
            'jumlah_bphtb' => '2000000',
        ]);
    }
}
