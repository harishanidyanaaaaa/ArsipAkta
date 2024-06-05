<?php

namespace App\Http\Controllers;

use App\Models\AktaModels;
use App\Models\JenisAktaModels;
use App\Models\User;
use Illuminate\Http\Request;

class AktaController extends Controller
{
    public function index()
    {
        $akta = AktaModels::all();
        $user = User::all();
        $jenis = JenisAktaModels::all();
        return view('Akta.index')->with('akta', $akta)->with('user', $user)->with('jenis', $jenis);
    }
    public function store(Request $request)
    {

        $akta = new AktaModels();
        $akta->id_notaris = $request->id_notaris;
        $akta->id_klien = $request->id_klien;
        $akta->jenis_akta = $request->jenis_akta;
        
        $akta->tgl_pembuatan = $request->tgl_pembuatan;
        $akta->deskripsi = $request->deskripsi;
        $akta->save();
        return redirect('/Akta-Index');
    }

    public function update(Request $request, $id)
    {
        $akta = AktaModels::find($id);
        $akta->id_notaris = $request->id_notaris;
        $akta->id_klien = $request->id_klien;
        $akta->jenis_akta = $request->jenis_akta;
       
        $akta->tgl_pembuatan = $request->tgl_pembuatan;
        $akta->deskripsi = $request->deskripsi;
        $akta->save();
        return redirect('/Akta-Index');
    }

    public function destroy($id)
    {

        $a = AktaModels::findOrFail($id);
        $a->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
