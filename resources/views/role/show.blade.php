@extends('layouts.app')

@section('title', 'Fiche des rôles')

@section('content')
    <!-- <h1>{{$role->id}} {{ $role->role }} </h1> -->

    <h2>Liste des utilisateurs avec le rôle " {{ $role->role }} "</h2>
    <ul>
    @foreach($role->users as $user)    
        <li>{{ $user->firstname }} {{ $user->lastname }} </li>
    @endforeach
    </ul>

<div><a href="{{ route('role_edit',$role->id)}}">Modifier</a></div>
    &nbsp;
    <nav><a href="{{ route('role_index') }}">Retour à l'index</a></nav>
@endsection
