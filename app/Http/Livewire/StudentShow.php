<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Acheteur;
use Livewire\Component;
   
class StudentShow extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $nom, $prenom, $NNI, $student_id;
    public $search = '';

    protected function rules()
    {
        return [
            'nom' => 'required|string|',
            'prenom' => ['required'],
            'NNI' => 'required|numeric|max:10',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();

        Acheteur::create($validatedData);
        session()->flash('message','Acheteur  créer avec Succes');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editStudent(int $student_id)
    {
        $student = Acheteur::find($student_id);
        if($student){

            $this->student_id = $student->id;
            $this->nom = $student->nom;
            $this->prenom = $student->prenom;
            $this->NNI = $student->NNI;
        }else{
            return redirect()->to('/Acheteur');
        }
    }

    public function updateStudent()
    {
        $validatedData = $this->validate();

        Acheteur::where('id',$this->student_id)->update([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'NNI' => $validatedData['NNI']
        ]);
        session()->flash('message','Acheteur Moddifier avec  Succes');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent()
    {
        Acheteur::find($this->student_id)->delete();
        session()->flash('message','Acheteur delete avec  Succes');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nom = '';
        $this->prenom = '';
        $this->NNI = '';
    }

    public function render()
    {
        $students = Acheteur::where('nom', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.student-show', ['students' => $students]);
    }
}