@extends('layouts.app')

@section('template_title')
    Update Cliente
@endsection

@section('content')
<title>editar cliente</title>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Editar cliente</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                        </div>
                    </div>
                </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
