@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 0px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Compra</a></li>
                <li class="breadcrumb-item "><a href="/shop">Adopta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
            </ol>
        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center" >
            <div class="col-lg-8">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en tu carrito</h4><br>
                @else
                    <h4>No has agregado productos a tu carrito</h4><br>
                    <a href="/shop" class="btn btn-dark">Continuar comprando</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-4">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Precio: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 50px; margin-right: 10px; ">
                                        <button class="btn btn-secondary btn-sm" title="editar" style="margin-right: 25px; border: none; background-color: #009999;">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm" title="eliminar" style="margin-right: 10px; border: none; background-color: #B22222;">
                                        <i class="fa fa-trash" ></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST" >
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md" style="margin-right: 10px; border: none; background-color: #B22222;">Limpiar carrito</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-4" style="margin-top: 15px">
                    <div class="card" style="border: none;">
                        <ul class="list-group list-group-flush" style="border-color: black ">
                            <li style="background-color: #BA9CCF; border-color: black ;" class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br><a href="/shop" class="btn btn-dark" style="width:150px;">Continuar comprando</a>
                    <a href="/checkout" class="btn btn-success" style="width:150px;">Finalizar compra</a>
                </div>
            @endif
        </div>
        <br><br>
    </div>
@endsection