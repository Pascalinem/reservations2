@extends('layouts.app')
@section('title', 'Liste des utilisateurs')
@section('content')
<h1> Liste des {{ $resource }} </h1>
<table>
        <thead>
            <tr>
                <th> Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->email}}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection