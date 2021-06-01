@extends('layouts.app')

@section('content')
<div class="container">

<div class="alert alert-primary" role="alert">
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
</div>


<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>
<br>
<br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cargo</th>
            <th>Acciones<th>
        </tr>
    </thead>

    <tbody>
    @foreach( $empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>
            <img class="img-thumbnail img-fluid" width="100" src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
            </td>

            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellidos}}</td>
            <td>{{$empleado->Cargo}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/empleado/'.$empleado->id.'/edit')}}">
            Editar
            </a>
             | 

            <form class='d-inline' action="{{ url('/empleado/'.$empleado->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" 
            value="Eliminar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $empleados->links() !!}
</div>
@endsection