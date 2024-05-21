@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>Titolo: {{$movie->title}}</h2>
                <h2>Titolo originale: {{$movie->original_title}}</h2>
                <div>Nazionalità: {{$movie->nationality}}</div>
                <div>Data d'uscita: {{$movie->date}}</div>
                <div>Voto: {{$movie->vote}}</div>
            </div>
        @endforeach
    </div>
@endsection