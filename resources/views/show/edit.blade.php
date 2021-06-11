@extends('layouts.app')
@section('title','Modifier un spectacle')
@section('content')

<form action="{{ route('show_update' ,$show->id) }}" method="post">
        @csrf 
        {{--permet de sécuriser le formulaire afin d’empêcher une éventuelle attaque CSRF--}}
        
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" >
	       @if(old('title'))
                value="{{ old('title') }}" 
            @else
                value="{{ $show->title}}" 
            @endif
	           class="@error('title') is-invalid @enderror">

	@error('title')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" id="price" name="price" 
	       @if(old('price'))
                value="{{ old('price') }}" 
            @else
                value="{{ $show->price}}" 
            @endif
	           class="@error('price') is-invalid @enderror">

	@error('price')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('show_show',$show->id) }}">Annuler</a>
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