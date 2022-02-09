@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
<title>productos</title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2>Productos</h2>

                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('productos.create') }}" title="Crear producto">
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
                                        
										<th>Foto</th>
										<th>Categoria</th>
										<th>Nombre</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td><img src="{{ $producto->foto }}" class="foto-mascota" alt=""></td>
											<td>{{ $producto->id_categoria }}</td>
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->cantidad }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a title="ver" href="{{ route('productos.show',$producto->id) }}">
                                                        <i class="fa fa-eye text-success fa-lg"></i> </a>
                                                    <a title="editar" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
