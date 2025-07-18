blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">➕ Ajouter un nouveau produit</h2>

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

    <form action="{{ route('produits.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Nom du produit</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom')}}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description')}}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="prix">Prix (€)</label>
            <input type="number" name="prix" class="form-control" step="0.01" value="{{ old('prix')}}" required>
        </div>

        <div class="form-group mb-4">
            <label for="image">Image du produit</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">✅ Ajouter</button>
            <a href="{{ route('produits.index')}}" class="btn btn-secondary">↩ Annuler</a>
        </div>
    </form>
</div>
@endsection

