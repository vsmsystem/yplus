<p>{{ $produto->nome }}</p>

<form method="post" action="{{ route('produto.destroy',$produto->id) }}">
  @csrf
  @method('DELETE')
  <button type="submit">Excluir</button>
</form>