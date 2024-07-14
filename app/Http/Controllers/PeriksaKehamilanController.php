<?php

namespace App\Http\Controllers;

use App\Models\PeriksaKehamilan;
use App\Models\IbuHamil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use PDF;

class PeriksaKehamilanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $periksaKehamilans = PeriksaKehamilan::all();
        return view('periksa_kehamilan.index', compact('periksaKehamilans'));
    }

    public function create()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/periksa_kehamilan')->with('error', 'Unauthorized Access');
        }
        $ibuHamils = IbuHamil::all();
        return view('periksa_kehamilan.create', compact('ibuHamils'));
    }

    public function store(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/periksa_kehamilan')->with('error', 'Unauthorized Access');
        }
        $request->validate([
            'ibu_hamil_id' => 'required|exists:ibu_hamils,id',
            'tanggal_periksa' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'tensi_darah' => 'required',
            'keterangan' => 'nullable',
        ]);

        PeriksaKehamilan::create($request->all());
        return redirect()->route('periksa_kehamilan.index');
    }

    public function show(PeriksaKehamilan $periksaKehamilan)
    {
        return view('periksa_kehamilan.show', compact('periksaKehamilan'));
    }

    public function edit(PeriksaKehamilan $periksaKehamilan)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/periksa_kehamilan')->with('error', 'Unauthorized Access');
        }
        $ibuHamils = IbuHamil::all();
        return view('periksa_kehamilan.edit', compact('periksaKehamilan', 'ibuHamils'));
    }

    public function update(Request $request, PeriksaKehamilan $periksaKehamilan)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/periksa_kehamilan')->with('error', 'Unauthorized Access');
        }
        $request->validate([
            'ibu_hamil_id' => 'required|exists:ibu_hamils,id',
            'tanggal_periksa' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'tensi_darah' => 'required',
            'keterangan' => 'nullable',
        ]);

        $periksaKehamilan->update($request->all());
        return redirect()->route('periksa_kehamilan.index');
    }

    public function destroy(PeriksaKehamilan $periksaKehamilan)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/periksa_kehamilan')->with('error', 'Unauthorized Access');
        }
        $periksaKehamilan->delete();
        return redirect()->route('periksa_kehamilan.index');
    }

   public function cetakLaporan($id)
    {
        $ibuHamil = IbuHamil::findOrFail($id);
        $riwayatPeriksa = PeriksaKehamilan::where('ibu_hamil_id', $id)
                                          ->orderBy('tanggal_periksa', 'asc')
                                          ->get();

        if ($riwayatPeriksa->isEmpty()) {
            return redirect()->back()->with('error', 'No data found for this Ibu Hamil');
        }

        $pdf = PDF::loadView('laporan.periksakehamilan', compact('ibuHamil', 'riwayatPeriksa'));
        return $pdf->download('laporan_periksa_kehamilan.pdf');
    }

}
