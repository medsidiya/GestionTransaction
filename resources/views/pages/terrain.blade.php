
@extends('layouts.auth')

@section('content')
    

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <div class="">
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter Terrain</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
     
    <form class="row g-3" action="{{url('terrain/create')}}" method="put">
      @csrf
      @method('PUT')
      <div class="col-md-6">
          <label class="form-label">Emplacement</label>
          <input type="text" class="form-control" name="emplacement" placeholder="entre un emplacement" required>
      </div>
      <div class="col-md-6">
          <label class="form-label">Surface</label>
          <input type="text" class="form-control" name="surface" placeholder="entre un surface" required>
      </div>
  
      <div class="col-md-6">
          <label class="form-label">Prix</label>
          <input type="text" class="form-control" name="prix" placeholder="entre le prix" required>
      </div>
  
      <div class="col-12">
          <button type="submit" class="btn btn-success float-left">Submit</button>
      </div>
  </form>
  

    </div>
  </div>
</div>
{{-- end model  --}}
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

    {{-- <div class="container"> --}}
<div class="row mt-5">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header head-color">
            <h4>
              Gestion de terrain
              <button type="button" class="btn btn-primary float-end fs-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">ajouter terrain</button>
          </h4>
          </div>
          <div class="card-body">
            @if(session('status'))
<div class="alert alert-primary">{{session('status')}} </div>
@endif
  <table class="table table-responsive table-hover col-md-2" id="temoinTable">
          <thead>
          <tr class="table-active">
              <th scope="col">Id</th>
              <th scope="col">Emplacement</th>
              <th scope="col">surface</th>  
              <th scope="col">Prix</th>
              {{-- <th scope="col">CategorieId</th> --}}
              <th scope="col">Action</th>
          </tr>
          </thead>
      <tbody>
          @foreach ($terrains as $terrain)
          <tr>
              <td>{{$terrain->id}}</td>
              <td>{{$terrain->emplacement}}</td>
              <td>{{$terrain->surface}}</td>
              <td>{{$terrain->prix}}</td>
              <td>
                <a href="#editTer{{$terrain->id}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-targetedittemoin="#edit">Modifier</a>
                <a href="#delate{{$terrain->id}}" class="btn btn-danger" data-bs-toggle="modal">supprimer</a>
                @include('pages.editTerrain')
                @include('pages.deleteTerrain')

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
  let table = new DataTable('#temoinTable');
</script>
@endpush
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </div>
</body>
</html>
@endsection