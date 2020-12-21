<!--==========================
  Header
  ============================-->

  <div class="container">
    <div class="row">
        <div class="col-md-4">
        </br></br></br>
            <h3>Listagem</h3>
        </div>

        
        <form action="{{route('index') }}" method="GET" class="container">
    <input type="text" name="search" required/>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
    
</form>




    </div>
<div class="row">
    <div class="col-lg">
        <a class="btn btn-default" href="{{route('index') }}/?q=a">A </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=b">B </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=c">C </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=d">D </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=e">E </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=f">F </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=g">G </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=h">H </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=i">I </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=j">J </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=k">K </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=l">L </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=m">M </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=n">N </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=o">O </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=p">P </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=q">Q </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=r">R </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=s">S </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=x">X </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=w">W </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=y">Y </a>
        <a class="btn btn-default" href="{{route('index') }}/?q=z">Z </a>
 
    
    
    </div>

</div>
    <div class="row">
    <div class="col-sm"> 
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
            @foreach($pesquisas as $pesquisa)
                <tr>
                    <td>{{ $pesquisa->id }}</td>
                    <td>{{ $pesquisa->nome }}</td>
                    <td>{{ $pesquisa->email }}</td>
                    <td>{{ $pesquisa->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                        <div class="row">
                            <li>
                            <a class="btn btn-primary" href="">Editar</a>
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
        </div>
        </div>

        <div class= "row">

        <div class="col-md-8">








            <a href="{{route('index')}}" class="btn btn-primary">Novo</a>
            @if(Session::has('message'))
   <div class="alert alert-sucess alert-dismissible show" role="alert">
        <strong> {!! session()->get('message') !!}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">×</span>
        </button>
   </div>
@endif

        </div>
    </div>
</div>
@endsection