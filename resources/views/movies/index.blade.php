@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <h1 class="text-center">Tutti i film</h1>
    <center>
      <a href="{{ route('movies.create') }}"class="btn btn-primary">Inserisci un nuovo film</a>
    </center>
    <ul>
      <br>
      @foreach ($movies as $movie)
        <li>Titolo: {{ $movie->title }}<br> Anno: {{ $movie->release }}<br> Genere: {{ $movie->genre ? $movie->genre->name: 'n.a.' }}<br> Descrizione: {{ $movie->plot }} </li>
        <br>
        @php
          //dump($movie->genre())
        @endphp

      @endforeach
    </ul>
  </div>
@endsection
