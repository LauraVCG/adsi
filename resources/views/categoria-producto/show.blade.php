@extends('layouts.app')

@section('template_title')
    {{ $categoriaProducto->name ?? 'Show Categoria Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Categoria Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categoria-productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $categoriaProducto->ID_CATEGORIA }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoriaProducto->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
