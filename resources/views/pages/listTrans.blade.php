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

    {{-- @foreach ($transactions as $trans)
    <div class="card" style="width: 18rem;">
        <img src="../imgs/download.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Transaction</h5>
          <p class="card-text"> {{$trans->dateTr}}.</p>
          <a class="center" href="{{route('transaction.show',$trans->id)}}">Deatails</a>
        </div>
      </div>
    @endforeach --}}

    <div class="container">
        <a href="{{url('temoins')}}" class="btn btn-success p-2 mb-3">ajouter Transaction</a>
        <div class="row">
            @foreach ($transactions as $trans)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="../imgs/download.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Transaction</h5>
                        <p class="card-text">{{$trans->dateTr}}.</p>
                       <div class="d-flex justify-content-between">
                        <a href="{{route('transaction.show',$trans->id)}}" class="btn btn-primary">Details</a>
                        <a href="#editTransaction{{$trans->id}}" class="btn btn-primary " data-bs-toggle="modal" data-bs-targetedittemoin="#edit">edit</a>
                        <a href="#delate{{$trans->id}}" class="btn btn-danger" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                        @include('pages.editTrans')
                        @include('pages.deleteTrans')
                       </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection