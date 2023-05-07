<table>
  <tr>
    <th>nome</th>
    <th>data</th>
  </tr>

  @foreach($produto as $p)
  <tr>
    <td>{{$p->nome}}</td>
    <td>{{$p->created_at}}</td>
  </tr>
  @endforeach



</table>