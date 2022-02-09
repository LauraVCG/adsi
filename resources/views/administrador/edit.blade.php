@extends('layouts.app')

@section('content')
<title>editar administrador</title>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar administrador</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('administrador.index') }}" title="Atrás"> <i class="fa fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('administrador.update', $administrador->id_administrador) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="number" name="telefono" value="{{ $administrador->telefono }}" class="form-control" placeholder="Telefono">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="number" name="id_usuarios" class="form-control" placeholder="id_usuarios"
                        value="{{ $administrador->id_usuarios }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>
@endsection