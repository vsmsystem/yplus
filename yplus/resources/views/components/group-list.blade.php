<section class="panel">
    <header class="panel-heading">
        Meus Grupos
    </header>
    <table class="table table-condensed">

        <tbody>
            {{-- id id_user_owner name --}}
            @foreach($groups as $group)
            <tr class="">
                <td>{{$group->id}}</td>
                <td>{{$group->name}}</td>
                <td style="text-align:right"><i class="fa fa-trash" onclick="alert('deletar')"></i></td>
            </tr>
            @endforeach


        </tbody>
    </table>
</section>