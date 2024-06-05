<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAktaModels extends Model
{
    use HasFactory;
    protected $table = 'jenis_akta';
    protected $fillable = ['jenis_akta', 'deskripsi'];

    public function akta()
    {
        return $this->hasMany(AktaModels::class);
    }
}
