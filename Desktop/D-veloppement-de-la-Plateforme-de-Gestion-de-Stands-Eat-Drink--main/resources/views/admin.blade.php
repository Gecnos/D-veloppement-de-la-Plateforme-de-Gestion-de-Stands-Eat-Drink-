@extends('layouts.app')

@section('title', 'Espace Administrateur')

@section('content')
    <h2 class="mb-4">Validation des exposants</h2>

    <table class="table table-striped">
        <thead class="table-success">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="liste-demandes">
            <tr>
                <td>Exposant A</td>
                <td>exposantA@mail.com</td>
                <td>Gâteaux</td>
                <td>
                    <button class="btn btn-sm btn-success">Valider</button>
                    <button class="btn btn-sm btn-danger">Refuser</button>
                </td>
            </tr>
            <tr>
                <td>Exposant B</td>
                <td>exposantB@mail.com</td>
                <td>Jus naturels</td>
                <td>
                    <button class="btn btn-sm btn-success">Valider</button>
                    <button class="btn btn-sm btn-danger">Refuser</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@push('scripts')
    <script src="{{ asset('js/admin.js') }}"></script>
@endpush