<?php

namespace App\Http\Controllers;

use App\Models\Temoin;
use Illuminate\Http\Request;

class TemoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoins = Temoin::all();
        return view('pages.temoins' , compact("temoins"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $temoin = new Temoin();
        $temoin->nom = $request->nom;
        $temoin->prenom = $request->prenom;
        $temoin->NNI = $request->nni;
        $temoin->telephone = $request->phone;
        $temoin->adresse = $request->adress;
        $temoin->save();
        return redirect('temoin')->with('status','temoin ajouter avec succes');
        // return $request;
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
     * @param  \App\Models\Temoin  $temoin
     * @return \Illuminate\Http\Response
     */
    public function show(Temoin $temoin)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoin  $temoin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $temoin = Temoin::find($id);
        return view('pages.edit_tem' ,compact('temoin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoin  $temoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temoin = Temoin::findorFail($id);
        $temoin->nom = $request->nom;
        $temoin->prenom = $request->prenom;
        $temoin->NNI = $request->nni;
        $temoin->telephone = $request->phone;
        $temoin->adresse = $request->adress;
        $temoin->save();
        return redirect('temoin')->with('status','temoin updated avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoin  $temoin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Temoin::findorFail($id)->delete();
        return redirect('temoin')->with('status','temoin deleted avec succes');

    }
}
