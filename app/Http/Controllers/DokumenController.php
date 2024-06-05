<?php

namespace App\Http\Controllers;

use App\Models\AktaModels;
use App\Models\DokumenModels;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    //

    public function index()
    {
        $dokumen = DokumenModels::all();
        $akta = AktaModels::all();
        return view('Dokumen.index')->with('dokumen', $dokumen)->with('akta', $akta);
    }

    public function store(Request $request)
    {

        $dokumen = new DokumenModels();
        $dokumen->id_akta = $request->id_akta;
        $dokumen->nama_dokumen = $request->nama_dokumen;
        $dokumen->tgl_upload = $request->tgl_upload;
        $dokumen->deskripsi = $request->deskripsi;
        $dokumen->save();
        return redirect('/Dokumen-Index');
    }

    public function update(Request $request, $id)
    {
        $dokumen = DokumenModels::find($id);
        $dokumen->id_akta = $request->id_akta;
        $dokumen->nama_dokumen = $request->nama_dokumen;
        $dokumen->tgl_upload = $request->tgl_upload;
        $dokumen->deskripsi = $request->deskripsi;
        $dokumen->save();
        return redirect('/Dokumen-Index');
    }

    public function destroy($id)
    {

        $d = DokumenModels::findOrFail($id);
        $d->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    
}
