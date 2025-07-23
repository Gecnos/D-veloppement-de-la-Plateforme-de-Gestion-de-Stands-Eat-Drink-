@extends('layouts.app')

@section('title', 'Catalogue')

@section('content')
    <h2 class="mb-4">Catalogue des produits</h2>

    <div class="row" id="produits">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Brochettes de poisson</h5>
                    <p class="card-text">Exposant : Chez Momo</p>
                    <p class="text-success fw-bold">1500 FCFA</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jus de bissap</h5>
                    <p class="card-text">Exposant : Bissap Queen</p>
                    <p class="text-success fw-bold">500 FCFA</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush