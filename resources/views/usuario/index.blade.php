@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@section('content')
<title>usuarios</title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2>usuarios</h2>

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
					                <i class="fa fa-plus-circle"></i></a>
                                </a> 
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellido</th>
										<th>Numero Documento</th>
										<th>Correo</th>
										<th>Contraseña</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuario->nombres }}</td>
											<td>{{ $usuario->apellido }}</td>
											<td>{{ $usuario->numero_documento }}</td>
											<td>{{ $usuario->correo }}</td>
											<td>{{ $usuario->contraseña }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                                    <a href="{{ route('usuarios.show',$usuario->id) }}">
                                                        <i class="fa fa-eye text-success fa-lg"></i> </a>
                                                    <a href="{{ route('usuarios.edit',$usuario->id) }}">
                                                        <i class="fa fa-edit fa-lg"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="borrar" style="border: none; background-color: transparent;">
                                                        <i class="fa fa-trash fa-lg text-danger"></i> 
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
