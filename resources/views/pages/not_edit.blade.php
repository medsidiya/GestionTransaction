

    

<div class="modal fade" id="editNotaire{{ $notaire->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add notaire</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('notaire.update', $notaire->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom" id="" value="{{$notaire->nom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id=""   value="{{$notaire->prenom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">NNI</label>
                    <input type="text" class="form-control" name="nni" id=""   value="{{$notaire->NNI}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">telephone</label>
                    <input type="text" class="form-control" name="phone" id=""   value="{{$notaire->telephone}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">adress</label>
                    <input type="text" class="form-control" name="adress" id=""   value="{{$notaire->adresse}}">
                </div>
            </div>
              <div class="modal-footer">
                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  {{-- update services --}}


