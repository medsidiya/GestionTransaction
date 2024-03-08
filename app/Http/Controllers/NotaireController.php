<?php

namespace App\Http\Controllers;

use App\Models\Notaire;
use Illuminate\Http\Request;

class NotaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notaires = Notaire::all();
        return view('pages.notaire' , compact("notaires"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $notaire = new Notaire();
        $notaire->nom = $request->nom;
        $notaire->prenom = $request->prenom;
        $notaire->NNI = $request->nni;
        $notaire->telephone = $request->phone;
        $notaire->adresse = $request->adress;
        $notaire->save();
        return redirect('notaire')->with('status','notaire ajouter avec succes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notaire  $notaire
     * @return \Illuminate\Http\Response
     */
    public function show(Notaire $notaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notaire  $notaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notaire = Notaire::find($id);
        return view('pages.not_edit' ,compact('notaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notaire  $notaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notaire = Notaire::findorFail($id);
        $notaire->nom = $request->nom;
        $notaire->prenom = $request->prenom;
        $notaire->NNI = $request->nni;
        $notaire->telephone = $request->phone;
        $notaire->adresse = $request->adress;
        $notaire->save();
        return redirect('notaire')->with('status','notaire updated avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notaire  $notaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notaire::findorFail($id)->delete();
        return redirect('notaire')->with('status','notaire deleted avec succes');
    }
}
