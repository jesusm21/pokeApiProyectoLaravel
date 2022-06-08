@extends('layouts.main')

@section('nuestros')
    <div class=" ">
        <h1 class="mt-5"> Sus Pokémons</h1>
        <div class="row mt-5"> 
            @foreach ($nuestrosPokemons as $mostrarPokemons)    
                <div class="bg-dark text-white mb-5 col-md-5 p-5 mx-auto" >
                    <h3 class="text-uppercase">{{$mostrarPokemons['pokeName']}}</h3>
                    <img src={{$mostrarPokemons['pokeImage']}} alt="pokémon">
                </div>
            @endforeach
        </div>
        
    </div>
@endsection