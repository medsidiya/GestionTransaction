<?php

namespace App\Http\Controllers;

use App\Models\Vendeur;
use Illuminate\Http\Request;

class VendeurController extends Controller
{
    protected $vendeur;

    public function __construct()
    {
        $this->vendeur = new Vendeur();
    }

    public function index()
    {
        $response['vendeurs'] = $this->vendeur->all();
        return view('pages.vendeur')->with($response);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
        ]);

        $this->vendeur->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['vendeur'] = $this->vendeur->find($id);
        return view('pages.edit_vend')->with($response);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            // Ajoutez ici les règles de validation pour les champs du formulaire
        ]);

        $vendeur = $this->vendeur->find($id);
        $vendeur->update($request->all());
        return redirect('Vendeur');
    }

    public function destroy(string $id)
    {
        $vendeur = $this->vendeur->find($id);
        $vendeur->delete();
        return redirect('Vendeur');
    }

}
