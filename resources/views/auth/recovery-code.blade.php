@extends('layout.app')
@section('title', 'Muta Web')
@section('color', 'white')
@section('active-collects', 'active')

@section('css')
<style>
    .bg-image {
        background-image: url(./assets/img/home/bg-home.jpg) !important;
        filter: blur(20px);
        -webkit-filter: blur(20px);
        height: 111vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .contents {
        position: absolute !important;
        top: 0;
        width: 100%;
    }

    .close-windows {
        position: absolute;
        right: -15px !important;
        top: -15px !important;
        z-index: 99;
        cursor: pointer;
    }

    ::-webkit-scrollbar-thumb {
        background: #fdfdfd !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }

    .userInput {
        display: flex;
        justify-content: center;
    }

    input {
        margin: 8px;
        height: 50px;
        width: 40px;
        border: none;
        border-radius: 20px;
        text-align: center;
        font-size: 1.2rem;
        background: #eef2f399;
    }

</style>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
        <div class="card card-transparent">
            <div class="close-windows">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.477" height="37.477" viewBox="0 0 37.477 37.477">
                        <g id="Grupo_2145" data-name="Grupo 2145" transform="translate(-622.132 -563.13)">
                            <circle id="Elipse_6" data-name="Elipse 6" cx="13.5" cy="13.5" r="13.5" transform="translate(627.271 569.271)" fill="#151515" />
                            <text id="_" data-name="+" transform="translate(634.859 587.879) rotate(45)" fill="#fff" font-size="31" font-family="Helvetica-Light, Helvetica" font-weight="300">
                                <tspan x="-10.23" y="0">+</tspan>
                            </text>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="card-body py-4">
                <div class="row p-5">
                    <div class="my-auto text-black text-center mx-auto h4">
                        Recupera tu cuenta
                    </div>
                </div>
                <p class="text-black text-center lead">
                    Ingresa el código de verificación <br>
                    que llegó a tu correo
                </p>
                <div class="card-body p-3 text-center">
                    <div class="userInput">
                        <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
                        <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
                        <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
                        <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')">
                        <input type="text" id="fifth" maxlength="1">
                    </div>
                    <a class="btn btn-neutral btn-round btn-block mt-5 mb-3" href="/recuperar-contraseña">Verificar</a>
                    
                    <a href="#" class="text-black" >
                        ¿No te ha llegado? <u>Reenviar</u></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@endsection

@section('js')
<script>
    function clickEvent(first, last) {
        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }
</script>
@endsection