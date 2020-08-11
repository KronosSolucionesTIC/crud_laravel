@extends('layouts.app')

@section('content')
<div class="container">
	
<form action="{{Url('/reserva')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	
	@include('reserva.form',['Modo'=>'crear']);

</form>

</div>
@endsection