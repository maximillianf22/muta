@extends('layout.app')
@section('title', 'Comunidad de Mutantes')
@section('color', 'primary')
@section('active-comunities', 'active')

@section('css')
<style>
    ::-webkit-scrollbar-thumb {
        background: #C495FD !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')
@include('modules.comunities.containers.up')
<h1 class="font-weight-bold text-@yield('color') my-4">
    La comunidad que <br>
    guía tu Mutación </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Contenido</ins>
</h6>
@include('modules.comunities.containers.down')
@endsection