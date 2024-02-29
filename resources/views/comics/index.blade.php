@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Comics Index
</h1>

<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
                + Aggiungi
            </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Copertina</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Artisti</th>
                    <th scope="col">Scrittori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>
                            <p>
                                {{ $comic->description }}
                            </p>
                        </td>
                        <td>
                            <div class="img_frame">
                                <img src="{{ $comic->thumb }}" alt="">
                            </div>
                        </td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            @php
                                $arrayArtists = json_decode($comic->artists) ;
                            @endphp

                            @foreach ($arrayArtists as $key => $artists) 
                                {{ $artists }}
                            @endforeach
                        </td>
                        <td>
                            @php
                                $arrayWriters = json_decode($comic->writers) ;
                            @endphp

                            @foreach ($arrayWriters as $key => $writers) 
                                {{ $writers }}
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                                Vedi
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection