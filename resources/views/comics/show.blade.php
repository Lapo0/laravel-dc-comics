@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">

        <div class="card">
            <h1>
                {{ $comic->title }}
            </h1>
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $comic->description }}</p>

                <p>
                    {{ $comic->price }} €
                </p>
                <p>
                    Serie: {{ $comic->series }}
                </p>
                <p>
                    Data di uscita: {{ $comic->sale_date }}
                </p>
                <p>
                    {{ $comic->type }}
                </p>
            </div>
        </div>

        </div>
    </div>

@endsection