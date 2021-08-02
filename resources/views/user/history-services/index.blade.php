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
    <div class="col-10 pl-0">
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
                            Historial / Detalles
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <h4 class="text-@yield('color') font-weight-bold m-0 col-6">
                                Activos
                            </h4>
                            <a class="text-gray text-right m-0 col-6">
                                <u>Ordenar por:</u>
                            </a>
                        </div>
                        <div class="bg-dark w-100 my-4" style="min-height: 1.7vh;max-height: 10.7vh;border-radius: 1rem;">
                            <div class="media product" style="padding-top: 1vh;padding-bottom: 1vh;padding-left: 1.2vh;">
                                <a class="pull-left img-fluid rounded-circle shadow-sm " href="/historial-compras-detalle" style="background-image: url(./assets/img/support-1.png);background-position: center;background-size: cover;height: 60px;width: 60px;"></a>
                                <div class="media-body ml-2 my-auto p-0">
                                    <p class="text-gray lead" style="font-size: 12px;">
                                        Nombre: Camilo <br>
                                        Fecha: 02/02/2021 <br>
                                        Ubicación: Soledad
                                    </p>
                                </div>
                                <div class="m-0 pull-right py-1 pr-3 text-center">
                                    <p class="text-gray m-0 lh-1">Estado</p>
                                    <a href="/historial-compras-detalle" class="btn mt-3 btn-blue py-0 btn-sm px-2 text-black rounded-lg my-1">Pendiente</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark w-100 my-4" style="min-height: 1.7vh;max-height: 10.7vh;border-radius: 1rem;">
                            <div class="media product" style="padding-top: 1vh;padding-bottom: 1vh;padding-left: 1.2vh;">
                                <a class="pull-left img-fluid rounded-circle shadow-sm " href="/historial-compras-detalle" style="background-image: url(./assets/img/support-2.png);background-position: center;background-size: cover;height: 60px;width: 60px;"></a>
                                <div class="media-body ml-2 my-auto p-0">
                                    <p class="text-gray lead" style="font-size: 12px;">
                                        Nombre: Andrea <br>
                                        Fecha: 02/02/2021 <br>
                                        Ubicación: Soledad
                                    </p>
                                </div>
                                <div class="m-0 pull-right py-1 pr-3 text-center">
                                    <p class="text-gray m-0 lh-1">Estado</p>
                                    <a href="/historial-compras-detalle" class="btn mt-3 btn-primary py-0 btn-sm px-2 text-black rounded-lg my-1">Proceso</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <h4 class="text-danger font-weight-bold m-0 col-6">
                                Inactivos
                            </h4>
                            <a class="text-gray text-right m-0 col-6">
                                <u>Ordenar por:</u>
                            </a>
                        </div>
                        <div class="bg-dark w-100 my-4" style="min-height: 1.7vh;max-height: 10.7vh;border-radius: 1rem;">
                            <div class="media product" style="padding-top: 1vh;padding-bottom: 1vh;padding-left: 1.2vh;">
                                <a class="pull-left img-fluid rounded-circle shadow-sm " href="/historial-compras-detalle" style="background-image: url(./assets/img/support.png);background-position: center;background-size: cover;height: 60px;width: 60px;"></a>
                                <div class="media-body ml-2 my-auto p-0">
                                    <p class="text-gray lead" style="font-size: 12px;">
                                        Nombre: Jhon <br>
                                        Fecha: 02/02/2021 <br>
                                        Ubicación: Soledad
                                    </p>
                                </div>
                                <div class="m-0 pull-right py-1 pr-3 text-center">
                                    <p class="text-gray m-0 lh-1">Estado</p>
                                    <a href="/historial-compras-detalle" class="btn mt-3 btn-success py-0 btn-sm px-2 text-black rounded-lg my-1">Finalizado</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark w-100 my-4" style="min-height: 1.7vh;max-height: 10.7vh;border-radius: 1rem;">
                            <div class="media product" style="padding-top: 1vh;padding-bottom: 1vh;padding-left: 1.2vh;">
                                <a class="pull-left img-fluid rounded-circle shadow-sm " href="/historial-compras-detalle" style="background-image: url(./assets/img/support-3.png);background-position: center;background-size: cover;height: 60px;width: 60px;"></a>
                                <div class="media-body ml-2 my-auto p-0">
                                    <p class="text-gray lead" style="font-size: 12px;">
                                        Nombre: Jaime <br>
                                        Fecha: 02/02/2021 <br>
                                        Ubicación: Soledad
                                    </p>
                                </div>
                                <div class="m-0 pull-right py-1 pr-3 text-center">
                                    <p class="text-gray m-0 lh-1">Estado</p>
                                    <a href="/historial-compras-detalle" class="btn mt-3 btn-danger py-0 btn-sm px-2 text-black rounded-lg my-1">Cancelado</a>
                                </div>
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