@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Contact</h1>
    @foreach ($kontak as $platform => $nilai)
        <p><span class="text-slate-400">{{ $platform }}:</span> {{ $nilai }}</p>
    @endforeach
@endsection