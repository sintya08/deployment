<!-- resources/views/prodi/create.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Tambah Program Studi</h1>
    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi</label>
            <input type="text" name="nama_prodi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
