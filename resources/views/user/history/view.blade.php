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
                        <h4 class="text-@yield('color') font-weight-bold mb-5">
                            Perfil / Tu Billetera / Pago Recibido
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 py-4">
                        <p class="text-@yield('color') mt-3">Referencia:</p>
                        <h4 class="font-weight-bold text-@yield('color')">A458154</h4>
                    </div>
                    <div class="col-5 px-3 py-4">
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <div class="close-windows" onclick="history.back(-1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                    <g id="Grupo_2212" data-name="Grupo 2212" transform="translate(-826 -116)">
                                        <circle id="Elipse_82" data-name="Elipse 82" cx="18" cy="18" r="18" transform="translate(826 116)" fill="#fffe9c" />
                                        <path id="Icon_ionic-md-share" data-name="Icon ionic-md-share" d="M14.928,13.267a2.174,2.174,0,0,0-1.556.6l-5.7-3.3a2.672,2.672,0,0,0,.08-.556,2.671,2.671,0,0,0-.08-.556l5.625-3.258a2.387,2.387,0,1,0-.758-1.748,2.656,2.656,0,0,0,.08.556L6.989,8.261a2.4,2.4,0,0,0-1.636-.636A2.362,2.362,0,0,0,3,10.009a2.4,2.4,0,0,0,4.029,1.748l5.665,3.3a1.993,1.993,0,0,0-.08.516,2.314,2.314,0,1,0,2.314-2.3Z" transform="translate(833.198 124.045)" fill="#151515" />
                                    </g>
                                </svg>
                            </div>
                            <div class="card-body px-5">
                                <p class="text-@yield('color') mb-0">Por: <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                <h4 class="text-@yield('color') font-weight-bold">Recolección de material</h4>
                            </div>
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <div class="card-body px-5">
                                <p class="text-@yield('color') mb-0">Tipo de material: <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                <h4 class="text-@yield('color') font-weight-bold">Botellas de plástico</h4>
                            </div>
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <div class="card-body px-5">
                                <p class="text-@yield('color') mb-0">¿Cúanto? <b class="float-right font-weight-bold text-@yield('color')">$100.000</b></p>
                                <h4 class="text-@yield('color') font-weight-bold">$100.000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 px-3 py-4">
                        <div class="shadow-sm my-3" style="height:67px">
                        </div>
                        <div class="my-3" style="height:67px">
                        </div>
                        <div class="card card-history shadow-sm my-3" style="height:67px">
                            <div class="card-body px-5">
                                <p class="text-@yield('color') mb-0">Fecha:</p>
                                <h5 class="text-@yield('color') font-weight-bold">15 de febrero 2021 - 08:50 AM</h5>
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