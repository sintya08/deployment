<!-- resources/views/dosen/show.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Detail Dosen</h1>
    <p>NIP: {{ $dosen->nip }}</p>
    <p>Nama: {{ $dosen->nama }}</p>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
