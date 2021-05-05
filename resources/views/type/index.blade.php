@extends('layouts.app')

@section('title', 'Liste des types d\’artistes')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($types as $type)
        <li>{{$type->id }} - {{ $type->type}}</li>
    @endforeach
    </ul>

    <nav><a href="{{ route('type_create') }}">Ajouter un type</a></nav>
@endsection
