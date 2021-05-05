@extends('layouts.app')

@section('title', 'Ajouter un type')

@section('content')
    <form action="{{ route('type_store') }}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type" 
	@error('type')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Ajouter</button>
   <a href="{{ route('type_index') }}">Annuler</a>
    </form>


    @if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <nav><a href="{{ route('type_index') }}">Retour à l'index</a></nav>
@endsection
