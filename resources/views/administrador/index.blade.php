@extends('layouts.app')

@section('content')
<title>administrador</title>
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Administrador</h2>
			</div>	
			<div class="pull-right">
				<a class="btn btn-success" href="{{route('administrador.create') }}" title="Crear administrador">
					<i class="fa fa-plus-circle"></i></a>
			</div>		
		</div>	
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
	@endif

	<table class="table table-bordered table-responsive-lg">
		<tr>
			<th>id_administrador</th>
			<th>TELEFONO</th>
			<th>ID_USUARIOS</th>
			<th width="280px">Action</th>
		</tr>
		@foreach ($admi as $administrador)
			<tr>
				<td>{{$administrador->id_administrador}}</td>
				<td>{{$administrador->TELEFONO}}</td>
				<td>{{$administrador->ID_USUARIOS}}</td>
				<td>
					<form action="{{ route('administrador.destroy', $administrador->id_administrador)}}" method="post">
						<a href="{{route('administrador.show', $administrador->id_administrador)}}" title="ver">
							<i class="fa fa-eye text-success fa-lg"></i>
						</a>
						<a href="{{ route('administrador.edit', $administrador->id_administrador)}}" title="editar">
							<i class="fa fa-edit fa-lg"></i>
						</a>
							
						@csrf

                        @method('DELETE')
						<button type="submit" title="borrar" style="border: none; background-color: transparent;">
							<i class="fa fa-trash fa-lg text-danger"></i>
							
						</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
	{!!$admi->links()!!}

@endsection