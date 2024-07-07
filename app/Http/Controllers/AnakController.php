<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        $anaks = Anak::all();
        return view('anak.index', compact('anaks'));
    }

    public function create()
    {
        return view('anak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
        ]);

        Anak::create($request->all());
        return redirect()->route('anak.index');
    }

    public function show(Anak $anak)
    {
        return view('anak.show', compact('anak'));
    }

    public function edit(Anak $anak)
    {
        return view('anak.edit', compact('anak'));
    }

    public function update(Request $request, Anak $anak)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
        ]);

        $anak->update($request->all());
        return redirect()->route('anak.index');
    }

    public function destroy(Anak $anak)
    {
        $anak->delete();
        return redirect()->route('anak.index');
    }
}

