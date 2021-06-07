@extends('layouts.app')
@section('title', 'Liste des rôles')
@section('content')
<h1> Liste des {{ $resource }} </h1>
<table>
        <thead>
            <tr>
                <th>role</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>
                    <a href="{{ route('role_show', $role->id) }}">{{ $role->role }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection