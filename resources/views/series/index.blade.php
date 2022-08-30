
<!-- HTML UTILIZANDO COMPONENTE BLADE  DO LARAVEL -->
<x-layout title='Séries'>
    <a href="series/criar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>

</x-layout>
