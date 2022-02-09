@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 0px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Compra</li>
                <li class="breadcrumb-item "><a href="/shop">Adopta</a></li>
                <li class="breadcrumb-item"><a href="/cart">Carrito</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">

  
  
                <div class="row" style=" justify-content: center; font-family: cursive;">
                    <div class="col-lg-7" >
                        <h4 >Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row" >
                    @foreach($products as $pro)
                        <div class="col-lg-4">
                            <a href="{{ route('productos.show',$pro->id) }}">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="{{ $pro->foto }}"
                                     class="card-img-top mx-auto"
                                     style="height: 135px; width: 135px;display: block;"
                                     alt="{{ $pro->nombre }}"
                                ></a>
                                <div class="card-body">
                                    <a href="{{ route('productos.show',$pro->id) }}"><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>${{ $pro->precio }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->foto }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->descripcion }}" id="descripcion" name="descripcion">
                                        <input type="hidden" value="{{ $pro->id_categoria }}" id="id_categoria" name="id_categoria">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row" style="margin-left:50% margin-right:50%; ">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart" >
                                                    <i class="fa fa-cart-plus"></i> +
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