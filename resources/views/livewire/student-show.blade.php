<div>
    @include('livewire.studentmodal')

    <div class="container">
        <div class="row">
            <div class="col-md-10 ms-auto"> <!-- Add ms-auto class here -->
                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Table Acheteur
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal">
                                Ajouter Acheteur
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Nni</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->nom }}</td>
                                        <td>{{ $student->prenom }}</td>
                                        <td>{{ $student->NNI }}</td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click="editStudent({{$student->id}})" class="btn btn-primary">
                                                Modifier
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteStudentModal" wire:click="deleteStudent({{$student->id}})" class="btn btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Aucun Enregistrement Trouvé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
