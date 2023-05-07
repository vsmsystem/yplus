<form method="post" action="{{ route('produto.update',$produto) }}">
  @csrf
  @method('PUT')
  <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">
  <button type="submit">Criar</button>
</form>