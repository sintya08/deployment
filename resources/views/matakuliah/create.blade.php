<!-- resources/views/matakuliah/create.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Tambah Mata Kuliah</h1>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
