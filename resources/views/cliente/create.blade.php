@extends('layouts.app')

@section('template_title')
    Create Cliente
@endsection

@section('content')
<title>crear cliente</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Crear nuevo cliente</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                            </div>  
                        </div>
                        <br>    
                        <br>    
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
