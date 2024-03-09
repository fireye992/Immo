<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;

class BiensController extends Controller
{
    public function index()
    {
        $biens = Bien::all(); // Récupère tous les biens de la base de données
        return view('annonces', compact('biens')); // Passe les biens à la vue 'annonces'
    }
}
