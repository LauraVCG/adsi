@extends('layouts.app')

@section('content')
<title>crear administrador</title>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crear nuevo administrador</h2>
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
    <form action="{{ route('administrador.store') }}" method="POST" >
        @csrf

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono"> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="number" name="id_usuarios" class="form-control" placeholder="id_usuarios">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection