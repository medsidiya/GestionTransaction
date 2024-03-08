
<div class="modal fade" id="editAchateur{{$acheteur->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add acheteur</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>       
        <form method="POST" action="{{ route('acheteur.update', $acheteur->id) }}" class="p-2">
            @csrf
            @method("PATCH")
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $acheteur->nom }}">
                
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="{{ $acheteur->prenom }}">
            
                <label for="NNI">NNI</label>
                <input type="number" class="form-control" name="NNI" value="{{ $acheteur->NNI }}">
            
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" name="telephone" value="{{ $acheteur->telephone }}">

                <label for="dateNaiss">Date de Naissance</label>
                <input type="date" class="form-control" name="dateNaiss" value="{{ $acheteur->dateNaiss }}">
        <div class="form-group row mt-2">
            <div class="col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>

  @push('css')
  <style>
  .card {
  margin-top: 20px;
  }
  
  css
  Copy code
      .card-header {
          background-color: #b3e5fc;
          text-align: center;
      }
  </style>
  @endpush