@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
<title>ver usuario</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2>Detalles</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Atrás"><i class="fa fa-backward "></i> </a>
                            
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $usuario->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $usuario->numero_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
