@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)

                <div class="col-4">
                    <h3>{{ $comic->title }}</h3>
                </div>

            @endforeach
        </div>
    </div>

@endsection