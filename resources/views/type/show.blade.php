@extends('layouts.app')

@section('title', 'Fiche d\'un type d\'artiste')

@section('content')
    <h1>{{ $type->type }} </h1>

    <h2>Liste des artistes</h2>
    <ul>
    @foreach($type->artists as $artist)    
        <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
    @endforeach
    </ul>

    <div><a href="{{route('type_edit',$type->id)}}">Modifier</a></div>
    &nbsp;
    <nav><a href="{{ route('type_index') }}">Retour à l'index</a></nav>
@endsection
