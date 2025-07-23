@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Bienvenue à l’événement Eat&Drink</h1>
        <p class="lead">Un rassemblement unique de restaurateurs, artisans et gourmands autour de la cuisine locale et créative.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Visibilité</h5>
                    <p class="card-text">Exposez vos produits à un public large et varié.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Vente directe</h5>
                    <p class="card-text">Vendez vos produits sans intermédiaire.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Networking</h5>
                    <p class="card-text">Rencontrez des partenaires, clients et investisseurs.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush