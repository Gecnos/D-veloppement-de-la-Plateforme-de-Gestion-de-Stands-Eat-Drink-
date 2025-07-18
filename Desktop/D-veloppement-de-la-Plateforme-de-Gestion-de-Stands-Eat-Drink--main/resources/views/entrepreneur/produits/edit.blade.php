blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">✏ Modifier le produit: {{ $product->nom}}</h2>

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

    <form action="{{ route('produits.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nom">Nom du produit</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom', $product->nom)}}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description)}}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="prix">Prix (€)</label>
            <input type="number" name="prix" class="form-control" step="0.01" value="{{ old('prix', $product->prix)}}" required>
        </div>

        <div class="form-group mb-4">
            <label for="image">Image du produit</label><br>
            @if ($product->image_url)
                <img src="{{ asset('storage/'. $product->image_url)}}" alt="Image actuelle" class="mb-2 rounded" width="150">
            @endif
            <input type="file" name="image" class="form-control-file">
            <small class="form-text text-muted">Laisser vide pour conserver l'image actuelle.</small>
        </div>

        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-success">💾 Mettre à jour</button>
            <a href="{{ route('produits.index')}}" class="btn btn-secondary">↩ Annuler</a>
        </div>
    </form>
</div>
@endsection

