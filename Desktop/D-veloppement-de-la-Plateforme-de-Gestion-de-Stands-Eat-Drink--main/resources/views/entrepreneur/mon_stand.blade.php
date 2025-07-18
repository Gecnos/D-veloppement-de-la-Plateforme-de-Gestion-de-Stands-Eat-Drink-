blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">📍 Mon Stand</h2>

    @if ($stand)
        <div class="bg-white shadow rounded p-4 mb-4">
            <p><strong> Nom:</strong> {{ $stand->nom_stand}}</p>
            <p><strong> Description:</strong> {{ $stand->description}}</p>
        </div>

        <a href="{{ route('edit-stand')}}" class="btn btn-primary">✏ Modifier mon stand</a>
    @else
        <div class="alert alert-info mb-4">
            Vous n'avez pas encore créé de stand.
        </div>

        <a href="{{ route('edit-stand')}}" class="btn btn-success">➕ Créer mon stand</a>
    @endif
</div>
@endsection

1

