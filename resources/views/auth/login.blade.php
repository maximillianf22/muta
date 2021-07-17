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
        height: 100vh;
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

    ::-webkit-input-placeholder {
        color: rgb(0, 0, 0) !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: rgb(0, 0, 0) !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: rgb(0, 0, 0) !important;
    }

    :-ms-input-placeholder {
        color: rgb(0, 0, 0) !important;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-4 offset-md-4">
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
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="37.05" height="38.836" viewBox="0 0 37.05 38.836">
                            <g id="Grupo_1758" data-name="Grupo 1758" transform="translate(0 0)">
                                <ellipse id="Elipse_100" data-name="Elipse 100" cx="8.372" cy="8.372" rx="8.372" ry="8.372" transform="translate(8.453 3.847) rotate(-13.283)" fill="#151515" />
                                <path id="Trazado_2653" data-name="Trazado 2653" d="M2176.548,214.718a18.525,18.525,0,0,0-18.525,18.525c0,.176.009.35.013.525h37.024c.005-.175.012-.349.012-.525A18.525,18.525,0,0,0,2176.548,214.718Z" transform="translate(-2158.023 -194.932)" fill="#151515" />
                            </g>
                        </svg>
                    </div>
                    <div class="col-8 my-auto text-black ">
                        Ya soy mutante
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Correo" class="form-control forms">
                    </div>
                    <div class="input-group mb-0">
                        <input type="password" class="form-control forms" placeholder="Contraseña">
                        <div class="input-group-append forms">
                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-right ml-auto pr-3">
                            <a href="/recuperar-contraseña">
                                <p class=" text-black">¿Olvido su contraseña?</p>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-neutral btn-round btn-block mt-4">Iniciar sesion</button>
                    <div class="row">
                        <div class="col-6 pr-md-1">
                            <button class="btn btn-dark btn-block btn-simple btn-round btn-black border border-dark"><i class="fab fa-lg fa-facebook"></i></button>
                        </div>
                        <div class="col-6 pl-md-1">
                            <button class="btn btn-dark btn-block btn-simple btn-round btn-black border border-dark"><i class="fab fa-lg fa-google"></i></button>
                        </div>
                    </div>
                    <a class="btn btn-black btn-round btn-block mt-4 px-0" href="/seleccionar">¿Nuevo Mutante? Regístrate</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@endsection