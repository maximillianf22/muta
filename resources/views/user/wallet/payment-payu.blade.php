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

    .form-group.no-border .form-control+.input-group-append .input-group-text:active,
    .form-group.no-border .form-control+.input-group-append .input-group-text:focus,
    .form-group.no-border .form-control+.input-group-prepend .input-group-text:active,
    .form-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
    .form-group.no-border .form-control:active,
    .form-group.no-border .form-control:focus,
    .input-group.no-border .form-control+.input-group-append .input-group-text:active,
    .input-group.no-border .form-control+.input-group-append .input-group-text:focus,
    .input-group.no-border .form-control+.input-group-prepend .input-group-text:active,
    .input-group.no-border .form-control+.input-group-prepend .input-group-text:focus,
    .input-group.no-border .form-control:active,
    .input-group.no-border .form-control:focus {
        border: medium none;
        background-color: #c3c3c3 !important;
    }

    .form-control:focus {
        border: 1px solid #cad1d7;
        background-color: #b7b7b7;
        box-shadow: none;
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
                    <div class="col-6 px-4">
                        <h4 class="text-@yield('color') font-weight-bold mb-5 text-center">
                            Perfil / Tu Carrito
                        </h4>
                        <div class="row mb-0">
                            <div class="col-9">
                                <p class="font-weight-bold text-gray">
                                    Datos de envio:
                                </p>
                                <p class="text-gray lh-1">Direccion: Avenida 63 N. 17-63</p>
                                <p class="text-gray lh-1">Nombre: Catalina Gutiérrez</p>
                                <p class="text-gray lh-1">Contacto: 300 400 6000</p>
                            </div>
                            <div class="col-3">
                                <a href="#"><u class="text-gray">Editar</u></a>
                            </div>
                        </div>
                        <h3 class="text-@yield('color') font-weight-bold my-3 text-center">
                            PayU
                        </h3>
                        <div id="state2" class="card bg-dark shadow-sm mt-0 d-none" style="height:12vh">
                            <div class="card-body px-5">
                                <h3 id="message-box" class="h4 text-gray text-center font-weight-bold mb-0">Estamos verificando y confirmando tu compra.</h3>
                            </div>
                        </div>
                        <div id="state1" class="card bg-dark shadow-sm mt-0" style="height:12vh">
                            <div class="card-body px-5">
                                <h3 class="h1 text-@yield('color') text-center font-weight-bold mb-0">$300.000</h3>
                                <p class="text-@yield('color') text-center">Mi disponible</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <button onclick="show('state1', 'state2')" class="btn btn-success btn-round btn-lg text-dark mt-3 px-5">
                                <h4 id="btn-pagar" class="text-black mx-5 mb-0">Pagar</h4>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 h-100 pt-5 px-4">
                        <div class="card bg-dark shadow-sm mt-4" style="min-height:45vh">
                            <div class="media product mt-5 mb-3 pl-5">
                                <a class="pull-left img-fluid rounded shadow-sm" href="javascript:;">
                                    <svg id="Grupo_2058" data-name="Grupo 2058" xmlns="http://www.w3.org/2000/svg" width="28.98" height="27.169" viewBox="0 0 28.98 27.169" class="text-@yield('color')">
                                        <path id="Trazado_2730" data-name="Trazado 2730" d="M2067.6,598.319c0-.017,0-.033,0-.05a.907.907,0,0,0-1.815,0h0v7.245h-21.735V591.02h3.6l.025,0a.908.908,0,1,0,0-1.815l-.016,0h-3.61a1.81,1.81,0,0,0-1.809,1.8v16.31H2067.6Z" transform="translate(-2040.432 -583.775)" fill="#fffe9c" fill-rule="evenodd" />
                                        <path id="Trazado_2731" data-name="Trazado 2731" d="M2100.007,559.478h-16.3a1.811,1.811,0,0,0-1.811,1.811v9.056a1.811,1.811,0,0,0,1.811,1.811h3.623v3.623l5.434-3.623h7.245a1.811,1.811,0,0,0,1.811-1.811v-9.056A1.811,1.811,0,0,0,2100.007,559.478Zm-11.773,7.245a.906.906,0,1,1,.905-.906A.906.906,0,0,1,2088.234,566.723Zm3.622,0a.906.906,0,1,1,.906-.906A.906.906,0,0,1,2091.856,566.723Zm3.623,0a.906.906,0,1,1,.906-.906A.905.905,0,0,1,2095.479,566.723Z" transform="translate(-2072.838 -559.478)" fill="#fffe9c" fill-rule="evenodd" />
                                        <path id="Trazado_2732" data-name="Trazado 2732" d="M2032.33,694.659a1.355,1.355,0,0,0,1.359,1.358h26.263a1.357,1.357,0,0,0,1.359-1.358V693.3h-28.98Z" transform="translate(-2032.33 -668.848)" fill="#fffe9c" fill-rule="evenodd" />
                                    </svg>
                                </a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-@yield('color') font-weight-bold mb-1">Actividad - Capacitación</h4>
                                </div>
                            </div>
                            <div class="text-center px-5">
                                <div class="input-group rounded" style="background-color: rgb(233 236 239) !important;">
                                    <input type="text" class="form-control form-control-sm" placeholder="Código promocional">
                                    <div class="input-group-append border-top border-right border-bottom my-auto text-success" style="border-radius: 0px 15px 15px 0px; cursor: pointer; height: 26px;">
                                        <p class="mb-0 font-weight-bold" style="margin-top: 2px; margin-right: 6px; margin-left: 6px">Enviar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 mt-4">
                                <div class=" my-0">
                                    <div class="row text-@yield('color')  mb-1">
                                        <div class="col-6">
                                            Subtotal
                                        </div>
                                        <div class="col-6 text-right">
                                            $80.000
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 border-bottom border-success">
                                    <div class="row text-@yield('color') mb-2">
                                        <div class="col-6">
                                            Envio
                                        </div>
                                        <div class="col-6 text-right">
                                            $15.000
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="row text-@yield('color') h4 font-weight-bold mb-4">
                                        <div class="col-6">
                                            Total
                                        </div>
                                        <div class="col-6 text-right">
                                            $95.000
                                        </div>
                                    </div>
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
@endsection

@section('js')
<script>
    function show(container, main_place) {
        const elemento = document.getElementById(container);
        elemento.classList.toggle('d-none')


        const container_elemento = document.getElementById(main_place);
        container_elemento.classList.toggle('d-none');

        const btn = document.getElementById("btn-pagar");
        btn.innerHTML = "Finalizando";

        setTimeout(() => {
            document.getElementById("message-box").innerHTML = "Tu compra ha sido realizada exitosamente";
        }, 1500);
    }
</script>
@endsection