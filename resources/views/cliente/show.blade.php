@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
<title>ver cliente</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2 class="card-title">Detalles</h2>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuarios:</strong>
                            {{ $cliente->id_usuarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
