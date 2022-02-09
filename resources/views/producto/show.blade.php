@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
<title>ver producto</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2 class="card-title">Detalles</h2>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('productos.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                    <div class="form-group">
                            <strong>{{ $producto->nombre }}</strong>
                            
                        </div>
                        <div class="form-group">
                            <img src="{{ $producto->foto }}" alt="Imagen del producto" class="mascota">
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $producto->id_categoria }}
                        </div>
                       
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $producto->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
