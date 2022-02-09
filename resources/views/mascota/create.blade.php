@extends('layouts.app')

@section('template_title')
    Create Mascota
@endsection

@section('content')
<title>crear mascota</title>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Crear nueva mascota</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('mascotas.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mascotas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('mascota.form')
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
