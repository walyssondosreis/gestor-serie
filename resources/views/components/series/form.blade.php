<form action={{ $action }} method="POST">
    <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <label for="nome" class="form-label">Nome: </label>
    <input type="text" id="nome" name="nome" class="form-control" @isset($nome)value="{{ $nome }}" @endisset>
    <div class="form-text mb-3">Insira o nome da sua série favorita</div>
    <button type="submit" class="btn btn-primary mb-3">Adicionar</button>
    <a href={{ route('series.index') }} class="btn btn-dark mb-3">Cancelar</a>
</form>