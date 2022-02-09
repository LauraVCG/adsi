@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
<title>cliente</title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2 id="card_title">
                                {{ __('Clientes') }}
                            </h2>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                <i class="fa fa-plus-circle"></i>
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Telefono</th>
										<th>Direccion</th>
										<th>Id Usuarios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->telefono }}</td>
											<td>{{ $cliente->direccion }}</td>
											<td>{{ $cliente->id_usuarios }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a title="ver" href="{{ route('clientes.show',$cliente->id) }}">
                                                        <i class="fa fa-eye text-success fa-lg"></i></a>
                                                    <a title="editar" href="{{ route('clientes.edit',$cliente->id) }}">
                                                        <i class="fa fa-edit fa-lg"></i></a>
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
