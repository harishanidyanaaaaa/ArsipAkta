<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapModels extends Model
{
    use HasFactory;
    protected $table = 'rekap';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bulan',
        'tgl_akta',
        'jenis_akta',
        'jumlah_akta',
        'jumlah_pph',
        'jumlah_bphtb',
    ];

    public function jenisakta()
    {
        return $this->belongsTo(JenisAktaModels::class, 'jenis_akta', 'id');
    }
}
