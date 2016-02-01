@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'reproductor.store', 'method'=>'POST'])!!}

@include('alerts.request')
<div class="form-group">
		{!!Form::label('codigo','Codigo html:')!!}
		{!!Form::text('codigohtml',null,['class'=>'form-control','placeholder'=>'Ingresa link dea pelicula'])!!}
	</div>
	
	<p class="text-left">Seleccione una pelicula</p>

<div class="form-group">
	 <select id="rangos" name="rangos">
	 
@foreach($peliculas as $peli)
 <option value="{{$peli -> id}}">{{$peli -> titulo}}</option>
@endforeach
 <select />
</div>
	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@endsection