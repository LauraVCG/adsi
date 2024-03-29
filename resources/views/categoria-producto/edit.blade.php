@extends('layouts.app')

@section('template_title')
    Update Categoria Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Categoria Producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoria-productos.update', $categoriaProducto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categoria-producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
