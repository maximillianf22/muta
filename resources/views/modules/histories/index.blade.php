@extends('layout.app')
@section('title', 'Comunidad de Mutantes')
@section('color', 'warning')
@section('active-histories', 'active')

@section('css')
<style>
    ::-webkit-scrollbar-thumb {
        background: #CDA06F !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
@endsection

@section('content')
@include('modules.histories.containers.up')
<h1 class="font-weight-bold text-@yield('color') my-4">
    Testimonios <br>
    de Mutación </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Noticias y Reviews</ins>
</h6>
@include('modules.histories.containers.down')
@endsection