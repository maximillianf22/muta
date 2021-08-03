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
                        <h4 class="text-@yield('color') font-weight-bold mb-3">
                            Retiros
                        </h4>
                        <p class="text-@yield('color')">
                            Llena los campos que <br>
                            te solicitamos para poder retirar con facilidad
                        </p>
                        <div class="row mt-4">
                            <div class="col-6 my-2">
                                <label class="text-@yield('color')">
                                    Nombre completo*
                                </label>
                                <input type="text" class="form-control bg-input text-@yield('color')" placeholder="Nombre" value="Ana María">
                            </div>
                            <div class="col-6 my-2">
                                <label class="text-@yield('color')">
                                    Numero de la cuenta*
                                </label>
                                <input type="number" class="form-control bg-input text-@yield('color')" placeholder="Cuenta" value="7894379112">
                            </div>
                            <div class="col-6 my-2">
                                <label class="text-@yield('color')">
                                    Banco*
                                </label>
                                <input type="text" class="form-control bg-input text-@yield('color')" placeholder="Banco" value="Bancolombia">
                            </div>
                            <div class="col-6 my-2">
                                <label class="text-@yield('color')">
                                    Tipo de cuenta*
                                </label>
                                <input type="text" class="form-control bg-input text-@yield('color')" placeholder="Tipo de cuenta" value="Ahorros">
                            </div>
                        </div>
                        <div class="col-7 mt-3 p-0">
                            <button class="btn btn-success btn-lg rounded-lg btn-block" data-toggle="modal" data-target="#drawModalConfirmation"><h4 class="text-black mb-0">Continuar</h4></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@include('components.modals.modal-draw-confirmation')
@endsection