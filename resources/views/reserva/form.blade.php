	
	{{ $Modo=='crear' ? 'Crear reserva':'Modificar reserva'}}
	<br>

	<label for="Restaurante">{{'Restaurante'}}</label>

	<select name="Restaurante_id"  id="Restaurante_id">

	@foreach ($restaurantes as $rest) 
    	<option value="{{$rest->id}}">{{$rest->Nombre}}</option>
	@endforeach
	</select>
	<br>

	<label for="Mesa">{{'Mesa'}}</label>
	<input type="number" min="1" max="15" name="Mesa"  id="Mesa" value="{{ isset($reserva->Mesa)?$reserva->Mesa:'' }}">
	<br>

	<label for="Fecha">{{'Fecha'}}</label>
	<input type="date" name="Fecha" id="Fecha" value="{{ isset($reserva->Fecha)?$reserva->Fecha:'' }}">
	<br>

	<label for="Cliente">{{'Cliente'}}</label>
	<input type="text" name="Cliente" id="Cliente" value="{{ isset($reserva->Cliente)?$reserva->Cliente:'' }}">
	<br>

	<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
	<a href="{{ url('reserva') }}">
  		Regresar
	</a>