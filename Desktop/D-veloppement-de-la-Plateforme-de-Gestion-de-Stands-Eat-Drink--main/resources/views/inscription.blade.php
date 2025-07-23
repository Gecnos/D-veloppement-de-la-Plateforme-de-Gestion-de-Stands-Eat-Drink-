@extends('layouts.app')

@section('title', 'Inscription exposant')

@section('content')
    <h2 class="mb-4">Formulaire d’inscription exposant</h2>

    <form id="form-inscription" class="row g-3">
        <div class="col-md-6">
            <label for="nom" class="form-label">Nom de l'exposant</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="col-md-6">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
        </div>

        <div class="col-md-6">
            <label for="produit" class="form-label">Produit principal</label>
            <input type="text" class="form-control" id="produit" name="produit" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Envoyer la demande</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('js/inscription.js') }}"></script>
@endpush