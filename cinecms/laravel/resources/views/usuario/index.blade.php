@extends('layouts.admin')

@section('content')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<table class="table">
		<thead>
			<th>id</th>
			<th>name</th>
			<th>email</th>
				<th>rango</th>
		</thead>
	@foreach($usuarios as $user)
		<tbody>

		
	<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				

				@foreach($rangos as $rango)
	@if($rango->id==$user->id_rango)
	<td>{{$rango->descripcion}}</td>
	@endif

	@endforeach
				
			</tbody>
		@endforeach
	</table>
	{!! $usuarios->render() !!}

@endsection