<!-- resources/views/mahasiswa/show.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p>NIM: {{ $mahasiswa->nim }}</p>
    <p>Nama: {{ $mahasiswa->nama }}</p>
    <p>Program Studi: {{ $mahasiswa->prodi->nama_prodi }}</p>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
