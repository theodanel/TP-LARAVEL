@extends('layouts.app')

@section('content')
<a href="/" class="text-gray-500">Retour aux jeux</a>
    <div class="flex gap-10">
        <div class="w-2/5">
            <img class="w-full rounded-md" src="{{ $game->image }}" alt="{{ $game->name }}">
        </div>
        
        <div class="w-3/5 h-1/2">
        <h1 class=" text-gray-600 text-3xl">{{ $game->name }}</h1> <br>
        <p class="text-sm my-3"></p>
        {{ $game->synopsis }}
        
        <h3> {{$game->price}} euros </h3>
        {{-- @if ($movie->category_id)
        Tags : {{ $movie->category->name }} 
        @endif --}}
        
        
        {{-- @if ( $movie->youtube )
        <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{ $movie->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        @endif --}}
        </div>
    </div>

@endsection