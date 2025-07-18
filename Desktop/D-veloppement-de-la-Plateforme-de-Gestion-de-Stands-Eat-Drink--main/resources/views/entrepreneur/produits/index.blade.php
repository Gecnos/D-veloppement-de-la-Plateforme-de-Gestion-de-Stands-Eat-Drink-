blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">🛍 Mes Produits</h2>

    {{-- Message de succès --}}
    @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success')}}
        </div>
    @endif

    <a href="{{ route('produits.create')}}" class="btn btn-primary mb-4">➕ Ajouter un produit</a>

    @if ($products && count($products)> 0)
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $product->nom}}</strong> – {{ number_format($product->prix, 2, ',', ' ')}} €
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('produits.edit', $product->id)}}" class="btn btn-sm btn-warning">✏ Modifier</a>

                        <form action="{{ route('produits.destroy', $product->id)}}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">🗑 Supprimer</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">Aucun produit ajouté pour le moment.</p>
    @endif
</div>
@endsection
