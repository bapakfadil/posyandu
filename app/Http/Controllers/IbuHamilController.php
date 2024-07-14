<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IbuHamilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ibuHamils = IbuHamil::all();
        return view('ibu_hamil.index', compact('ibuHamils'));
    }

    public function create()
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/ibu_hamil')->with('error', 'Unauthorized Access');
        }
        return view('ibu_hamil.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/ibu_hamil')->with('error', 'Unauthorized Access');
        }
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
        if (Auth::user()->role != 'admin') {
            return redirect('/ibu_hamil')->with('error', 'Unauthorized Access');
        }
        return view('ibu_hamil.edit', compact('ibuHamil'));
    }

    public function update(Request $request, IbuHamil $ibuHamil)
    {
        if (Auth::user()->role != 'admin') {
            return redirect('/ibu_hamil')->with('error', 'Unauthorized Access');
        }
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
        if (Auth::user()->role != 'admin') {
            return redirect('/ibu_hamil')->with('error', 'Unauthorized Access');
        }
        $ibuHamil->delete();
        return redirect()->route('ibu_hamil.index');
    }
}
