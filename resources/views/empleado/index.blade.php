@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
<title>empleado</title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2 id="card_title">
                                {{ __('Empleados') }}
                            </h2>

                             <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                <i class="fa fa-plus-circle"></i></a>
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cargo</th>
										<th>Id Usuarios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleado->cargo }}</td>
											<td>{{ $empleado->id_usuarios }}</td>


                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                                                    <a title="ver" href="{{ route('empleados.show',$empleado->id) }}">
                                                        <i class="fa fa-eye text-success fa-lg"></i> </a>
                                                    <a title="editar" href="{{ route('empleados.edit',$empleado->id) }}">
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
                {!! $empleados->links() !!}
            </div>
        </div>
    </div>
@endsection
