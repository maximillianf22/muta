@extends('layout.app')
@section('title', 'Compra Mutaciones')
@section('color', 'danger')
@section('active-shoppings', 'active')

@section('css')
<style>
    ::-webkit-scrollbar-thumb {
        background: #FFA48E !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')
@include('modules.shoppings.containers.categories.up')
<h1 class="font-weight-bold text-@yield('color') my-4">
    Compra los objetos<br>
    que Mutamos </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Categorias y Tenis</ins>
</h6>
@include('modules.shoppings.containers.categories.down')
@endsection