@extends('layouts.app')

@section('title', 'Fiche d\'un lieu de spectacle')

@section('content')
    <h1>{{ $locality->postal_code }} {{ $locality->locality}}</h1>
    <nav><a href="{{ route('locality_index') }}">Retour à l'index</a></nav>
@endsection
