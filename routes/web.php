<?php

use Illuminate\Support\Facades\Route;


Route::get("/", "App\Http\Controllers\PokemonController@showPoke");
Route::get('/poke-save/{pokeName}', 'App\Http\Controllers\PokemonController@savePoke');
Route::get('/mostrar-pokemons', 'App\Http\Controllers\PokemonController@mostrarPokemons');
Route::get('/pokemon-saved', function(){
    return view('savedPokemon');
});