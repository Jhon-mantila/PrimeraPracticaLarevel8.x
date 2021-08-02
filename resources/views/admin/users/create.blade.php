@extends("../layouts.planilla")	

@section("cabecera")

@endsection

@section("contenido")

	<h1 class="text-center p-3 mb-2 bg-primary text-white rounded">Crear Usuarios</h1>

	{!! Form::open(['method' => 'post', 'action'=>'App\Http\Controllers\AdminUsersController@store', 'files'=>true]) !!}
    
    <table border="1" class="table border border-warning rounded">
    	<tr class="border border-warning">
    		<td class="border-warning">
    		    {!! Form::label('name', 'Nombre:'); !!}
    		</td>
    		<td class="border-warning">
    			{!! Form::text('name'); !!}
    		</td>	
    	</tr>
    	<tr>
    		<td>
    		    {!! Form::label('password', 'Password:'); !!}
    		</td>
    		<td>
    			{!! Form::password('password'); !!}
    		</td>	
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
    		<td>
    		    {!! Form::label('foto_id', 'Foto:'); !!}
    		</td>
    		<td>
    			{!! Form::file('foto_id'); !!}
    		</td>
    	</tr> 

    	<tr>
    		<td>
    		    {!! Form::submit('Crear!', ['class' => 'btn btn-info']); !!}
    		</td>
    		<td>
    			{!! Form::reset('Limpiar!', ['class' => 'btn btn-warning']); !!}
    		</td>
    	</tr>   

	</table>
	{!! Form::close() !!}

	@endsection

	@section("pie")

	@endsection