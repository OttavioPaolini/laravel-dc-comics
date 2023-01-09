@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('comics.create') }}">Crea un nuovo comics</a>
    </div>
    @foreach ($comics as $comic)
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <a href="{{ route('comics.show', $comic->id) }}">cliccami per la descrizione</a>
        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
    @endforeach
@endsection
