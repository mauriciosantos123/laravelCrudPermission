

<form action="{{route('grupox.update',$grupo->id)}}" method="post"class="form-horizonta" method="POST">
{{ csrf_field() }}
@method('PUT')
<div class="container">
    <div class="row">
        <h3>Novo </h3></br></br></br>
        </br></br></br>
   <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
   <input type="hidden" id="id" name="id" value="{{$grupo->id}}">
   </br></br>
   
    </br></br>
    <div>
        <label for="grupo">grupo</label>
        <input type="text" id="grupo" name="grupo" value="{{$grupo->grupo}}">
    </div>    
    </br></br>
        <div class="form-group">
            <input type="submit" name="save" value="Salvar" class="btn btn-primary">
         <!--   <input type="reset" name="cancel" value="Cancelar" class="btn btn-danger"> -->
        </div>
    </div>
    </form>
</div>



