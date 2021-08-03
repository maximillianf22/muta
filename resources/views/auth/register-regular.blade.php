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

    ::-webkit-scrollbar-thumb {
        background: #fdfdfd !important;
        border-radius: 10px;
    }

    .close-windows {
        position: absolute;
        right: -15px !important;
        top: -15px !important;
        z-index: 99;
        cursor: pointer;
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
                <div class="row p-5  border-dark">
                    <div class="col-4">
                        <a href="/registro" class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42.986" height="33.427" viewBox="0 0 42.986 33.427" class="text-black">
                                <path id="Icon_awesome-home" data-name="Icon awesome-home" d="M20.922,10.925,7.164,22.257v12.23A1.194,1.194,0,0,0,8.358,35.68l8.362-.022a1.194,1.194,0,0,0,1.188-1.194V27.323A1.194,1.194,0,0,1,19.1,26.129h4.776a1.194,1.194,0,0,1,1.194,1.194V34.46a1.194,1.194,0,0,0,1.194,1.2l8.359.023a1.194,1.194,0,0,0,1.194-1.194V22.248L22.064,10.925A.91.91,0,0,0,20.922,10.925Zm21.732,7.7-6.238-5.142V3.149a.9.9,0,0,0-.9-.9H31.341a.9.9,0,0,0-.9.9V8.567l-6.681-5.5a3.582,3.582,0,0,0-4.552,0L.324,18.627A.9.9,0,0,0,.2,19.888l1.9,2.313a.9.9,0,0,0,1.262.122L20.922,7.866a.91.91,0,0,1,1.142,0L39.617,22.323a.9.9,0,0,0,1.261-.119l1.9-2.313a.9.9,0,0,0-.127-1.263Z" transform="translate(0.001 -2.254)" fill="#fff" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-8 my-auto text-black p-0 h4 m-0">
                        Soy hogar
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
                        <input type="text" value="" placeholder="Nombre" class="form-control forms">
                    </div>

                    <div class="form-group">
                        <input type="text" value="" placeholder="Correo" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="number" value="" placeholder="Cedula" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Municipio" class="form-control forms">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Telefono" class="form-control forms">
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