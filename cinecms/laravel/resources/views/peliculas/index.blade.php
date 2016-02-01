
@extends('layouts.principal')
	@section('content')
	@foreach($peliculas as $peli)
	  <hr>
	<div class="row">
        <div class='col-md-3'>
<img src="{{URL::to('/').'/'.$peli->imgportada}}" title="{{$peli->imgportada}}" width="150" height="150">        </div>
        <div class='col-md-9'>
            <h3><a href="#">{{$peli->titulo}}</a></h3>
            
            <hr>
            {{$peli->sinopsis}}
              <hr>

             
              <td>{!!link_to_route('pelicula.edit', $title = 'ver', $parameters = $peli->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>


        </div>
</div>
  <hr>

		@endforeach

@endsection