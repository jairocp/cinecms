
@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST'])!!}
<div class="form-group">
		{!!Form::label('Titulo','Titulo:')!!}
		{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('sinopsis','Sinopsis:')!!}
		{!!Form::text('sinopsis',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
<div class="form-group">
		{!!Form::label('img portada','img portada:')!!}
		{!!Form::text('imgportada',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
	 <select id="generos" name="generos">
	 
@foreach($generos as $gen)
 <option value="{{$gen -> id}}">{{$gen -> descripcion}}</option>
@endforeach
 <select />
</div>
	

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


	@endsection