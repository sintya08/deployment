<?php

// app/Http/Controllers/MataKuliahController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('matakuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mk' => 'required',
        ]);

        MataKuliah::create($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('mataKuliah'));
    }

    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('mataKuliah'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_mk' => 'required',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->update($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus.');
    }
}

