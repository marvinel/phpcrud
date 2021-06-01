

<h1>{{$modo}}</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
    @foreach( $errors->all() as $error)
        <li>{{$error}}</li> 
    @endforeach
    </ul>
    
    </div>

@endif
<div class="form-group">
<label for="Nombre">Nombre</label>
<input class="form-control" type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>
</div>
<div class="form-group">
<label for="Apellidos">Apellidos</label>
<input class="form-control" type="text" name="Apellidos" value="{{isset($empleado->Apellidos)?$empleado->Apellidos:''}}" id="Apellidos">
<br>
</div>
<div class="form-group">
<label for="Cargo">Cargo</label>
<input class="form-control" type="text" name="Cargo" value="{{isset($empleado->Cargo)?$empleado->Cargo:''}}" id="Cargo">
<br>
</div>
<div class="form-group">
<label for="Foto">Foto</label>

@if(isset($empleado->Foto))
<img  class="img-thumbnail img-fluid" width="100" src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
@endif
<input class="form-control" type="file" name="Foto"  value="" id="Foto">
<br>
</div>
<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>
<br>