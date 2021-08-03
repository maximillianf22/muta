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
<div class="row" style="height: 75vh;">
    @include('components.others.side-nav')
    <div class="col-lg-10 col-md-12 col-12 pl-0">
        <div class="close-windows-profile" onclick="history.back(-1)">
            <svg xmlns="http://www.w3.org/2000/svg" width="37.477" height="37.477" viewBox="0 0 37.477 37.477">
                <g id="Grupo_2140" data-name="Grupo 2140" transform="translate(-622.132 -563.13)">
                    <circle id="Elipse_6" data-name="Elipse 6" class="text-@yield('color')" cx="13.5" cy="13.5" r="13.5" transform="translate(627.271 569.271)" fill="#cda06f" />
                    <text id="_" data-name="+" transform="translate(634.859 587.879) rotate(45)" fill="#272727" font-size="31" font-family="Helvetica-Light, Helvetica" font-weight="300">
                        <tspan x="-10.23" y="0">+</tspan>
                    </text>
                </g>
            </svg>
        </div>
        <img src="assets/img/profile.png" alt="Raised circle image" class="img-fluid rounded-circle shadow img-profile mb-5">
        <div class="card card-transparent rounded-xl" style="min-height: 68vh; max-height: 68vh; overflow-y: auto">
            <div class="card-body px-5 pt-5">
                <div class="row">
                    <div class="col-12 px-4">
                        <h4 class="text-@yield('color') font-weight-bold mb-5">
                            Perfil / Tu Carrito
                        </h4>
                        <div class="row mb-3">
                            <div class="col-lg-2 col-md-3 col-12">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="#" data-toggle="modal" data-target="#drawModal">Retirar</a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="mt-0" style="height:12vh">
                                    <div class="card-body px-5">
                                        <h3 class="h1 display-2 text-@yield('color') text-center font-weight-bold mb-0">$130.000</h3>
                                        <p class="text-@yield('color') text-center">Saldo disponible</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-12">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/historial">Historial</a>
                            </div>
                        </div>
                        <h4 class="text-@yield('color') font-weight-bold mb-2">
                            Opciones
                        </h4>
                        <div class="row mt-0">
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/perfil-detalle">
                                    <i class="fa fa-user fa-lg mr-2"></i> Informacion Personal
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/historial-compras">
                                    <i class="fa fa-history fa-lg mr-2"></i> Historial de compras
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="#">
                                    <i class="fa fa-list fa-lg mr-2"></i> Archivos
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/estadisticas">
                                    <i class="fa fa-chart-bar fa-lg mr-2"></i> Estadisticas
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/chat">
                                    <i class="fa fa-life-ring fa-lg mr-2"></i> Chat con soporte
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 px-xl-4 px-lg-3 px-md-1 my-2">
                                <a class="btn btn-@yield('color') btn-round text-dark mt-3 btn-block px-1" href="/eventos-crear">
                                    <i class="fa fa-users fa-lg mr-2"></i> Solicitar actividad
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@include('components.modals.modal-draw')
@endsection