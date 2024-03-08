@extends('layouts.auth')

@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>transaction details</title>

    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Transaction N:{{$transaction->id}}
                        <button class="btn btn-success float-end "><a href="print/{{$transaction->id}}" @click.prevent="printme" target="_blank" class="text-white text-decoration-none"><i class="fa-solid fa-print"></i><span class="p-2">imprimer</span></a></button>
                        {{-- <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add service</button> --}}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="p-3">
                        <div class="logo d-flex">
                            <div class="mt-3 ml-2 mr-4">
                                <h4>REPUBLIQUE ISLAMIQUE DE MAURITANIE</h4>
                                <P>Honneur-Fraternite-Justice</P>
                                <h4>Direction Des Marches Public </h4>
                            </div>
                            <div class="mr-2 mt-4">
                                <img src="{{url('imgs/logo.png')}}" alt="logo" style="width: 100px;">
                            </div>
                        </div>
                    
                    <div class="info mt-5 d-flex justify-content-center">
                        <h5>Secreter Generale</h5>
                    </div> 
                    <div class="details">
                        il s'est presente devant nous {{ $notaires->nom}}
                         Le Mr, {{$vendeurs->nom}}. Numéro National {{ $vendeurs->NNI}} est apparu devant nous,
                         où il a déclaré avoir vendu un {{ $terrains->surface}} à M.{{ $acheteurs->nom}} du Numéro National {{ $acheteurs->NNI}} pour un montant en
                          présence du témoin{{ $temoins->nom}} prix {{ $terrains->prix}}  
                    </div>
                    <div class="foter mt-5">
                        <p>temoins</p>
                        <span>{{ $temoins->nom}} </span>
                    </div>
                    </div>
        </div>
    </div>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>

@endsection