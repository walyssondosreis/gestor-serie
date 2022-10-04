<!-- HTML UTILIZANDO COMPONENTE BLADE  DO LARAVEL -->
<<<<<<< HEAD
<x-layout title="Temporadas {!! $serie->nome !!}" >
    CHEGOU AQUI
    <ul class="list-group">
        @foreach ($seasons as $season)
        INTERACAO
=======
<x-layout title="Temporadas" >
    <ul class="list-group">
        
        @foreach($seasons as $season)
>>>>>>> b96950b284dcea2666bd696bb093fa27e4cb5b61
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Temporada {{ $season->numero }}
            <span class="badge bg-secondary">
                {{ $season->episodes->count() }}
            </span>
        </li>
        @endforeach
    </ul>

</x-layout>