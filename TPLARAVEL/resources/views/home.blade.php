@extends('layouts.app')

{{-- On prend le contenu de layouts/app.blade.php --}}
{{-- Le contenu de la section content va prendre
    la place du yield content --}}
@section('content')
        <h1 class="text-3xl text-center mb-3">Liste des jeux</h1>

    <div class="flex flex-wrap -mx-3 gap-3">
        @foreach ($games as $game)
            <div class="w-1/2 md:w-1/3 lg:w-1/5 mb-6">
                <div class="flex flex-col justify-between h-full">
                    <a href="/jeu/{{ $game->id }}" class="mx-3 block group">
                <img class="w-full mb-3 h-[300px] object-cover rounded-lg shadow-xl shadow-black" src="{{ $game->image }}" alt="">
              <div>  <h3 class="text-sm text-gray-600 underline group-hover:no-underline">{{ $game->name }} </h3>| <h3> {{$game->price}} euros </h3></div>

                <p class="no-underline text-sm hover:font-bold">En savoir plus</p></a>

                <a class=" w-20 text-sm bg-red-500 text-gray-200 rounded px-2 py-1" href="/{{ $game->id }}/supprimer" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$game->title}} ? ')" >Supprimer</a>
                <a class=" w-20 text-sm bg-blue-500 text-gray-200 rounded px-2 py-1" href="/{{ $game->id }}/modifier" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$game->title}} ? ')" >Modifier</a>
                
            </div>
            </div>
        @endforeach
    </div>
@endsection