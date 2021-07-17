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

    .input-number {
        --webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: end;
        appearance: auto;
        -webkit-rtl-ordering: logical;
        cursor: text;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 2px;
        border-width: 2px;
        border-style: inset;
        border-image: initial;
        background-color: transparent;
        border: 0px;
        color: #FFFE9C;
        font-weight: 600;
        font-size: 17.2px;
        text-align: end !important;
    }

    .quantity {
        position: relative;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .quantity input {
        width: 45px;
        height: 42px;
        line-height: 1.65;
        float: left;
        display: block;
        padding: 0;
        margin: 0;
        padding-left: 20px;
    }

    .quantity input:focus {
        outline: 0;
    }

    .quantity-nav {
        float: left;
        position: relative;
        height: 42px;
    }

    .quantity-button {
        position: relative;
        cursor: pointer;
        width: 20px;
        text-align: center;
        color: #333;
        font-size: 13px;
        font-family: "Trebuchet MS", Helvetica, sans-serif !important;
        line-height: 1.7;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    .quantity-button.quantity-up {
        position: absolute;
        height: 40%;
        left: 25px;
        top: 0;
    }

    .quantity-button.quantity-down {
        position: absolute;
        bottom: 2px;
        height: 50%;
        left: 25px;
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
                        {{--
                        <div class="products mt-5" style="max-height: 30vh; overflow-y:auto;">
                            <div class="media product my-3">
                                <a class="pull-left img-fluid rounded shadow-sm" href="javascript:;" style="background-image: url(./assets/img/shoppings/2.png); background-position: center; background-size: cover; height: 100px; width: 100px">
                                </a>
                                <div class="media-body ml-4 my-auto">
                                    <h4 class="media-heading text-@yield('color') font-weight-bold mb-2">Cuaderno <small class="ml-5">$80.000</small></h4>
                                    <p class="text-@yield('color')">Cuaderno anillado beige de cartón reciclado</p>
                                </div>
                            </div>
                        </div>
                        --}}
                        <div class="media product my-5">
                            <a class="pull-left img-fluid rounded shadow-sm" href="javascript:;" style="background-image: url(./assets/img/shoppings/2.png); background-position: center; background-size: cover; height: 80px; width: 80px"></a>
                            <div class="media-body ml-4 my-auto">
                                <h4 class="media-heading text-@yield('color') font-weight-bold mb-1">Cuadernos</h4>
                                <p class="text-@yield('color')" style="line-height:1.2;">Cuaderno anillado beige de cartón reciclado</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 ">
                                <h4 class="text-@yield('color')">Precio</h4>
                            </div>
                            <div class="col-6 text-right font-weight-bold text-@yield('color') h4">
                                $80.000
                            </div>
                        </div>
                        <div class="row border-bottom border-success pb-4">
                            <div class="col-6 my-auto">
                                <h4 class="text-@yield('color') mb-0">Cantidad</h4>
                            </div>
                            <div class="col-6 text-right font-weight-bold text-@yield('color') w-100">
                                <div class="quantity float-right pr-4">
                                    <input type="number" min="1" max="999" step="1" value="1" class="input-number">
                                </div>
                            </div>
                        </div>
                        <h3 class="text-@yield('color') text-center h1 mb-0 mt-3 font-weight-bold">
                            Total $95.000
                        </h3>
                    </div>
                    <div class="col-6 h-100 pt-5 px-4">
                        <div class="card bg-dark shadow-sm mt-4">
                            <div class="card-body px-5">
                                <div class="title border-bottom border-success">
                                    <h4 class="text-@yield('color') text-center mb-3">Resumen del pedido</h4>
                                </div>
                                <div class="border-bottom border-success">
                                    <div class="row text-@yield('color')  mb-3">
                                        <div class="col-6">
                                            Subtotal
                                        </div>
                                        <div class="col-6 text-right">
                                            $80.000
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div class="row text-@yield('color') mb-4">
                                        <div class="col-6">
                                            Envio
                                        </div>
                                        <div class="col-6 text-right">
                                            $15.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success btn-round btn-lg text-dark mt-3 px-5" data-toggle="modal" data-target="#paymentModal">
                                <h4 class="text-black mx-5 mb-0">Pagar</h4>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@include('components.modals.modal-payment')
@endsection

@section('js')
<script>
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fas fa-caret-up text-success fa-2x"></i></div><div class="quantity-button quantity-down"><i class="fas fa-caret-down text-success fa-2x"></i></div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            //SelectorSlide.val(newVal);.    /*aquí pone el selector del slide*/
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            //SelectorSlide.val(newVal);        /*aquí pone el selector del slide*/
            spinner.find("input").trigger("change");
        });

    });
</script>
@endsection