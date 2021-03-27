@extends('layouts.app')

@section('title', 'Liste des roles d\'utilisateurs')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($roles as $role)
        <li>{{ $role->role}}</li>
    @endforeach
    </ul>
@endsection
