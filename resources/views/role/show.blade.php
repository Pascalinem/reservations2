@extends('layouts.app')

@section('title', 'Fiche d\'un rôle')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
@endsection

