@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Thumb</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale_date</th>
                    <th scope="col">Type</th>
                    </tr>
                </thead>

                @foreach ($comics as $comic)
                    <tbody>
                        <tr>
                        <td>
                            <img src="{{ $comic->thumb }}" alt="">
                        </td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>

@endsection