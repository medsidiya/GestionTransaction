
@extends('layouts.auth')

@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>@yield('title', 'notaire')</title>
</head>
<body>

  <div class="">
    @section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    @endsection
    @section('content')

    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
<ul>
    @foreach ($errors as $error)
    <li class="alert alert-danger">{{$error}}</li>
@endforeach
</ul>

    <div class="card mt-3">
      <div class="card-header head-color">
        notaire
      </div>
      <div class="card-body card-body-color ">
        <h5 class="card-title">ajouter notaire</h5>
        <form class="row g-3" action="{{url('notaire/create')}}">
          @csrf
          <div class="col-md-6">
            <label  class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="entre nom notaire">
          </div>
          <div class="col-md-6">
            <label  class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder="entre Prenom notaire" >
          </div>
          <div class="col-md-6">
            <label  class="form-label">NNI</label>
            <input type="text" class="form-control" name="nni" placeholder="entre NNI notaire">
          </div>
          <div class="col-md-6">
            <label class="form-label">telephone</label>
            <input type="text" class="form-control" name="phone" placeholder="entre phone notaire" >
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" name="adress" id="inputAddress2" placeholder="entre adress notaire">
          </div>
      
          <div class="col-12">
            <button type="submit" class="btn btn-success float-left">Submit</button>
          </div>
        </form>
      </div>
    </div>

    
    {{-- <div class="container"> --}}
<div class="row mt-5">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header head-color">
              <h4>
                  Liste de notaires
              </h4>
          </div>
          <div class="card-body">
  <table class="table table-responsive table-hover col-md-4" id="notaireTable">
          <thead>
          <tr class="table-active">
              <th scope="col">Id</th>
              <th scope="col">nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">NNI</th>
              <th scope="col">telephone</th>
              <th scope="col">adress</th>
              {{-- <th scope="col">CategorieId</th> --}}
              <th scope="col">Action</th>
          </tr>
          </thead>
      <tbody>
          @foreach ($notaires as $notaire)
          <tr>
              <td>{{$notaire->id}}</td>
              <td>{{$notaire->nom}}</td>
              <td>{{$notaire->prenom}}</td>
              <td>{{$notaire->NNI}}</td>
              <td>{{$notaire->telephone}}</td>
              <td>{{$notaire->adresse}}</td>
              <td class="d-flex justify-content-between align-items-center">
                  {{-- <a href="{{route('notaire.edit', $notaire->id)}}" class="btn btn-primary mr-1" data-bs-toggle="modal" data-bs-targetedittemoin="#edit">Modifier</a> --}}
                  <a href="#editNotaire{{$notaire->id}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-targetedittemoin="#edit">Modifier</a>
                  @include('pages.not_edit')
                  {{-- <a href="{{route('notaire.edit',$notaire->id)}}" class="btn btn-primary mr-1" data-bs-toggle="modal" data-bs-targeteditnotaire="#edit">Edit</a> --}}
                  {{-- <a href="#editnotaire{{$notaire->id}}" class="btn btn-primary mr-1" data-bs-toggle="modal" data-bs-targeteditnotaire="#edit">Edit</a> --}}
                  <form action="{{route('notaire.destroy', $notaire->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
          </div>
      </div>
  </div>
  </div>



@push('scripts')
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<script>
  let table = new DataTable('#notaireTable');
</script>
@endpush
  </div>
</body>
</html>
@endsection