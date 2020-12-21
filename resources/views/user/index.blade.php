

 <a href="{{route('users.create')}}" class="btn btn-primary">Novo</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($listuser as $ruser)
                <tr>
                    <td>{{ $ruser->id }}</td>
                    <td>{{ $ruser->nome }}</td>
                    <td>{{ $ruser->email }}</td>
                    <td>{{ $ruser->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                        <div class="row">
                            <li>
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

