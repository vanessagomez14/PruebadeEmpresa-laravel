<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request )
    {
        $pokemon = json_decode($request->getContent(),true);
        // dd($pokemon);
        return view('holi.pokemon');
    }
}
