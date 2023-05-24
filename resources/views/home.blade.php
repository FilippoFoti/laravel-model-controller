@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="Locandina">
                        <div class="card-body d-flex align-items-start flex-column justify-content-center">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Paese: {{ $movie->nationality}}</li>
                            <li class="list-group-item">Data: {{ $movie->date}}</li>
                            <li class="list-group-item">Voto: {{ $movie->vote}}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
