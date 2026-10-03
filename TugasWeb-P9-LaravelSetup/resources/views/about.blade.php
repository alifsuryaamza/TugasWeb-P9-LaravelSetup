@extends('layouts.app')
@section('title', 'About')
@section('content')
    <h1 class="text-3xl font-bold mb-4">About</h1>
    @foreach ($profil as $label => $isi)
        <p><span class="text-slate-400 capitalize">{{ $label }}:</span> {{ $isi }}</p>
    @endforeach
@endsection