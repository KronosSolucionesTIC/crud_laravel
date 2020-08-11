@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ Url('/restaurante/'.$restaurante->id) }}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}


	@include('restaurante.form',['Modo'=>'editar']);

</form>

</div>
@endsection