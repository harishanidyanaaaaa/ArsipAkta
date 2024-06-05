<?php

namespace Database\Seeders;

use App\Models\DokumenModels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DokumenModels::create([
            'id_akta' => 1,
            'nama_dokumen' => 'Akta Pendirian',
            'tgl_upload' => '2021-04-24',
            'deskripsi' => 'Akta pendirian perusahaan'
        ]);
        DokumenModels::create([
            'id_akta' => 1,
            'nama_dokumen' => 'Akta Perubahan',
            'tgl_upload' => '2021-04-24',
            'deskripsi' => 'Akta perubahan perusahaan'
        ]);
        DokumenModels::create([
            'id_akta' => 2,
            'nama_dokumen' => 'Akta Pendirian',
            'tgl_upload' => '2021-04-24',
            'deskripsi' => 'Akta pendirian perusahaan'
        ]);
        DokumenModels::create([
            'id_akta' => 2,
            'nama_dokumen' => 'Akta Perubahan',
            'tgl_upload' => '2021-04-24',
            'deskripsi' => 'Akta perubahan perusahaan'
        ]);
        
        
    }
}
