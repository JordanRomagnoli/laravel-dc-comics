@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna alla lista dei fumetti
            </a>
        </div>

        <div class="card">
            <div class="img_frame">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">
            </div>

            <div class="card-body">
                <ul>
                    <li>{{ $comic->description }}</li>
                    <li>$ {{ $comic->price }}</li>
                    <li>{{ $comic->series }}</li>
                    <li>{{ $comic->sale_date }}</li>
                    <li>{{ $comic->type }}</li>
                    <li>{{ $comic->type }}</li>
                    <li>
                        @php
                            $arrayArtists = json_decode($comic->artists) ;
                        @endphp

                        @foreach ($arrayArtists as $key => $artists) 
                            {{ $artists }}
                        @endforeach   
                    </li>
                    <li>
                        @php
                            $arrayWriters = json_decode($comic->writers) ;
                        @endphp
    
                        @foreach ($arrayWriters as $key => $writers) 
                            {{ $writers }}
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection