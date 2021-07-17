@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    ::-webkit-scrollbar-thumb {
        background: #fffe9c !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')
@include('modules.collects.containers.up')
<h1 class="font-weight-bold text-@yield('color') my-4">
    Educación para <br>
    Mutar Consciencias </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Eventos activos</ins>
</h6>
@include('modules.collects.containers.down')
@endsection