<?php

namespace App\Http\Controllers;

use App\Models\Acheteur;
use App\Models\acheteurs;
use Illuminate\Http\Request;

class AcheteurController extends Controller
{
    protected $acheteurs;
    public function __construct()
    {
        $this->acheteurs = new Acheteur();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['acheteurs'] = $this->acheteurs->all();
        return view('pages.acheteur')->with($response);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
        ]);

        $this->acheteurs->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['acheteur'] = $this->acheteurs->find($id);
        return view('pages.editAcheteur')->with($response);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            // Ajoutez ici les règles de validation pour les champs du formulaire
        ]);

        $acheteurs = $this->acheteurs->find($id);
        $acheteurs->update($request->all());
        return redirect('acheteur');
    }

    public function destroy(string $id)
    {
        $acheteurs = $this->acheteurs->find($id);
        $acheteurs->delete();
        return redirect('acheteur');
    }
}
