@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? 'Show Mascota' }}
@endsection

@section('content')
<title>ver mascota</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2 class="card-title">Detalles</h2>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('mascotas.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <img src="{{ $mascota->foto }}" class="mascota" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Especie:</strong>
                            {{ $mascota->especie }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mascota->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $mascota->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $mascota->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Vacunada:</strong>
                            {{ $mascota->vacunada }}
                        </div>
                        <div class="form-group">
                            <strong>Desparasitada:</strong>
                            {{ $mascota->desparasitada }}
                        </div>
                        <div class="form-group">
                            <strong>Esterilizada:</strong>
                            {{ $mascota->esterilizada }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $mascota->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $mascota->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
