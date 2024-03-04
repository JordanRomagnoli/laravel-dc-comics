@extends('layouts.app')

@section('page-title', 'Aggiungi un fumetto')

@section('main-content')
<div class="container">
    <h1>
        Aggiungi un fumetto
    </h1>
    
    <div class="row">
        <div class="col py-4">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna alla lista di fumetti
                </a>
            </div>
            
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo <span class="text-danger"></span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="64" required>
                    
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..."></textarea>
                    
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="thumb" class="form-label">url</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci l'URL dell'immagine" maxlength="1024">
                
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo del fumetto..." min="1" max="1000">
                
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Serie<span class="text-danger"></span></label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie del fumetto..." maxlength="64">
                
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita<span class="text-danger"></span></label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita del fumetto...">
                
                    @error('sale_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="series" class="form-label">Tipologia<span class="text-danger"></span></label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci la tipologia del fumetto..." maxlength="64" required>
                
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti<span class="text-danger"></span></label>
                    <input type="text" class="form-control mb-2 @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Inserisci l'artista'..." maxlength="1000" required>
                
                    @error('artists')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori<span class="text-danger"></span></label>
                    <input type="text" class="form-control mb-2 @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Inserisci gli scrittori..." maxlength="1000" required>
                
                    @error('writers')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
