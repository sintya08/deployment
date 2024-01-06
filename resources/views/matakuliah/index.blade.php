<!-- resources/views/matakuliah/index.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Data Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Mata Kuliah</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama MK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah->nama_mk }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $mataKuliah->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('matakuliah.edit', $mataKuliah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mataKuliah->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
