<form method="post" action="{{ route('produto.store') }}">
  @csrf
  <input type="text" name="nome" id="nome">
  <button type="submit">Criar</button>
</form>