

    

<div class="modal fade" id="editTransaction{{$trans->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add temoin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
<!-- Form -->
<form id="temoinForm" action="{{route('transaction.update', $trans->id)}}" class="row g-3" method="POST">
    <!-- Select for Temoin -->
    @csrf
    @method('put')
    <div>
        <label for="" >Date Transaction</label>
        <input type="date" class="form-control width-20" name="dateTrans" value="{{ $trans->dateTr }}">
    </div>
    
    <div class="col-auto">
        <label for="temoin_id">Temoin</label>
        {{-- <select class="form-control" name="temoin_id" id="temoin_id">
          
                <option value="{{ $trans->temoin_id }}">default</option>
                <option value="{{ $trans->temoin_id }}">{{ $trans->temoin_id }}</option>
           
        </select> --}}
        <input type="text" name="temoin_id" class="form-control" value="{{ $trans->temoin_id }}">
    </div>
    
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        <label for="notaire_id">notaires</label>
        {{-- <select class="form-control" name="notaire_id" id="notaire_id">
           
                <option value="{{ $trans->notaire_id }}">{{ $trans->notaire_id }}</option>
        </select> --}}
        <input type="text" name="notaire_id" class="form-control" value="{{ $trans->notaire_id }}">
    </div>
    
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        
        <label for="acheteur_id">Achateurs</label>
        {{-- <select class="form-control" name="acheteur_id" id="acheteur_id">
 
                <option value="{{ $trans->achateur_id }}">{{ $trans->achateur_id }}</option>
            </select> --}}
            <input type="text" name="acheteur_id" class="form-control" value="{{ $trans->acheteur_id }}">
    </div>
    
    <div></div>
    {{-- notaire section  --}}
    <div class="col-auto" >
        <label for="vendeur_id">vendeur</label>
        {{-- <select class="form-control" name="vendeur_id" id="vendeur_id">
                <option value="{{ $trans->vendeur_id }}">{{ $trans->vendeur_id }}</option>
        </select> --}}
        <input type="text" name="vendeur_id"   class="form-control" value="{{ $trans->vendeur_id }}">
    </div>
    
    <div></div>
    {{-- notaire terrain  --}}
    <div class="col-auto" >
        <label for="terrain_id">terrain</label>
        <input type="text"name="terrain_id"  class="form-control" value="{{ $trans->terrain_id }}" >
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Evoiyer</button>
    </div>
    
</form>
        
      </div>
    </div>
  </div>

  {{-- update services --}}


