
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


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include jQuery UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<!-- Form -->
<form id="temoinForm" action="{{route('transaction.create')}}" class="row g-3">
    <!-- Select for Temoin -->
    <div>
        <label for="" >Date Transaction</label>
        <input type="date" class="form-control width-20" name="dateTrans">
    </div>
    
    <div class="col-auto">
        <label for="temoin_id">Temoin</label>
        <select class="form-control" name="temoin_id" id="temoin_id">
            @foreach ($temoins as $temoin)
                <option value="{{ $temoin->id }}">{{ $temoin->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="nom">Nom</label>
        <input type="text" disabled class="form-control" id="nom" name="nom" readonly>
    </div>
    <div class="col-auto">
        <label for="prenom">Prenom</label>
        <input type="text" disabled class="form-control" id="prenom" name="prenom" readonly>
    </div>
    <div class="col-auto">
        <label for="telephone">Phone Number</label>
        <input type="text" disabled class="form-control" id="telephone" name="telephone" readonly>
    </div><br>

    {{-- espase  --}}
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        <label for="notaire_id">notaires</label>
        <select class="form-control" name="notaire_id" id="notaire_id">
            @foreach ($notaires as $notaire)
                <option value="{{ $notaire->id }}">{{ $notaire->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="nom">Nom</label>
        <input type="text" disabled class="form-control" id="nomn" name="nom" readonly>
    </div>
    <div class="col-auto">
        <label for="prenom">Prenom</label>
        <input type="text" disabled class="form-control" id="prenomn" name="prenom" readonly>
    </div>
    <div class="col-auto">
        <label for="telephone">Phone Number</label>
        <input type="text" disabled class="form-control" id="telephonen" name="telephone" readonly>
    </div>

    {{-- espase  --}}
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        
        <label for="acheteur_id">Achateurs</label>
        <select class="form-control" name="acheteur_id" id="acheteur_id">
            @foreach ($acheteurs as $acheteur)
                <option value="{{ $acheteur->id }}">{{ $acheteur->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="nom">Nom</label>
        <input type="text" disabled class="form-control" id="noma" name="nom" readonly>
    </div>
    <div class="col-auto">
        <label for="prenom">Prenom</label>
        <input type="text" disabled class="form-control" id="prenoma" name="prenom" readonly>
    </div>
    <div class="col-auto">
        <label for="telephone">Phone Number</label>
        <input type="text" disabled class="form-control" id="telephonea" name="telephone" readonly>
    </div>

    {{-- espase  --}}
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        <label for="vendeur_id">vendeur</label>
        <select class="form-control" name="vendeur_id" id="vendeur_id">
            @foreach ($vendeurs as $vendeur)
                <option value="{{ $vendeur->id }}">{{ $vendeur->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="nomv">Nom</label>
        <input type="text" disabled class="form-control" id="nomv" name="nomv" readonly>
    </div>
    <div class="col-auto">
        <label for="prenomv">Prenom</label>
        <input type="text" disabled class="form-control" id="prenomv" name="prenomv" readonly>
    </div>
    <div class="col-auto">
        <label for="telephonev">Phone Number</label>
        <input type="text" disabled class="form-control" id="telephonev" name="telephonev" readonly>
    </div>

    {{-- espase  --}}
    <div></div>
    {{-- notaire terrain  --}}
    <div class="col-auto" >
        <label for="terrain_id">terrain</label>
        <select class="form-control" name="terrain_id" id="terrain_id">
            @foreach ($terrains as $terrain)
                <option value="{{ $terrain->id }}">{{ $terrain->emplacement }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="nom">Nom</label>
        <input type="text" disabled class="form-control" id="nomt" name="nom" readonly>
    </div>
    <div class="col-auto">
        <label for="prenom">Prenom</label>
        <input type="text" disabled class="form-control" id="prenomt" name="prenom" readonly>
    </div>
    <div class="col-auto">
        <label for="telephone">Phone Number</label>
        <input type="text" disabled class="form-control" id="telephonet" name="telephone" readonly>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Evoiyer</button>
    </div>
    
</form>

<!-- Your custom  temoin script -->
<script>
    $(document).ready(function() {
        $('#temoin_id').change(function() {
            var temoinId = $(this).val();
            $.ajax({
                url: '/temoins/' + temoinId, // Assuming you need to fetch data for a specific temoin based on their ID
                type: 'GET',
                success: function(response) {
                    console.log("test");
                    // Update input fields with specific information
                    $('#nom').val(response.nom);
                    $('#prenom').val(response.prenom);
                    $('#telephone').val(response.telephone);
                    $('#adresse').val(response.adresse);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Handle error
                }
            });
        });
    });
</script>


{{-- for notaires  --}}
<script>
    $(document).ready(function() {
        $('#notaire_id').change(function() {
            var notaireId = $(this).val();
            $.ajax({
                url: '/notaires/' + notaireId, // Assuming you need to fetch data for a specific notaire based on their ID
                type: 'GET',
                success: function(response) {
                    console.log("test");
                    // Update input fields with specific information
                    $('#nomn').val(response.nom);
                    $('#prenomn').val(response.prenom);
                    $('#telephonen').val(response.telephone);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Handle error
                }
            });
        });
    });
</script>

{{-- for achateur  --}}
<script>
    $(document).ready(function() {
        $('#acheteur_id').change(function() {
            var notaireId = $(this).val();
            $.ajax({
                url: '/acheteurs/' + notaireId, // Assuming you need to fetch data for a specific notaire based on their ID
                type: 'GET',
                success: function(response) {
                    console.log("test");
                    // Update input fields with specific information
                    $('#noma').val(response.nom);
                    $('#prenoma').val(response.prenom);
                    $('#telephonea').val(response.telephone);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Handle error
                }
            });
        });
    });
</script>

{{-- for vendeur  --}}
<script>
    $(document).ready(function() {
        $('#vendeur_id').change(function() {
            var notaireId = $(this).val();
            $.ajax({
                url: '/vendeurs/' + notaireId, // Assuming you need to fetch data for a specific notaire based on their ID
                type: 'GET',
                success: function(response) {
                    console.log("test");
                    // Update input fields with specific information
                    $('#nomv').val(response.nom);
                    $('#prenomv').val(response.prenom);
                    $('#telephonev').val(response.telephone);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Handle error
                }
            });
        });
    });
</script>
{{-- for trrain  --}}
<script>
    $(document).ready(function() {
        $('#terrain_id').change(function() {
            var notaireId = $(this).val();
            $.ajax({
                url: '/terrains/' + notaireId, // Assuming you need to fetch data for a specific notaire based on their ID
                type: 'GET',
                success: function(response) {
                    console.log("test");
                    // Update input fields with specific information
                    $('#nomt').val(response.emplacement);
                    $('#prenomt').val(response.surface);
                    $('#telephonet').val(response.description);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Handle error
                }
            });
        });
    });
</script>
</body>
</html>

@endsection