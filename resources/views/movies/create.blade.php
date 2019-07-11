@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <h1 class="text-center">Inserimento nuovo film</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('movies.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Titolo:</label>
        <input type="text" name="title" placeholder="Titolo film" value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label for="plot">Trama:</label>
        <textarea name="plot" rows="8" cols="80"placeholder="Trama film" value="{{ old('plot') }}"></textarea>
      </div>
      <div class="form-group">
        <label for="release">Anno d'uscita:</label>
        <input type="number" name="release" value="{{ old('release')}}" min="2000" max="2019">
      </div>
      <div class="form-group">
        <select class="form-control" name="genre_id">
          <option value="">Seleziona il genere</option>
          @foreach ($genres as $genre)
            <option value="{{ $genre->id}}">"{{ $genre->name}}"</option>

          @endforeach

        </select>
      </div>
      <div class="form-group">
        <input class="form-control" type="submit" value="Nuovo film">

      </div>
    </form>

  </div>
  @endsection
