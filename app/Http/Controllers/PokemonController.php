<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pokemons;

class PokemonController extends Controller
{
    //function displays pokemon with the help of the api
    function showPoke() {
        $randomNumber = rand(1,100);
        $dataPoke = Http::get('https://pokeapi.co/api/v2/pokemon/'.strval($randomNumber))->json();
        return view("home", ["data" => $dataPoke]);
    }

    //saves the pokemon to the db and displays a success message
    function savePoke($pokeName) {
        $gettingPokemon = Http::get('https://pokeapi.co/api/v2/pokemon/'.$pokeName);

        $savingPokemon = new Pokemons([
            'pokeName' => $gettingPokemon['name'],
            'pokeImage' => $gettingPokemon['sprites']['front_default']
        ]);

        $savingPokemon->save();
        return redirect('/pokemon-saved');
    }

    //displays all the pokemons saved by the user
    function mostrarPokemons(){
        $allPokemons = Pokemons::all();
        return view('mostrarPokemons', ['nuestrosPokemons' => $allPokemons] );
    }  
}
