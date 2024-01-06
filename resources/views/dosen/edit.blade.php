<!-- resources/views/dosen/edit.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Dosen</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
