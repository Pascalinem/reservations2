@extends('layouts.app')

@section('title', 'Fiche d\'un type')

@section('content')
    <h1>{{ ucfirst($type->type) }}</h1>
    
    <h2>Liste des artistes</h2>
    <ul>
    @foreach($type->artists as $artist)    
        <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
    @endforeach
    </ul>

    <div><a href="{{ route('type_edit', $type->id) }}">Modifier</a></div>
    
    <form action="{{ route('type_delete' ,$type->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Supprimer</button>
    </form>

    @if(old('message'))
        <p>{{ old('message') }}</p>
    @endif

    <nav><a href="{{ route('type_index') }}">Retour à l'index</a></nav>

@endsection
