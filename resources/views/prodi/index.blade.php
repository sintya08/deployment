<!-- resources/views/prodi/index.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Data Program Studi</h1>
    <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah Program Studi</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->nama_prodi }}</td>
                    <td>
                        <a href="{{ route('prodi.show', $prodi->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display: inline;">
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
