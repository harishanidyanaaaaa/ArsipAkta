<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaModels extends Model
{
    use HasFactory;
    protected $table = 'akta';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_notaris',
        'id_klien',
        'jenis_akta',
        'tgl_pembuatan',
        'deskripsi',
    ];

    public function notaris()
    {
        return $this->belongsTo(User::class, 'id_notaris');
    }   

    public function klien()
    {
        return $this->belongsTo(User::class, 'id_klien');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisAktaModels::class, 'jenis_akta');
    }
}
