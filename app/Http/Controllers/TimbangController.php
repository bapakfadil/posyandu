<?php

namespace App\Http\Controllers;

use App\Models\Timbang;
use App\Models\Anak;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TimbangController extends Controller
{
    public function index()
    {
        $timbangs = Timbang::with('anak')->get();
        return view('timbang.index', compact('timbangs'));
    }

    public function create()
    {
        $anaks = Anak::all();
        return view('timbang.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required|exists:anaks,id',
            'tanggal_timbang' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'keterangan' => 'nullable',
        ]);

        $anak = Anak::findOrFail($request->anak_id);
        $tanggal_lahir = Carbon::parse($anak->tanggal_lahir);
        $tanggal_timbang = Carbon::parse($request->tanggal_timbang);

        // Hitung usia dalam tahun dan bulan
        $diff = $tanggal_lahir->diff($tanggal_timbang);
        $usia = $diff->y . ' Tahun ' . $diff->m . ' Bulan';

        Timbang::create([
            'anak_id' => $request->anak_id,
            'tanggal_timbang' => $tanggal_timbang,
            'usia' => $usia,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('timbang.index');
    }

    public function show(Timbang $timbang)
    {
        return view('timbang.show', compact('timbang'));
    }

    public function edit(Timbang $timbang)
    {
        $anaks = Anak::all();
        return view('timbang.edit', compact('timbang', 'anaks'));
    }

    public function update(Request $request, Timbang $timbang)
    {
        $request->validate([
            'anak_id' => 'required|exists:anaks,id',
            'tanggal_timbang' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'keterangan' => 'nullable',
        ]);

        $anak = Anak::findOrFail($request->anak_id);
        $tanggal_lahir = Carbon::parse($anak->tanggal_lahir);
        $tanggal_timbang = Carbon::parse($request->tanggal_timbang);

        // Hitung usia dalam tahun dan bulan
        $diff = $tanggal_lahir->diff($tanggal_timbang);
        $usia = $diff->y . ' Tahun ' . $diff->m . ' Bulan';

        $timbang->update([
            'anak_id' => $request->anak_id,
            'tanggal_timbang' => $tanggal_timbang,
            'usia' => $usia,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('timbang.index');
    }

    public function destroy(Timbang $timbang)
    {
        $timbang->delete();
        return redirect()->route('timbang.index');
    }
}
