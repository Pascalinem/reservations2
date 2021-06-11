@extends('layouts.app')
@section('title', 'Liste des rôles')
@section('content')
<h1> Liste des {{ $resource }} </h1>
<table>
        <thead>
            <tr>
            <th> Id</th>
                <th>Rôle</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>
                    <a href="{{ route('role_show', $role->id) }}">{{ $role->role }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection