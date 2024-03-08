

    

<div class="modal fade" id="editTemoin{{$temoin->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit" data-bs-target="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">add temoin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('temoin.update', $temoin->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom" id="" value="{{$temoin->nom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id=""   value="{{$temoin->prenom}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">NNI</label>
                    <input type="text" class="form-control" name="nni" id=""   value="{{$temoin->NNI}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">telephone</label>
                    <input type="text" class="form-control" name="phone" id=""   value="{{$temoin->telephone}}">
                </div>
                <div class="form-group mb-2">
                    <label for="">adress</label>
                    <input type="text" class="form-control" name="adress" id=""   value="{{$temoin->adresse}}">
                </div>
            </div>
            {{-- <button  class="btn btn-secondary" >close</button> --}}
              <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  {{-- update services --}}


