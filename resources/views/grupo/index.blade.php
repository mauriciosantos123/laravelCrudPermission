

 <a href="{{route('grupox.create')}}" class="btn btn-primary">Novo</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>

            
        </tr>
    </thead>
    <tbody>
    @foreach($listgrup as $rgrup)
        <tr>
            <td>{{ $rgrup->id }}</td>
            <td>{{ $rgrup->nome }}</td>

            <td>
                <ul class="list-inline">
                <div class="row">
                    <li>
                    <a class="btn btn-primary" href="{{route('grupox.edit',$rgrup->id)}}">Editar</a>
                    </li>
                    <li>
                    <a class="btn btn-danger" href="{{route('grupox.destroy',$rgrup->id)}}">Deletar</a>
                    </li>
                    </div>
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

