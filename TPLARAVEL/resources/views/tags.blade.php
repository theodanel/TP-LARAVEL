@extends('layouts.app')

{{-- On prend le contenu de layouts/app.blade.php --}}
{{-- Le contenu de la section content va prendre
    la place du yield content --}}
@section('content')
<div class="flex flex-col h-full">
<div>
    <h1 class="h-1/2 text-3xl text-center mb-8">Catégorie des tags</h1>
</div>

    <div class="flex flex-wrap -mx-3 gap-3">
        @foreach ($tags as $tag)
            <div class="w-1/2 md:w-1/3 lg:w-1/5 mb-6">
                <div class="flex flex-col justify-between h-full">
                    <a href="/jeu/{{ $tag->id }}" class="mx-3 block group">
                        <ul class="divide-y">
                                <li class="py-2">{{ $tag->name }}</li>
                            </ul>

            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection