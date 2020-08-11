@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje')){{
   Session::get('Mensaje') 
}}
@endif

<a href="{{ url('restaurante/crear') }}" class="btn btn-success">
  Agregar restaurante
</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Url</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($restaurante as $rest)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$rest->Nombre}}</td>
      <td>{{$rest->Descripcion}}</td>
      <td>{{$rest->Direccion}}</td>
      <td>{{$rest->Ciudad}}</td>
      <td><img src="{{ asset('storage').'/'.$rest->url}}" width="200px" class="img-thumbnail img-fluid">  </td>
      <td>

      <a href="{{ url('/restaurante/'.$rest->id.'/edit') }}" class="btn btn-warning">
      	Editar
      </a>

      	<form method="post" action="{{ url('/restaurante/'.$rest->id) }}" style="display:inline">
      		{{csrf_field()}}
      		{{method_field('DELETE')}}

      		<button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">
      			Borrar
      		</button>
      	</form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection