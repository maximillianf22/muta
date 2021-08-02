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
                            Historial / Compras
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pt-3 px-4">
                        <div class="bg-dark w-100 my-2 pt-4 px-3" style="min-height: 20vh; border-radius: 2rem;">
                            <div class="media product pl-2">
                                <a class="pull-left img-fluid rounded shadow-sm" href="/historial-compras-detalle" style="background-image: url(./assets/img/shoppings/1.png); background-position: center; background-size: cover; height: 75px; width: 75px"></a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-gray font-weight-bold mb-1">Tenis</h4>
                                    <p class="text-gray" style="line-height:1.2; font-size: 12px;">Tenis de tela hechos con lona reciclada</p>
                                    <h6 class="text-success" style="line-height:1.2; font-size: 14px;">#405879</h6>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="row pl-4 pr-2 mt-2">
                                    <div class="col-12 p-0 text-gray my-auto">
                                        <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Enviado a:</b></h5>
                                    </div>
                                    <div class="col-12 text-gray px-2">
                                        <p class="text-gray m-0 text-left lh-1">Dirección: Avenida 63 N. 17-63</p>
                                        <p class="text-gray m-0 text-left lh-1">Nombre: Catalina Gutiérrez</p>
                                    </div>
                                </div>
                                <div class="row pl-4 pr-2 mt-2">
                                    <div class="col-7 p-0 text-gray my-auto">
                                        <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Código primo usado:</b></h5>
                                    </div>
                                    <div class="col-5 text-gray">
                                        <p class="text-gray ml-2 mb-0 text-right">786G59IOS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-2 mt-2">
                                <div class="col-6 text-gray my-auto">
                                    <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Total Pagado:</b></h5>
                                </div>
                                <div class="col-6 text-gray">
                                    <p class="text-gray ml-2 mb-0 text-right">$95.000</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn mb-3 btn-gray py-1 btn-sm px-5 text-black rounded-lg">Finalizado</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pt-3 px-4">
                        <div class="bg-dark w-100 my-2 pt-4 px-3" style="min-height: 20vh; border-radius: 2rem;">
                            <div class="media product pl-2">
                                <a class="pull-left img-fluid rounded shadow-sm" href="/historial-compras-detalle" style="background-image: url(./assets/img/shoppings/2.png); background-position: center; background-size: cover; height: 75px; width: 75px"></a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-gray font-weight-bold mb-1">Cuadernos</h4>
                                    <p class="text-gray" style="line-height:1.2; font-size: 12px;">Cuaderno anillado beige de cartón reciclado</p>
                                    <h6 class="text-success" style="line-height:1.2; font-size: 14px;">#405879</h6>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="row pl-4 pr-2 mt-2">
                                    <div class="col-12 p-0 text-gray my-auto">
                                        <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Enviado a:</b></h5>
                                    </div>
                                    <div class="col-12 text-gray px-2">
                                        <p class="text-gray m-0 text-left lh-1">Dirección: Avenida 63 N. 17-63</p>
                                        <p class="text-gray m-0 text-left lh-1">Nombre: Catalina Gutiérrez</p>
                                    </div>
                                </div>
                                <div class="row pl-4 pr-2 mt-2">
                                    <div class="col-7 p-0 text-gray my-auto">
                                        <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Código primo usado:</b></h5>
                                    </div>
                                    <div class="col-5 text-gray">
                                        <p class="text-gray ml-2 mb-0 text-right">786G59IOS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-2 mt-2">
                                <div class="col-6 text-gray my-auto">
                                    <h5 class="text-gray mb-0 font-weight-bold ml-2 text-capitalize"><b>Total Pagado:</b></h5>
                                </div>
                                <div class="col-6 text-gray">
                                    <p class="text-gray ml-2 mb-0 text-right">$95.000</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn mb-3 btn-gray py-1 btn-sm px-5 text-black rounded-lg">Finalizado</button>
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