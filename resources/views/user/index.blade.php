

 <a href="{{route('users.create')}}" class="btn btn-primary">Novo</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>grupo</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($listuser as $ruser)
                <tr>
                    <td>{{ $ruser->id }}</td>
                    <td>{{ $ruser->nome }}</td>
                    <td>{{ $ruser->email }}</td>
                    <td>{{ $ruser->telefone }}</td>
                    <td>{{ $ruser->grupo_id }}</td>
                    <td>
                        <ul class="list-inline">
                        <div class="row">
                            <li>
                            <a class="btn btn-primary" href="{{route('users.edit',$ruser->id)}}">Editar</a>
                            </li>
                            <li>
                            <a class="btn btn-danger" href="{{route('users.destroy',$ruser->id)}}">Deletar</a>
                            </li>
                            </div>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

