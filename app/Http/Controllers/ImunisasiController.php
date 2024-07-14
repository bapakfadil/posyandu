<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use PDF;

class ImunisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $imunisasis = Imunisasi::with('anak')->get();
        return view('imunisasi.index', compact('imunisasis'));
    }

    public function create()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/imunisasi')->with('error', 'Unauthorized Access');
        }
        $anaks = Anak::all();
        return view('imunisasi.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/imunisasi')->with('error', 'Unauthorized Access');
        }
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
        if (Auth::user()->role != 'admin') {
            return redirect('/imunisasi')->with('error', 'Unauthorized Access');
        }
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
        if (Auth::user()->role != 'admin') {
            return redirect('/imunisasi')->with('error', 'Unauthorized Access');
        }
        $anaks = Anak::all();
        return view('imunisasi.edit', compact('imunisasi', 'anaks'));
    }

    public function destroy(Imunisasi $imunisasi)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/imunisasi')->with('error', 'Unauthorized Access');
        }
        $imunisasi->delete();
        return redirect()->route('imunisasi.index');
    }

    public function cetakLaporan($id)
    {
        $anak = Anak::findOrFail($id);
        $riwayatImunisasi = Imunisasi::where('anak_id', $id)
                                      ->orderBy('tanggal_imunisasi', 'asc')
                                      ->get();

        if ($riwayatImunisasi->isEmpty()) {
            return redirect()->back()->with('error', 'No data found for this Anak');
        }

        $pdf = PDF::loadView('laporan.imunisasi', compact('anak', 'riwayatImunisasi'));
        return $pdf->download('laporan_imunisasi.pdf');
    }
}
