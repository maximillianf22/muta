@extends('layout.app')
@section('title', 'Comunidad de Mutantes')
@section('color', 'blue')
@section('active-events', 'active')

@section('css')
<style>
    ::-webkit-scrollbar-thumb {
        background: #9AC9F5 !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')
@include('modules.events.containers.up')
<h1 class="font-weight-bold text-@yield('color') my-4">
    Educación para <br>
    Mutar Conscienciasción </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Contenido</ins>
</h6>
@include('modules.events.containers.down')
@endsection