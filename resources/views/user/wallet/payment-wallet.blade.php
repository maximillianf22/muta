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
                        <div class="row mb-5">
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
                        <div id="state2" class="card bg-dark shadow-sm mt-0 d-none" style="height:12vh">
                            <div class="card-body px-5">
                                <h3 id="message-box" class="h4 text-gray text-center font-weight-bold mb-0">Estamos verificando y confirmando tu compra.</h3>
                            </div>
                        </div>
                        <div id="state1" class="card bg-dark shadow-sm mt-4" style="height:12vh">
                            <div class="card-body px-5">
                                <h3 class="h1 text-@yield('color') text-center font-weight-bold mb-0">$300.000</h3>
                                <p class="text-@yield('color') text-center">Mi disponible</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <button onclick="show('state1', 'state2')" class="btn btn-success btn-round btn-lg text-dark mt-3 px-5" data-toggle="modal" data-target="#paymentModalConfirm">
                                <h4 id="btn-pagar" class="text-black mx-5 mb-0">Pagar</h4>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 h-100 pt-5 px-4">
                        <div class="card bg-dark shadow-sm mt-4" style="min-height:45vh">
                            <div class="media product mt-4 mb-3 pl-4">
                                <a class="pull-left img-fluid rounded shadow-sm" href="javascript:;" style="background-image: url(./assets/img/shoppings/2.png); background-position: center; background-size: cover; height: 80px; width: 80px"></a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-@yield('color') font-weight-bold mb-1">Cuadernos</h4>
                                    <p class="text-@yield('color')" style="line-height:1.2;">Cuaderno anillado beige de cartón reciclado</p>
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
                            <div class="px-5 mt-2">
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
                                <div class="mt-4 mb-4">
                                    <div class="row text-@yield('color') h4 font-weight-bold mb-2">
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