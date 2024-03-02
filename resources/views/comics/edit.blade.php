@extends('layouts.app')

@section('page-title', 'Modifica il fumetto')

@section('main-content')
<div class="container">
    <h1>
        Modifica il fumetto
    </h1>
    
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna alla lista di fumetti
                </a>
            </div>
            
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">


                @csrf
                @method('PUT')


    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo <span class="text-danger"></span></label>
                    <input
                        value="{{ $comic->title }}"
                        type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="64" required>
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione...">{{ $comic->description }}</textarea>
                </div>
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">url</label>
                    <input
                        value="{{ $comic->thumb }}"
                        type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'URL dell'immagine" maxlength="1024">
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                        value="{{ $comic->price }}"
                        type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto..." min="1" max="1000">
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Serie<span class="text-danger"></span></label>
                    <input
                        value="{{ $comic->series }}"
                        type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto..." maxlength="64">
                </div>
    
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita<span class="text-danger"></span></label>
                    <input
                        value="{{ $comic->sale_date }}"
                        type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita del fumetto...">
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Tipologia<span class="text-danger"></span></label>
                    <input
                        value="{{ $comic->type }}"
                        type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia del fumetto..." maxlength="64" required>
                </div>
    
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti<span class="text-danger"></span></label>
                    <input
                        value="{{ implode(', ' , json_decode($comic->artists)) }}"
                        type="text" class="form-control mb-2" id="artists" name="artists" placeholder="Inserisci l'artista'..." maxlength="1000" required>
                </div>
    
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori<span class="text-danger"></span></label>
                    <input
                        value="{{ implode(', ' , json_decode($comic->writers)) }}"
                        type="text" class="form-control mb-2" id="writers" name="writers" placeholder="Inserisci gli scrittori..." maxlength="1000" required>
                </div>
    
                <div>
                    <button type="submit" class="btn btn-success w-100">
                        + Aggiungi
                    </button>
                </div>
    
            </form>
        </div>
    </div>
</div>
@endsection
