@extends("../layouts.planilla")


	@section("cabecera")


	@endsection

	@section("contenido")

	<h1 class="text-center p-3 mb-2 bg-primary text-white rounded">Actualizar Usuarios</h1>

		{!! Form::model($user, ['method' => 'PATCH', 'action'=>['App\Http\Controllers\AdminUsersController@update', $user->id], 'files'=>true]) !!}
    
    <table class="table">
    	<tr>
    		<div class="form-group">
    		<td>
    		    {!! Form::label('name', 'Nombre:', ['class' => 'control-label']); !!}
    		</td>
    		<td>
    			{!! Form::text('name'); !!}
    		</td>	
    	</div>
    	</tr>
    	<tr>
    		<td>
    		    {!! Form::label('email', 'E-mail:'); !!}
    		</td>
    		<td>
    			{!! Form::text('email'); !!}
    		</td>	
    	</tr>
    	<tr>
    		<td>
    		    {!! Form::label('email_verified_at', 'Verificar Email:'); !!}
    		</td>
    		<td>
    			{!! Form::text('email_verified_at'); !!}
    		</td>	
    	</tr>
    	<tr>
    		<td>
    		    {!! Form::label('role_id', 'Rol:'); !!}
    		</td>
    		<td>
    			{!! Form::text('role_id'); !!}
    		</td>
    	</tr>
    	<tr>

    		<td colspan="2">
    			{!! Form::file('foto_id', ['class' => 'btn btn-light']); !!}
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<!--Operador ternario-->
    		<img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'fotoGenerica.jpg'}}" alt="" width="100px">
    		</td>
    		<!--@if($user->foto)
			<td><img src="/images/{{$user->foto->ruta_foto}}" alt="" width="100px"></td>
			@else
			<td><img src="/images/fotoGenerica.jpg" alt="Sin Foto" width="100px"></td>
			@endif-->
    	</tr> 

    	<tr>
    		<td align="center" colspan="2">
    		    	

    		    	<div class="float-left">
    		    	{!! Form::submit('Actualizar!', ['class' => 'btn btn-info m-2']); !!}
    		    	</div>
    		    	{!! Form::close() !!}

					
					{!! Form::model($user, ['method' => 'DELETE', 'action'=>['App\Http\Controllers\AdminUsersController@destroy', $user->id]]) !!}
	
					<div class="float-left">
					{!! Form::submit('Eliminar Registro de Usuario!', ['class' => 'btn btn-danger m-2']); !!}
					</div>

					{!! Form::close() !!}
					
    		</td>
    	</tr>   

	</table>


	@endsection

	@section("pie")

	@endsection