<?php

// app/Http/Controllers/ProdiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_prodi' => 'required',
        ]);

        Prodi::create($validatedData);

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.show', compact('prodi'));
    }

    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_prodi' => 'required',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update($validatedData);

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil dihapus.');
    }
}

