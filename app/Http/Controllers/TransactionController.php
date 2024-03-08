<?php

namespace App\Http\Controllers;

use App\Models\Acheteur;
use App\Models\Notaire;
use App\Models\Temoin;
use App\Models\terrain;
use App\Models\Transaction;
use App\Models\Vendeur;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions= Transaction::all();
        return view('pages.listTrans' , compact("transactions"));
    }
    // public function fetchTemoin($id)
    // {
    //     $transaction = Temoin::findOrFail($id);
    //     return response()->json($transaction);
    // }
    
    // public function fetchNotaire(Request $request)
    // {
    //     $notaire = Notaire::findOrFail($request->id);
    //     return response()->json($notaire);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $transaction = new Transaction();
        $transaction->vendeur_id = $request->vendeur_id;
        $transaction->acheteur_id = $request->acheteur_id;
        $transaction->terrain_id = $request->terrain_id;
        $transaction->notaire_id = $request->notaire_id;
        $transaction->temoin_id = $request->temoin_id;
        $transaction->dateTr = $request->dateTrans;
        $transaction->save();
        return redirect('transaction')->with('status','transaction ajouter avec succes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        // $transaction = Transaction::findOrFail($id);
        // $temoins = Temoin::findOrFail($transaction->temoin_id);
        // $notaires = Notaire::findOrFail($transaction->notaire_id);
        // $acheteurs = Acheteur::findOrFail($transaction->acheteur_id);
        // $vendeurs = Vendeur::findOrFail($transaction->vendeur_id);
        // $terrains = terrain::findOrFail($transaction->terrain_id);
        //     return view('pages.imprimer' , compact('temoins' , 'notaires','acheteurs','terrains'));
            // return $id;
            return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the transaction with the specified ID
        $transaction = Transaction::findOrFail($id);
    
        // Retrieve related models using their foreign keys from the transaction
        $temoins = Temoin::findOrFail($transaction->temoin_id);
        $notaires = Notaire::findOrFail($transaction->notaire_id);
        $acheteurs = Acheteur::findOrFail($transaction->acheteur_id);
        $vendeurs = Vendeur::findOrFail($transaction->vendeur_id);
        $terrains = terrain::findOrFail($transaction->terrain_id);
    
        // Pass the retrieved data to the view
        return view('pages.transDetails', compact('transaction', 'temoins', 'notaires', 'acheteurs', 'vendeurs', 'terrains'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
    
        // Retrieve related models using their foreign keys from the transaction
        $temoins = Temoin::findOrFail($transaction->temoin_id);
        $notaires = Notaire::findOrFail($transaction->notaire_id);
        $acheteurs = Acheteur::findOrFail($transaction->acheteur_id);
        $vendeurs = Vendeur::findOrFail($transaction->vendeur_id);
        $terrains = terrain::findOrFail($transaction->terrain_id);
    
        // Pass the retrieved data to the view
        return view('pages.editTrans', compact('transaction', 'temoins', 'notaires', 'acheteurs', 'vendeurs', 'terrains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $transaction = Transaction::findorFail($id);
        $transaction->vendeur_id = $request->vendeur_id;
        $transaction->acheteur_id = $request->acheteur_id;
        $transaction->terrain_id = $request->terrain_id;
        $transaction->notaire_id = $request->notaire_id;
        $transaction->temoin_id = $request->temoin_id;
        $transaction->dateTr = $request->dateTrans;
        $transaction->save();
        return redirect('transaction')->with('status','transaction update avec succes');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Transaction::findorFail($id)->delete();
        return redirect('transaction')->with('status','Transaction deleted avec succes');
    }
}
