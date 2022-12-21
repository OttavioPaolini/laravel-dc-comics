@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    @foreach ($comics as $comic)
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <a href="{{ route('comics.show', $comic->id) }}">cliccami per la descrizione</a>
    @endforeach
@endsection
