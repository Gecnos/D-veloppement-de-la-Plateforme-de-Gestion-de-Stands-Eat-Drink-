@extends('layouts.app')

@section('title', 'Mon Espace')

@section('content')
    <h2 class="mb-4">Tableau de bord exposant</h2>

    <div class="mb-5">
        <h4>Mes produits</h4>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                Poisson braisé
                <span>
                    <button class="btn btn-sm btn-warning">Modifier</button>
                    <button class="btn btn-sm btn-danger">Supprimer</button>
                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Jus d’ananas
                <span>
                    <button class="btn btn-sm btn-warning">Modifier</button>
                    <button class="btn btn-sm btn-danger">Supprimer</button>
                </span>
            </li>
        </ul>
    </div>

    <div>
        <h4>Ajouter un produit</h4>
        <form id="ajout-produit-form" class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nom du produit" required>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" placeholder="Prix (FCFA)" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">Ajouter</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush