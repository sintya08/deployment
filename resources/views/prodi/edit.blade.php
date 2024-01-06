<!-- resources/views/prodi/edit.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Edit Program Studi</h1>
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi</label>
            <input type="text" name="nama_prodi" class="form-control" value="{{ $prodi->nama_prodi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
