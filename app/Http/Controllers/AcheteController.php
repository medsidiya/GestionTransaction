<?php

namespace App\Http\Controllers;

use App\Models\Acheteur;
use Illuminate\Http\Request;

class AcheteController extends Controller
{
    public function index()
    {
        $acheteurs = Acheteur::all();
        return view('pages.acheteur' , compact("acheteurs"));
    }
}
