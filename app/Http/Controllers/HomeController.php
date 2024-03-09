<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien; 

class HomeController extends Controller
{
    public function index()
    {
        $biens = Bien::all(); // Récupère tous les biens
        return view('home',  compact('biens')); // Passe les biens à la vue
    }
}
