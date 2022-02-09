@extends('layouts.app')

@section('template_title')
    inicioAdmin
@endsection

@section('content')
<title>Inicio</title>
        <ul>
        
            <li>
                <a href="{{route('empleados.index')}}">
                    <button type ="submit" class =" btn btn-primary mb-3" > Personal.</button>
                </a>
            </li>
            <li>
                <a href="{{route('productos.index')}}">
                    <button type ="submit" class =" btn btn-primary mb-3"> Productos.</button>
                </a>
            </li>
            <li>
                <a href="{{route('mascotas.index')}}">
                    <button type ="submit" class =" btn btn-primary mb-3"> Mascotas.</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <button type ="submit" class =" btn btn-primary mb-3"> Adopciones.</button>
                </a>
            </li>
            <li>
                <a href="#">
                    <button type ="submit" class =" btn btn-primary mb-3"> Pedidos.</button>
                </a>
            </li>
            <li>
                <a href="{{ route('clientes.index') }}">
                    <button type ="submit" class =" btn btn-primary mb-3"> Clientes.</button>
                </a>
            </li>
        </ul>   
@endsection