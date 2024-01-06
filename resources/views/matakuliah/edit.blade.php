<!-- resources/views/matakuliah/edit.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Edit Mata Kuliah</h1>
    <form action="{{ route('matakuliah.update', $mataKuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control" value="{{ $mataKuliah->nama_mk }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
