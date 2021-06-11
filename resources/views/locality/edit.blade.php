@extends('layouts.app')
@section('title','Modifier une localité')
@section('content')

<form action="{{ route('locality_update' ,$locality->id) }}" method="post">
        @csrf 
        {{--permet de sécuriser le formulaire afin d’empêcher une éventuelle attaque CSRF--}}
        
        @method('PUT')
        <div>
            <label for="postal_code">Code postal </label>
            <input type="text" id="postal_code" name="postal_code" >
	       @if(old('postal_code'))
                value="{{ old('postal_code') }}" 
            @else
                value="{{ $locality->postal_code}}" 
            @endif
	           class="@error('postal_code') is-invalid @enderror">

	@error('postal_code')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="locality">Localité</label>
            <input type="text" id="locality" name="locality" 
	       @if(old('locality'))
                value="{{ old('locality') }}" 
            @else
                value="{{ $locality->locality}}" 
            @endif
	           class="@error('locality') is-invalid @enderror">

	@error('locality')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('locality_show',$locality->id) }}">Annuler</a>
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




@endsection