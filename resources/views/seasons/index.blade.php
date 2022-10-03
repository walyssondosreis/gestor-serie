<!-- HTML UTILIZANDO COMPONENTE BLADE  DO LARAVEL -->
<x-layout title="Temporadas {!! $serie->nome !!}" >
    CHEGOU AQUI
    <ul class="list-group">
        @foreach ($seasons as $season)
        INTERACAO
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Temporada {{ $season->numero }}
            <span class="badge bg-secondary">
                {{ $season->episodes->count() }}
            </span>
        </li>
        @endforeach
    </ul>

</x-layout>