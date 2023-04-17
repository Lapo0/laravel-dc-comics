@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row">
            <h1>
                Crea una nuova pasta
            </h1>

            <form action="{{ route('comics.store') }}" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine (url)</label>
                    <input type="email" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="email" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Serie</label>
                    <input type="email" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="email" class="form-control" id="type" name="type">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Salva
                </button>                            
            </form>
        </div>
    </div>

@endsection