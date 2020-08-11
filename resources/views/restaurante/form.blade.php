	
	{{ $Modo=='crear' ? 'Crear restaurante':'Modificar restaurante'}}
	<br>

	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{ isset($restaurante->Nombre)?$restaurante->Nombre:'' }}">
	<br>

	<label for="Descripcion">{{'Descripcion'}}</label>
	<input type="text" name="Descripcion"  id="Descripcion" value="{{ isset($restaurante->Descripcion)?$restaurante->Descripcion:'' }}">
	<br>

	<label for="Direccion">{{'Direccion'}}</label>
	<input type="text" name="Direccion" id="Direccion" value="{{ isset($restaurante->Direccion)?$restaurante->Direccion:'' }}">
	<br>

	<label for="Ciudad">{{'Ciudad'}}</label>
	<input type="text" name="Ciudad" id="Ciudad" value="{{ isset($restaurante->Ciudad)?$restaurante->Ciudad:'' }}">
	<br>

	<label for="url">{{'url'}}</label>

	@if(isset($restaurante->url))
		<img src="{{ asset('storage').'/'.$restaurante->url}}" width="200px"> 
	@endif
	<input type="file" name="url" id="url" value="">
	<br>

	<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
	<a href="{{ url('restaurante') }}">
  		Regresar
	</a>