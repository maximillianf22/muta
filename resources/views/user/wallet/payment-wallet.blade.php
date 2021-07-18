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
    <div class="col-2 my-auto">
        <ul class="list-unstyled">
            <a href="">
                <li class="text-@yield('color') font-weight-bold mt-4">
                    Perfil
                </li>
            </a>
            <a href="">
                <li class="text-@yield('color') font-weight-bold mt-4">
                    Billetera
                </li>
            </a>
            <a href="">
                <li class="text-@yield('color') font-weight-bold mt-4">
                    Historial
                </li>
            </a>
            <a href="">
                <li class="text-@yield('color') font-weight-bold mt-4">
                    Cerrar Sesión
                </li>
            </a>
        </ul>
    </div>
    <div class="col-10">
        <img src="assets/img/profile.png" alt="Raised circle image" class="img-fluid rounded-circle shadow img-profile mb-5">
        <div class="card card-transparent" style="min-height: 68vh; max-height: 68vh; overflow-y: auto">
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
                                <p class="text-gray">Direccion: Avenida 63 N. 17-63</p>
                                <p class="text-gray">Nombre: Catalina Gutiérrez</p>
                                <p class="text-gray">Contacto: 300 400 6000</p>
                            </div>
                            <div class="col-3">
                                <a href="#"><u class="text-gray">Editar</u></a>
                            </div>
                        </div>
                        <div id="state2" class="card bg-dark shadow-sm mt-0 d-none" style="height:12vh">
                            <div class="card-body px-5">
                                <h3 id="message-box" class="h3 text-gray text-center font-weight-bold mb-0">Estamos verificando y confirmando tu compra.</h3>
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
                            <div class="media product mt-5 mb-3 pl-4">
                                <a class="pull-left img-fluid rounded shadow-sm" href="javascript:;" style="background-image: url(./assets/img/shoppings/2.png); background-position: center; background-size: cover; height: 80px; width: 80px"></a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-@yield('color') font-weight-bold mb-1">Cuadernos</h4>
                                    <p class="text-@yield('color')" style="line-height:1.2;">Cuaderno anillado beige de cartón reciclado</p>
                                </div>
                            </div>
                            <div class="text-center px-5">
                                <div class="input-group rounded" style="background-color: rgb(233 236 239) !important;">
                                    <input type="text" class="form-control form-control-sm" placeholder="Código promocional">
                                    <div class="input-group-append border-top border-right border-bottom my-auto" style="border-radius: 0px 15px 15px 0px; cursor: pointer; height: 26px;">
                                        <p class="mb-0 font-weight-bold" style="margin-top: 2px; margin-right: 10px">Enviar</p>
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
                                <div class="mt-4 mb-5">
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