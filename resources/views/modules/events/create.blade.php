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

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }

    ::-webkit-input-placeholder {
        color: rgb(155 201 245) !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: rgb(155 201 245) !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: rgb(155 201 245) !important;
    }

    :-ms-input-placeholder {
        color: rgb(155 201 245) !important;
    }
</style>
@endsection

@section('content')
<div class=" mx-auto pt-4">
    <div class="row m-0 w-100">
        <div class="col-12">
            <div class="close-windows" onclick="history.back(-1)">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.477" height="37.477" viewBox="0 0 37.477 37.477">
                    <g id="Grupo_2140" data-name="Grupo 2140" transform="translate(-622.132 -563.13)">
                        <circle id="Elipse_6" data-name="Elipse 6" class="text-@yield('color')" cx="13.5" cy="13.5" r="13.5" transform="translate(627.271 569.271)" fill="#cda06f" />
                        <text id="_" data-name="+" transform="translate(634.859 587.879) rotate(45)" fill="#272727" font-size="31" font-family="Helvetica-Light, Helvetica" font-weight="300">
                            <tspan x="-10.23" y="0">+</tspan>
                        </text>
                    </g>
                </svg>
            </div>
            <div class="w-100">
                <a href="#" class="showLoading">
                    <div class="card card-blog card-background categories mx-auto rounded-lg active hover m-0" data-animation="zooming">
                        <div class="full-background" style="background-image: url('./assets/img/events/1.png')"></div>
                        <div class="card-body py-5 px-5" style=" padding-left: 10% !important; padding-right: 10% !important; overflow-y:auto;">
                            <div class="content-top text-left">
                                <div class="row">
                                    <div class="card-title text-@yield('color') font-weight-bold col-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="54.954" height="54.958" viewBox="0 0 54.954 54.958">
                                            <path id="Trazado_2775" data-name="Trazado 2775" d="M405.81,840.4c-1.189-10.943-3.752-34.55-4.839-44.553-.286-2.634-1.371-4.63-4.008-4.63h-.732a3.376,3.376,0,0,0-3.376,3.375v5.189a2.572,2.572,0,0,1-2.571,2.573H366.442a2.572,2.572,0,0,1-2.57-2.573v-5.189a3.375,3.375,0,0,0-3.375-3.375h-.617c-2.631,0-3.714,1.988-4.006,4.617-1.111,9.994-3.736,33.611-4.955,44.571a5.213,5.213,0,0,0,1.285,4.041,5.152,5.152,0,0,0,3.852,1.73l44.62-.018a5.154,5.154,0,0,0,3.845-1.727A5.211,5.211,0,0,0,405.81,840.4Zm-38.394-17.99a11.007,11.007,0,0,1,11.241-9.09l-.971-1.457a1.194,1.194,0,0,1,.278-1.6,1.283,1.283,0,0,1,1.665.277l2.5,3.608a1.134,1.134,0,0,1-.347,1.6l-3.539,2.5a1.182,1.182,0,0,1-1.6-.278,1.212,1.212,0,0,1,.278-1.665l1.041-.694a8.724,8.724,0,0,0-8.258,7.217,1.244,1.244,0,0,1-1.388.971A1.179,1.179,0,0,1,367.416,822.408ZM381.78,835.8a11.123,11.123,0,0,1-13.532-5.2l-.763,1.6a1.164,1.164,0,1,1-2.082-1.041l1.874-3.886a1.166,1.166,0,0,1,1.6-.555l3.886,1.8a1.235,1.235,0,0,1,.555,1.527,1.166,1.166,0,0,1-1.6.555l-1.11-.555a8.78,8.78,0,0,0,10.409,3.608,1.1,1.1,0,0,1,1.457.625A1.182,1.182,0,0,1,381.78,835.8Zm8.6-2.637-4.371.347a1.13,1.13,0,0,1-1.249-1.11l-.347-4.233a1.084,1.084,0,0,1,1.041-1.249,1.159,1.159,0,0,1,1.249,1.041l.139,1.249a8.778,8.778,0,0,0-2.151-10.756,1.2,1.2,0,0,1-.139-1.665,1.115,1.115,0,0,1,1.6-.139,11.04,11.04,0,0,1,2.29,14.364l1.735-.139a1.15,1.15,0,1,1,.208,2.29Z" transform="translate(-350.886 -791.215)" fill="#9ac9f5" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="col-9 text-@yield('color') h1 my-auto display-2">
                                        Solcitud de evento MUTA
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Nombre" class="form-control forms-blue">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="NIT o CC" class="form-control forms-blue">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Municipio" class="form-control forms-blue">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Telefono Contacto" class="form-control forms-blue">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Descripcion de la actividad" class="form-control forms-blue">
                                        </div>
                                        <button class="btn btn-blue btn-round btn-block mt-5" data-toggle="modal" data-target="#paymentModal">Continuar</button>
                                    </div>
                                    <div class="col-6 text-center mx-auto">
                                        <div class="col-6 mx-auto text-center">
                                            <p class="text-@yield('color')">Digitar capacidad:</p>
                                            <input type="number" class="form-control forms-blue" style="font-size: 3.3rem; padding: 2rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<h1 class="font-weight-bold text-@yield('color') my-4">
    Educación para <br>
    Mutar Conscienciasción </h1>
<h6 class="card-category font-weight-bold text-@yield('color')">
    <ins>Contenido</ins>
</h6>
@include('modules.events.containers.down')
@include('components.modals.modal-payment')
@endsection