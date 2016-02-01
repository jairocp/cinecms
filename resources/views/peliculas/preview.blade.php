
@extends('layouts.principal')
	@section('content')
	


{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST'])!!}



 <div class="panel panel-success">
  <div class="panel-heading">{{$pelicula->titulo}}</div>
  <div class="panel-body">
{{$pelicula->sinopsis}}
  </div>
</div>

<a href="/pelicula/{{$pelicula->id}}/edit" class="btn btn-default" role="button">reproductor 1 prueba recordar cambiar id </a>
@foreach ($reproductor as $rep)
<div>

<iframe name="nombre" src="{{$rep->codigohtml}}" width="650" height="380" frameborder="0"></iframe>



@endforeach

</div>
  {!!Form::close()!!}
  @endsection