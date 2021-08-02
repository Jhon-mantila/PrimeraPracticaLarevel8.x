@extends("../layouts.planilla")

	@section("cabecera")


	@endsection


	@section("contenido")

	<h1 class="text-center p-3 mb-2 bg-primary text-white rounded">Administraodres completos index</h1>

	@if(Session::has('usuario_borrado'))

	{{session('usuario_borrado')}}

	@endif
	<table class="table table-resposnive table-hover">
		
		<thead class="thead-dark">
		<tr>
			<th>Id</th>
			<th>Rol</th>
			<th>Foto:</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha Creado</th>
			<th>Fecha Actualizado</th>
		</tr>
		</thead>
		@if ($usuarios)

			@foreach ($usuarios as $user)
		<tr>

			<td>{{$user->id}}</td>
			<td>{{$user->role_id}}</td>
			@if($user->foto)
			<td><img src="/images/{{$user->foto->ruta_foto}}" alt="" width="100px"></td>
			@else
			<td><img src="/images/fotoGenerica.jpg" alt="Sin Foto" width="100px"></td>
			@endif
			<td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
		</tr>

			@endforeach

		@endif	
	</table>
	@endsection

	@section("pie")

	@endsection