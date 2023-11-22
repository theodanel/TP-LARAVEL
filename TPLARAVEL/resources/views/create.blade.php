@extends('layouts.app')

@section('content')
    <a href="/" class="text-gray-500">Retour aux jeux</a>
    <h1 class="text-3xl mb-3">Ajouter un jeu</h1>



    <form action="" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="block">Titre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="rounded shadow border-gray-300 w-full">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="synopsis" class="block">Synopsis</label>
            <textarea name="synopsis" id="synopsis" class="rounded shadow border-gray-300 w-full">{{ old('synopsis') }}</textarea>
            @error('synopsis')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="block">Prix</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}" class="rounded shadow border-gray-300 w-full">
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>



        {{-- <div class="mb-3">
            <label for="category" class="block">Tags</label>
            <select name="tag" id="tag" class="rounded shadow border-gray-300 w-full">
                @foreach ($tags as $tag)
                    <option @selected($tag->id == old('tag')) value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('category')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div> --}}

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
    </form>
@endsection