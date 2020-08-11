@extends('layouts.app')

@section('content')

@if(Session::has('Mensaje')){{
   Session::get('Mensaje') 
}}
@endif

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Restaurante</th>
      <th scope="col">Mesa/th>
      <th scope="col">Fecha</th>
      <th scope="col">Cliente</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($reserva as $rest)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$rest->reserva}}</td>
      <td>{{$rest->Descripcion}}</td>
      <td>{{$rest->Fecha}}</td>
      <td>{{$rest->Cliente}}</td>
      <td>

      <a href="{{ url('/reserva/'.$rest->id.'/edit') }}" class="btn btn-warning">
      	Editar
      </a>

      	<form method="post" action="{{ url('/reserva/'.$rest->id) }}" style="display:inline">
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
