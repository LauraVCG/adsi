@extends('layouts.app')

@section('template_title')
    Adoptar
@endsection

@section('content')
<title>Adopta</title>
<div class="container" style="margin-top: 0px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Compra</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adopta</li>
                <li class="breadcrumb-item"><a href="/cart">Carrito</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">

  
  
                <div class="row" style=" justify-content: center; font-family: cursive;">
                    <div class="col-lg-7" >
                        <h4 >Mascotas</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($mascotas as $mas)
                    <div class="col-lg-4">
                            <a href="{{ route('productos.show',$mas->id) }}">
                            <div class="card" style="margin-bottom: 20px; height: 350px;">
                                <img src="{{ $mas->foto }}"
                                     class="card-img-top mx-auto"
                                     style="height: 135px; width: 135px;display: block;"
                                     alt="{{ $mas->nombre }}"
                                ></a>
                                <?php
                                    $cadena = $mas->descripcion;
                                    $longitud = strlen($cadena);
                                    if ( $longitud > 50) {
                                        $subcadena = substr ( $cadena, 0, 50);
                                        $cadena = $subcadena . "...";
                                    }
                                ?>
                                <div class="card-body" >
                                    <a href="{{ route('productos.show',$mas->id) }}"><h6 class="card-title">{{ $mas->nombre }}</h6></a>
                                    <p style="height: 70px;">{{$cadena}}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $mas->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $mas->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $mas->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $mas->foto }}" id="img" name="img">
                                        <input type="hidden" value="{{ $mas->descripcion }}" id="descripcion" name="descripcion">
                                        <input type="hidden" value="{{ $mas->id_categoria }}" id="id_categoria" name="id_categoria">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row" style="margin-left:50% margin-right:50%; ">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart" >
                                                    <i class="fa fa-heart"></i> +
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        
@endsection