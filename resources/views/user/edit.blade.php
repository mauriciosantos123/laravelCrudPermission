

<form action="{{route('users.update',$user->id)}}" method="post"class="form-horizonta" method="POST">
{{ csrf_field() }}
@method('PUT')
<div class="container">
    <div class="row">
        <h3>Novo </h3></br></br></br>
        </br></br></br>
   <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
   <input type="hidden" id="id" name="id" value="{{$usuario->id}}">
   </br></br>
    <div>
        <label for="nome">nome </label>
        <input type="text" id="nome" name="nome" value="{{$usuario->nome}}">
    </div>
    </br></br>
    <div>
        <label for="email">email</label>
        <input type="text" id="modelo" name="email" value="{{$usuario->email}}">
    </div>
    </br></br>
    <div>
        <label for="telefone">telefone</label>
        <input type="text" id="telefone" name="telefone" value="{{$usuario->telefone}}">
    </div>
    
    </br></br>
    <div>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" value="{{$usuario->senha}}">
    </div>
    
    </br></br>
        <div class="form-group">
            <input type="submit" name="save" value="Salvar" class="btn btn-primary">
         <!--   <input type="reset" name="cancel" value="Cancelar" class="btn btn-danger"> -->
        </div>
    </div>
    </form>
</div>



