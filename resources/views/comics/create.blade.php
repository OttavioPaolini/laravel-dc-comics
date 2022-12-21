@extends('layouts.app')

@section('title')
@section('content')

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description"></textarea>
            </div>
            <div>
                <label for="thumb">Foto</label>
                <input type="text" name="thumb" id="thumb">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
            </div>
            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>
            <div>
                <label for="sale_date">Anno di Vendita YYYY-MM-DD</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">
            </div>



            <button type="submit">Salva</button>
        </form>
    </div>

@endsection
