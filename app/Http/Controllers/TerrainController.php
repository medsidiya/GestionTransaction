<?php

namespace App\Http\Controllers;

use App\Models\terrain;
use Illuminate\Http\Request;
use nate\Support\MessageBag;
class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terrains = terrain::all();
        return view('pages.terrain' , compact("terrains"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'emplacement' => 'required',
            'surface' => 'required',
            'prix' => 'required',
        ]);
    
        $terrain = new terrain();
        $terrain->emplacement = $request->emplacement;
        $terrain->surface = $request->surface;
        $terrain->prix = $request->prix;
        $terrain->save();
    
        return redirect('terrain')->with('status', 'Témoin ajouté avec succès');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $temoin = new Temoin();
        // $temoin->nom = $request->nom;
        // $temoin->prenom = $request->prenom;
        // $temoin->NNI = $request->nni;
        // $temoin->telephone = $request->phone;
        // $temoin->adress = $request->adress;
        // $request->save();
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function show(terrain $terrain)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terrain = terrain::find($id);
        return view('pages.editTerrain' ,compact('terrain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $terrain = terrain::findorFail($id);
        $terrain->emplacement = $request->emplacement;
        $terrain->surface = $request->surface;
        $terrain->prix = $request->prix;
        $terrain->save();
        return redirect('terrain')->with('status','temoin updated avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        terrain::findorFail($id)->delete();
        return redirect('terrain')->with('status','temoin deleted avec succes');

    }
}
