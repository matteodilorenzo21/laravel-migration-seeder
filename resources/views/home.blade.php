@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>Departing Trains</h1>
    <ul>
        @foreach ($departingTrains as $train)
            <li>
                {{ $train->azienda }} - {{ $train->codice_treno }} | Partenza: {{ $train->orario_partenza }} | Arrivo:
                {{ $train->orario_arrivo }}
            </li>
        @endforeach
    </ul>
@endsection
