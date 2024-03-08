@extends('layouts.auth')

@section('content')
<div class="mt-2">
    <h3 class="text-center mb-2">Gestion des achateur</h3>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-user-plus"></i> Formulaire de acheteur
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('acheteur.store') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" required>
                            </div>
                            <div class="col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label for="NNI">NNI</label>
                                <input type="number" class="form-control" name="NNI" id="NNI" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telephone">Téléphone</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label for="adresse">adress</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success mt-3 mb-3">
                                    <i class="fas fa-save"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-list"></i> Liste des acheteurs
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <form  action="{{ route('acheteur.store') }}" method="GET">
                            @csrf
                           
                        </form>
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>NNI</th>
                                <th>Téléphone</th>
                                <th>Date de Naissance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($acheteurs as $key => $acheteur)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $acheteur->nom }}</td>
                                    <td>{{ $acheteur->prenom }}</td>
                                    <td>{{ $acheteur->NNI }}</td>
                                    <td>{{ $acheteur->telephone }}</td>
                                    <td>{{ $acheteur->dateNaiss }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ route('acheteur.edit', $acheteur->id) }}" class="btn btn-primary">
                                                <i class="fas fa-pencil-alt"></i> Modifier
                                            </a> --}}
                                            <a href="#editAchateur{{$acheteur->id}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-targetedittemoin="#edit">Modifier</a>
                                            @include('pages.editAcheteur')
                                            <form action="{{ route('acheteur.destroy', $acheteur->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .card {
        margin-top: 20px;
    }
</style>
@endpush
