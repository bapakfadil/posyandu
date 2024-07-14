<?php

namespace App\Http\Controllers;

use App\Models\PeriksaKehamilan;
use App\Models\IbuHamil;
use Illuminate\Http\Request;

class PeriksaKehamilanController extends Controller
{
    public function index()
    {
        $periksaKehamilans = PeriksaKehamilan::with('ibuHamil')->get();
        return view('periksa_kehamilan.index', compact('periksaKehamilans'));
    }

    public function create()
    {
        $ibuHamils = IbuHamil::all();
        return view('periksa_kehamilan.create', compact('ibuHamils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ibu_hamil_id' => 'required|exists:ibu_hamils,id',
            'tanggal_periksa' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'tensi_darah' => 'required',
            'vitamin' => 'nullable',
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
        $ibuHamils = IbuHamil::all();
        return view('periksa_kehamilan.edit', compact('periksaKehamilan', 'ibuHamils'));
    }

    public function update(Request $request, PeriksaKehamilan $periksaKehamilan)
    {
        $request->validate([
            'ibu_hamil_id' => 'required|exists:ibu_hamils,id',
            'tanggal_periksa' => 'required|date',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'tensi_darah' => 'required',
            'vitamin' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $periksaKehamilan->update($request->all());
        return redirect()->route('periksa_kehamilan.index');
    }

    public function destroy(PeriksaKehamilan $periksaKehamilan)
    {
        $periksaKehamilan->delete();
        return redirect()->route('periksa_kehamilan.index');
    }
}
