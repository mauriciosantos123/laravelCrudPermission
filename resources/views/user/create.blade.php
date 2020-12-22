

<form action="{{route('users.store')}}"class="form-horizonta" method="POST">
{{ csrf_field() }}


<div class="container">
    <div class="row">
        <h3>Novo </h3></br></br></br>
        </br></br></br>
   <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
   <div>
        <label for="grupo_id">grupo</label>
       
    <select id='grupo_id' name='grupo_id' class='form-control'>
    <option value=''>selecione um grupo </option> 
    @foreach($gruplist as $grupos)

    <option value='{{ $grupos->id }}'>{{ $grupos->nome }} </option> 


    @endforeach
    </select>
    </div>
   </br></br>

    <div>
        <label for="nome">nome </label>
        <input type="text" id="nome" name="nome">
    </div>
    </br></br>
    <div>
        <label for="email">email</label>
        <input type="text" id="modelo" name="email">
    </div>
    </br></br>
    <div>
        <label for="telefone">telefone</label>
        <input type="text" id="telefone" name="telefone">
    </div>
    
    </br></br>
    <div>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha">
    </div>



    </br></br>
        <div class="form-group">
            <input type="submit" name="save" value="Salvar" class="btn btn-primary">
         <!--   <input type="reset" name="cancel" value="Cancelar" class="btn btn-danger"> -->
        </div>
    </div>
    </form>
</div>



