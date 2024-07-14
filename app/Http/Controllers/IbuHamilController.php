<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    public function index()
    {
        $ibuHamils = IbuHamil::all();
        return view('ibu_hamil.index', compact('ibuHamils'));
    }

    public function create()
    {
        return view('ibu_hamil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_suami' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        IbuHamil::create($request->all());
        return redirect()->route('ibu_hamil.index');
    }

    public function show(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.show', compact('ibuHamil'));
    }

    public function edit(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.edit', compact('ibuHamil'));
    }

    public function update(Request $request, IbuHamil $ibuHamil)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_suami' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $ibuHamil->update($request->all());
        return redirect()->route('ibu_hamil.index');
    }

    public function destroy(IbuHamil $ibuHamil)
    {
        $ibuHamil->delete();
        return redirect()->route('ibu_hamil.index');
    }
}
