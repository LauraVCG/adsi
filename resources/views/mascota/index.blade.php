@extends('layouts.app')

@section('template_title')
    Mascotas
@endsection

@section('content')
<title>mascotas</title>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2 id="card_title">
                                {{ __('Mascotas') }}
                            </h2>

                             <div class="float-right">
                                <a href="{{ route('mascotas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left" title="Crear mascota">
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
										<th>Especie</th>
										<th>Nombre</th>
										<th>Edad</th>
										<th>Sexo</th>
										<th>Vacunada</th>
										<th>Desparasitada</th>
										<th>Esterilizada</th>
										<th>Descripcion</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mascotas as $mascota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td><img src="{{ $mascota->foto }}" alt="" class="foto-mascota"></td>
											<td>{{ $mascota->especie }}</td>
											<td>{{ $mascota->nombre }}</td>
											<td>{{ $mascota->edad }}</td>
											<td>{{ $mascota->sexo }}</td>
											<td>{{ $mascota->vacunada }}</td>
											<td>{{ $mascota->desparasitada }}</td>
											<td>{{ $mascota->esterilizada }}</td>
											<td>{{ $mascota->descripcion }}</td>
											<td>{{ $mascota->estado }}</td>

                                            <td>
                                                <form action="{{ route('mascotas.destroy',$mascota->id) }}" method="POST">
                                                    <a href="{{ route('mascotas.show',$mascota->id) }}">
                                                        <i class="fa fa-eye text-success fa-lg"></i> </a>
                                                    <a  href="{{ route('mascotas.edit',$mascota->id) }}">
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
                {!! $mascotas->links() !!}
            </div>
        </div>
    </div>
@endsection
