@extends('layouts.auth')

<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Ajouter Acheteur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nom</label>
                        <input type="text" wire:model="nom" class="form-control">
                        @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Prenom</label>
                        <input type="text" wire:model="prenom" class="form-control">
                        @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>NNI</label>
                        <input type="number" wire:model="NNI" class="form-control">
                        @error('NNI') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Update Student Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="updateStudentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStudentModalLabel">Moddifier Terrain</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nom</label>
                        <input type="text" wire:model="nom" class="form-control">
                        @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Prenom</label>
                        <input type="text" wire:model="prenom" class="form-control">
                        @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>NNI</label>
                        <input type="number" wire:model="NNI" class="form-control">
                        @error('NNI') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Quiter</button>
                    <button type="submit" class="btn btn-primary">Moddifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Student Modal -->
<div wire:ignore.self class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteStudentModalLabel">Supprimer Terrain</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyStudent">
                <div class="modal-body">
                    <h4>Êtes-vous sûr de vouloir supprimer ces données ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Quiter</button>
                    <button type="submit" class="btn btn-primary">Yes! Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>


