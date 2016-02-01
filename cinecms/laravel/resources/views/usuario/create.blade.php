@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

@include('alerts.request')
<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>

	<p class="text-left">Seleccione un rango</p>

<div class="form-group">
	 <select id="rangos" name="rangos">
	 
@foreach($rangos as $rango)
 <option value="{{$rango -> id}}">{{$rango -> descripcion}}</option>
@endforeach
 <select />
</div>
	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@stop