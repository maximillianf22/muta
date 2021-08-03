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

    .form-check .form-check-sign:before {
        content: " ";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        cursor: pointer;
        border-radius: 3px;
        top: 0;
        background-color: black;
        border: 1px solid #000000;
        transition: opacity .3s linear;
    }

    .form-check input[type=checkbox]:checked+.form-check-sign:before {
        border: none;
        background-color: #000000;
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
            <div class="card-body">
            <div class="row p-5">
                    <div class="col-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.919" height="41.051" viewBox="0 0 35.919 41.051">
                            <path id="Icon_awesome-building" data-name="Icon awesome-building" d="M34.957,38.485h-1.6V1.924A1.924,1.924,0,0,0,31.429,0H4.49A1.924,1.924,0,0,0,2.566,1.924V38.485H.962A.962.962,0,0,0,0,39.447v1.6H35.919v-1.6A.962.962,0,0,0,34.957,38.485ZM10.263,6.093a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962V9.3a.962.962,0,0,1-.962.962H11.225a.962.962,0,0,1-.962-.962Zm0,7.7a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962V17a.962.962,0,0,1-.962.962H11.225A.962.962,0,0,1,10.263,17Zm4.169,11.866H11.225a.962.962,0,0,1-.962-.962V21.487a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962v3.207A.962.962,0,0,1,14.432,25.657Zm6.093,12.828H15.394V31.75a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm5.131-13.79a.962.962,0,0,1-.962.962H21.487a.962.962,0,0,1-.962-.962V21.487a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm0-7.7a.962.962,0,0,1-.962.962H21.487A.962.962,0,0,1,20.525,17V13.79a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm0-7.7a.962.962,0,0,1-.962.962H21.487a.962.962,0,0,1-.962-.962V6.093a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Z" fill="#151515" />
                        </svg>
                    </div>
                    <div class="col-8 my-auto p-0">
                        <p class="text-black h4 m-0">Soy empresa</p>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-6 pr-md-1">
                            <button class="btn btn-dark btn-block btn-simple btn-round btn-black border border-dark"><i class="fab fa-lg fa-facebook"></i></button>
                        </div>
                        <div class="col-6 pl-md-1">
                            <button class="btn btn-dark btn-block btn-simple btn-round btn-black border border-dark"><i class="fab fa-lg fa-google"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Nombre completo" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Correo electrónico" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Nombre de la empresa" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="NIT" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="number" value="" placeholder="Cedula Contacto" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Municipio" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Telefono Contacto" class="form-control forms">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control forms" placeholder="Contraseña">
                        <div class="input-group-append forms">
                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control forms" placeholder="Confirmar contraseña">
                        <div class="input-group-append forms">
                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Aceptar terminos y condiciones
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            Aceptar politicas de privacidad
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <button class="btn btn-neutral btn-round btn-block mt-5">Continuar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@endsection