<x-layout title='Adicionar Série'>
    <form action="/series/salvar" method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf 
        <label for="nome" class="form-label">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome">
        <div class="form-text mb-3">Insira o nome da sua série favorita</div>
        <button type="submit" class="btn btn-primary mb-3">Adicionar</button>
        <a href="/series" class="btn btn-dark mb-3" >Cancelar</a>
    </form>
    

</x-layout>