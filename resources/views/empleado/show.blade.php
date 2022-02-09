@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
<title>ver empleado</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles</span>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('empleados.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $empleado->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuarios:</strong>
                            {{ $empleado->id_usuarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
