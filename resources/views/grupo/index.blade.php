

 <a href="{{route('user_new')}}" class="btn btn-primary">Novo</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>

            
        </tr>
    </thead>
    <tbody>
    @foreach($listuser as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nome }}</td>

            <td>
                <ul class="list-inline">
                <div class="row">
                    <li>
                    <!--MUDAR QUANDO ARRUMA A ROTA DO EDIT-->
                    <a class="btn btn-primary" href="{{route('users.edit',$ruser->id)}}">Editar</a>
                    </li>
                    <li>
                    <a class="btn btn-danger" href="">Deletar</a>
                    </li>
                    </div>
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

