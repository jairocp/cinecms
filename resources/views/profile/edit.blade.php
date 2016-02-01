 

 @extends('layouts.admin')
	@section('content')



	

@include('alerts.request')
{!!Form::model($user,['route'=>['perfil.update',$user],'method'=>'PUT'])!!}
<div class="form-group">
		
	</div>
	<div class="form-group">
		
		{!!Form::label('nombre','Nombre:')!!}
		<input class="form-control" type="text" id="lg" name="name" value="{!!Auth::user()->name!!}">

		{!!Form::label('email','Email:')!!}
		<input class="form-control" type="email" name="email" id="lg"  value="{!!Auth::user()->email!!}">
	</div>


	{!!Form::submit('editar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


	@stop