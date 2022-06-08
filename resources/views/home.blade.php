@extends('layouts.main')

@section('content')
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <div class="bg-dark text-white p-5 mt-5 rounded w-50 mx-auto">
            @csrf <!-- {{ csrf_field() }} -->
            <h1 class="text-uppercase">{{$data['name']}}</h1>
            <img src={{$data['sprites']['front_default']}} alt="pokemon">
            <ul class="w-50 p-0 mx-auto">
                @foreach ($data['stats'] as $pokeStat)
                    <li class="text-capitalize" >{{$pokeStat['stat']['name']}}: {{$pokeStat['base_stat']}}
                    </li>
                @endforeach
            </ul>
            <a href="/poke-save/{{$pokeName = $data['name']}}"><button class="btn bg-white text-dark mt-5">Guardar Pokémon</button></a>
    </div>    
        <a class="btn btn-dark text-white mt-5" href="/">Mostrar Pokémon</a>
    <a  href="/mostrar-pokemons"> <button class="btn btn-white border border-dark text-dark mt-5">Mostrar mis Pokemones </button> </a>


@endsection