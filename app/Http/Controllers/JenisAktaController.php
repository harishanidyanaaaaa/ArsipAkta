<?php

namespace App\Http\Controllers;

use App\Models\JenisAktaModels;
use Illuminate\Http\Request;

class JenisAktaController extends Controller
{
    public function index()
    {
        $jenis = JenisAktaModels::all();
        return view('Jenis_Akta.index')->with('jenis', $jenis);
    }
    public function AktaNotaris(){
        $jenis = JenisAktaModels::all()->where('jenis_akta', 'Notaris');
        return view('Jenis_Akta.index')->with('jenis', $jenis);
    }
    public function AktaPPAT()
    {
        $jenis = JenisAktaModels::all()->where('jenis_akta', 'PPAT');
        return view('Jenis_Akta.index')->with('jenis', $jenis);
    }
    public function store(Request $request)
    {

        $jenis = new JenisAktaModels();
        $jenis->jenis_akta = $request->jenis_akta;
        $jenis->deskripsi = $request->deskripsi;
        $jenis->save();
        return redirect('/Jenis-Akta-Index');
    }

    public function update(Request $request, $id)
    {
        $jenis = JenisAktaModels::find($id);
        $jenis->jenis_akta = $request->jenis_akta;
        $jenis->deskripsi = $request->deskripsi;
        $jenis->save();
        return redirect('/Jenis-Akta-Index');
    }

    public function destroy($id)
    {

        $j = JenisAktaModels::findOrFail($id);
        $j->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
