<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenModels extends Model
{
    use HasFactory;
    protected $table = 'dokumen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_akta',
        'nama_dokumen',
        'tgl_upload',
        'deskripsi',
    ];

    public function akta()
    {
        return $this->belongsTo(AktaModels::class, 'id_akta');
    }
}
