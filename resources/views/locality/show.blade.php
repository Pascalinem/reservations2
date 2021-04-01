@extends('layouts.app')

@section('title', 'Fiche d\'une localité')

@section('content')
    <h1>{{ $locality->postal_code }} {{ $locality->locality }}</h1>

    @if (count($locality->locations) == 0)
        <p>Il n'y a pas de location pour cette localité</p>
    @else
        <h2>Liste des locations dans la locatité {{ $locality->locality }}:</2>
        <ul>
            @foreach($locality->locations as $location)
                <li>{{ $location->designation}}</li>
            @endforeach
        </ul>
    @endif
@endsection
