<?php

namespace App\Http\Controllers;

use App\Models\JenisAktaModels;
use App\Models\RekapModels;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $rekap = RekapModels::all();
        $jenis = JenisAktaModels::all();
        return view('Rekap.index')->with('rekap', $rekap)->with('jenis', $jenis);
    }
    public function store(Request $request)
    {
        $jenis_akta = $request->input('jenis_akta');
        $jumlah_akta = count($jenis_akta);

        $rekap = new RekapModels();
        $rekap->bulan = $request->input('bulan');
        $rekap->tgl_akta = $request->input('tgl_akta');
        $rekap->jenis_akta = json_encode($jenis_akta); // Simpan jenis_akta sebagai JSON
        $rekap->jumlah_akta = $jumlah_akta;
        $rekap->jumlah_pph = $request->input('jumlah_pph');
        $rekap->jumlah_bphtb = $request->input('jumlah_bphtb');
        $rekap->save();

        return redirect()->route('Rekap-Index');
    }

    public function destroy($id)
    {

        $r = RekapModels::findOrFail($id);
        $r->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
