
{{-- this is for delate temoin --}}
<div class="modal fade" id="delate{{$terrain->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Supprimer terrain</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('terrain.destroy', $terrain->id)}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                <p>veux-tu supprimer ce terrain</p>
                    <input type="hidden" class="form-control" name="emplacement" id="" value="{{$terrain->id}}">
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quiter</button>
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </div>
        </form>
      </div>
    </div>
  </div>

