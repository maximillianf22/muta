@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    ::-webkit-input-placeholder {
        color: #fffe9c !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #fffe9c !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #fffe9c !important;
    }

    :-ms-input-placeholder {
        color: #fffe9c !important;
    }

    ::-webkit-scrollbar-thumb {
        background: #fffe9c !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }

    .form-group.no-border .input-group-append .input-group-text,
    .form-group.no-border .input-group-prepend .input-group-text,
    .input-group.no-border .input-group-append .input-group-text,
    .input-group.no-border .input-group-prepend .input-group-text {
        background-color: #2c2c2c;
        border: none;
    }

    .form-group.no-border .form-control,
    .form-group.no-border .form-control+.input-group-append .input-group-text,
    .form-group.no-border .form-control+.input-group-prepend .input-group-text,
    .input-group.no-border .form-control,
    .input-group.no-border .form-control+.input-group-append .input-group-text,
    .input-group.no-border .form-control+.input-group-prepend .input-group-text {
        background-color: #2c2c2c;
        border: medium none;
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
                        <h4 class="text-@yield('color') font-weight-bold mb-4">
                            Historial
                        </h4>
                    </div>
                    <div class="col-8">
                        <div class="input-group bg-input rounded-lg no-border">
                            <div class="input-group-prepend pr-4">
                                <span class="input-group-text"><i class="fa fa-search text-success fa-lg"></i></span>
                            </div>
                            <input type="text" class="form-control bg-input form-control-lg text-success" placeholder="Buscar">
                        </div>
                    </div>
                    <div class="col-4 my-auto text-center">
                        <a href="#"><u class="text-gray">Ordenar por:</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 pt-3 px-5">
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <a href="/historial-detalle">
                                <div class="card-body px-5">
                                    <p class="text-@yield('color') mb-0">Consigna por: <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                    <h4 class="text-@yield('color') font-weight-bold">Papel</h4>
                                </div>
                            </a>
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <a href="/historial-detalle">
                                <div class="card-body px-5">
                                    <p class="text-@yield('color') mb-0">Consigna por: <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                    <h4 class="text-@yield('color') font-weight-bold">Papel</h4>
                                </div>
                            </a>
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <a href="/historial-detalle">
                                <div class="card-body px-5">
                                    <p class="text-@yield('color') mb-0">Consigna por: <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                    <h4 class="text-@yield('color') font-weight-bold">Papel</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 pt-3 px-5">
                        <div class="shadow-sm my-3" style="height:67px">
                        </div>
                        <div class="my-3" style="height:67px">
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <a href="/historial-detalle">
                                <div class="card-body px-5">
                                    <p class="text-@yield('color') mb-0">Compra en: <b class="float-right font-weight-bold text-@yield('color')">$5.000</b></p>
                                    <h4 class="text-@yield('color') font-weight-bold">Marketplace</h4>
                                </div>
                            </a>
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