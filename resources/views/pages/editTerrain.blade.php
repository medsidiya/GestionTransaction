
<div class="modal fade" id="editTer{{$terrain->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Moddifier terrain</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('terrain.update', $terrain->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">Emplacement</label>
                    <input type="text" class="form-control" name="emplacement" id="" value="{{$terrain->emplacement}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">surface</label>
                    <input type="text" class="form-control" name="surface" id=""   value="{{$terrain->surface}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">prix</label>
                    <input type="number" class="form-control" name="prix" id=""   value="{{$terrain->prix}}">
                </div>
                
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
                <button type="submit" class="btn btn-primary">Moddifier</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  {{-- update services --}}


