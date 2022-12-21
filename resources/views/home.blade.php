@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    <h1>Sei un fan di fumetti?</h1>
    <a href="{{ route('comics.index') }}">Cliccami per vedere la lista di fumetti</a>


@endsection
