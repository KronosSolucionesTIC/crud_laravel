@extends('layouts.app')

@section('content')
<div class="container">
	
<form action="{{Url('/restaurante')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	
	@include('restaurante.form',['Modo'=>'crear']);

</form>

</div>
@endsection