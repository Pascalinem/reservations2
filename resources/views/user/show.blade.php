@extends('layouts.app')

@section('title', 'Fiche des utilisateurs')

@section('content')

    <h1>{{$user->id}} {{ $user->firstname }} {{ $user->lastname }} </h1>


<div><a href="{{ route('user_edit',$user->id)}}">Modifier</a></div>
    &nbsp;
    <nav><a href="{{ route('user_index') }}">Retour à l'index</a></nav>
@endsection

