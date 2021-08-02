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
            <div class="card-body py-4">
                <div class="row p-5">
                    <div class="my-auto text-black text-center mx-auto h4">
                        Recupera tu cuenta
                    </div>
                </div>
                <p class="text-black text-center lead">
                    Ahora escribe tu nueva contraseña
                </p>
                <div class="card-body py-3">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control forms" placeholder="Contraseña">
                        <div class="input-group-append forms">
                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-0">
                        <input type="password" class="form-control forms" placeholder="Confirmar Contraseña">
                    </div>
                    <a class="btn btn-neutral btn-round btn-block mt-5" href="/login">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.others.footer-nav')

@endsection