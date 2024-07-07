<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;
use Illuminate\Http\Request;

use Carbon\Carbon;

class ImunisasiController extends Controller
{
    public function index()
    {
        $imunisasis = Imunisasi::with('anak')->get();
        return view('imunisasi.index', compact('imunisasis'));
    }

    public function create()
    {
        $anaks = Anak::all();
        return view('imunisasi.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required|exists:anaks,id',
            'tanggal_imunisasi' => 'required|date',
            'jenis_imunisasi' => 'required',
            'keterangan' => 'nullable',
        ]);

        $anak = Anak::findOrFail($request->anak_id);
        $tanggal_lahir = Carbon::parse($anak->tanggal_lahir);
        $tanggal_imunisasi = Carbon::parse($request->tanggal_imunisasi);

        // Hitung usia dalam tahun dan bulan
        $diff = $tanggal_lahir->diff($tanggal_imunisasi);
        $usia = $diff->y . ' Tahun ' . $diff->m . ' Bulan';

        Imunisasi::create([
            'anak_id' => $request->anak_id,
            'tanggal_imunisasi' => $tanggal_imunisasi,
            'usia' => $usia,
            'jenis_imunisasi' => $request->jenis_imunisasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('imunisasi.index');
    }

    public function update(Request $request, Imunisasi $imunisasi)
    {
        $request->validate([
            'anak_id' => 'required|exists:anaks,id',
            'tanggal_imunisasi' => 'required|date',
            'jenis_imunisasi' => 'required',
            'keterangan' => 'nullable',
        ]);

        $anak = Anak::findOrFail($request->anak_id);
        $tanggal_lahir = Carbon::parse($anak->tanggal_lahir);
        $tanggal_imunisasi = Carbon::parse($request->tanggal_imunisasi);

        // Hitung usia dalam tahun dan bulan
        $diff = $tanggal_lahir->diff($tanggal_imunisasi);
        $usia = $diff->y . ' Tahun ' . $diff->m . ' Bulan';

        $imunisasi->update([
            'anak_id' => $request->anak_id,
            'tanggal_imunisasi' => $tanggal_imunisasi,
            'usia' => $usia,
            'jenis_imunisasi' => $request->jenis_imunisasi,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('imunisasi.index');
    }

    public function show(Imunisasi $imunisasi)
    {
        return view('imunisasi.show', compact('imunisasi'));
    }

    public function edit(Imunisasi $imunisasi)
    {
        $anaks = Anak::all();
        return view('imunisasi.edit', compact('imunisasi', 'anaks'));
    }

    public function destroy(Imunisasi $imunisasi)
    {
        $imunisasi->delete();
        return redirect()->route('imunisasi.index');
    }
}
