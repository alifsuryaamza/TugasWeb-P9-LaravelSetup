@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $judul }}</h1>
    <ul class="list-disc pl-6 space-y-1">
        @foreach ($fitur as $f)
            <li>{{ $f }}</li>
        @endforeach
    </ul>
@endsection