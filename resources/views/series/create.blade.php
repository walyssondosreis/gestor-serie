<x-layout title='Adicionar Série'>

    <form action={{ route('series.store') }} method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome: </label>
                <input autofocus type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" >
                <div class="form-text mb-3">Insira o nome da sua série favorita</div>
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">Nº Temporadas: </label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control" value="{{ old('seasonsQty') }}" >
                <div class="form-text mb-3">Insira o nº de Temporadas</div>
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps/ Temporada: </label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control" value="{{ old('episodesPerSeason') }}" >
                <div class="form-text mb-3">Insira o nº de Episódios</div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-3">Adicionar</button>
        <a href={{ route('series.index') }} class="btn btn-dark mb-3">Cancelar</a>
    </form>
</x-layout>