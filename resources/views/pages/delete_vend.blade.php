
{{-- this is for delate temoin --}}
<div class="modal fade" id="delate{{$Vendeur->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Supprimer Vendeur</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('Vendeur.destroy', $Vendeur->id)}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                <p>veux-tu supprimer ce Vendeur</p>
                    <input type="hidden" class="form-control" name="emplacement" id="" value="{{$Vendeur->id}}">
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quiter</button>
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </div>
        </form>
      </div>
    </div>
  </div>

