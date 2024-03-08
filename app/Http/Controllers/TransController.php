<?php

namespace App\Http\Controllers;

use App\Models\Acheteur;
use App\Models\Notaire;
use App\Models\Temoin;
use App\Models\terrain;
use App\Models\Transaction;
use App\Models\Vendeur;
use Illuminate\Http\Request;

class TransController extends Controller
{
    public function index()
    {
        $temoins = Temoin::all();
        $notaires = Notaire::all();
        $acheteurs = Acheteur::all();
        $vendeurs = Vendeur::all();
        $terrains = terrain::all();
        return view('pages.transaction' , compact("temoins","notaires","acheteurs","vendeurs","terrains"));
    }
    public function fetchTemoin($id)
    {
        $temoin = Temoin::findOrFail($id);
        return response()->json($temoin);
    }
    public function fetchNotaire($id)
    {
        $notaires = Notaire::findOrFail($id);
        return response()->json($notaires);
    }
    public function fetchAchateur($id)
    {
        $acheteurs = Acheteur::findOrFail($id);
        return response()->json($acheteurs);
    }
    
    public function fetchVendeur($id)
    {
        $vendeurs = Vendeur::findOrFail($id);
        return response()->json($vendeurs);
    }
    public function fetchTerrain($id)
    {
        $terrains = terrain::findOrFail($id);
        return response()->json($terrains);
    }

    public function print($id)
    {
        $transaction = Transaction::findOrFail($id);
        $temoins = Temoin::findOrFail($transaction->temoin_id);
        $notaires = Notaire::findOrFail($transaction->notaire_id);
        $acheteurs = Acheteur::findOrFail($transaction->acheteur_id);
        $vendeurs = Vendeur::findOrFail($transaction->vendeur_id);
        $terrains = terrain::findOrFail($transaction->terrain_id);
        return view('pages.imprimer' , compact('temoins' ,'vendeurs' ,'notaires','acheteurs','terrains'));
    }
    // public function fetchTemoin(Temoin $id)
    // {
    //     $temoin = Temoin::findOrFail($id);
    //     return response()->json($temoin);
    // }
}
