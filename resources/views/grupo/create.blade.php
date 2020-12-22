

<form action="{{route('grupox.store')}}"class="form-horizonta" method="POST">
{{ csrf_field() }}


<div class="container">
    <div class="row">
        <h3>Novo </h3></br></br></br>
        </br></br></br>
   <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
   </br></br>
    
    
    </br></br>
    <div>
        <label for="grupo">grupo</label>
        <input type="text" id="grupo" name="grupo">
    </div>
    </br></br>


    </br></br>
        <div class="form-group">
            <input type="submit" name="save" value="Salvar" class="btn btn-primary">
         <!--   <input type="reset" name="cancel" value="Cancelar" class="btn btn-danger"> -->
        </div>
    </div>
    </form>
</div>



