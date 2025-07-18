blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">
        {{ $stand? '✏ Modifier mon stand': '➕ Créer mon stand'}}
    </h2>

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <strong>Oups!</strong> Veuillez corriger les erreurs ci-dessous:
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update-stand')}}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom_stand">Nom du stand</label>
            <input type="text" name="nom_stand" class="form-control" value="{{ old('nom_stand', $stand->nom_stand?? '')}}" required>
        </div>

        <div class="form-group mb-4">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $stand->description?? '')}}</textarea>
        </div>

        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-success">💾 Enregistrer</button>
            <a href="{{ route('mon-stand')}}" class="btn btn-secondary">↩ Annuler</a>
        </div>
    </form>
</div>
@endsection

