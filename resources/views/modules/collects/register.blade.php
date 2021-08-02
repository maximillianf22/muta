@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    .bg-image {
        background-image: url(./assets/img/home/bg-2.jpg) !important;
        filter: blur(20px);
        -webkit-filter: blur(20px);
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .close-windows {
        position: absolute;
        right: -15px !important;
        top: -15px !important;
        z-index: 99;
        cursor: pointer;
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

    .top-50 {
        margin-top: 90%;
    }

    .nav-tabs>.nav-item>.nav-link.active {
        border: 1px solid #fefe9c;
        font-weight: 800;
        border-radius: 30px;
    }

    a.text-success:focus,
    a.text-success:hover {
        color: #fefe9c !important;
    }

    .form-control:focus {
        border: 1px solid #cad1d7;
        background-color: #17171747;
        box-shadow: none;
        color: #fefe9c;
    }

    .form-control {
        border: 1px solid #17171747;
        background-color: #17171747;
        box-shadow: none;
        color: #fefe9c;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-3">
        <p class="text-@yield('color') top-50 font-weight-bold">
            <u>Descarga tu Manual de Reciclaje</u>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" width="244" height="46" viewBox="0 0 244 46" class="mt-5">
            <g id="Grupo_2263" data-name="Grupo 2263" transform="translate(-59 -451)">
                <rect id="Rectángulo_1748" data-name="Rectángulo 1748" width="244" height="46" rx="14" transform="translate(59 451)" fill="#fffe9c" />
                <g id="Grupo_2112" data-name="Grupo 2112" transform="translate(250 463)">
                    <rect id="Rectángulo_996" data-name="Rectángulo 996" width="4.872" height="2.763" rx="1.381" transform="translate(3.375 0.001)" fill="#272727" />
                    <rect id="Rectángulo_997" data-name="Rectángulo 997" width="6.67" height="2.763" rx="1.381" transform="translate(1.576 3.7)" fill="#272727" />
                    <rect id="Rectángulo_998" data-name="Rectángulo 998" width="8.246" height="2.763" rx="1.381" transform="translate(0 7.464)" fill="#272727" />
                    <path id="Trazado_2714" data-name="Trazado 2714" d="M2108.853,379.588l-4.357-6.851a1.6,1.6,0,0,0-1.353-.741h-5.073l-.014-.625a1.491,1.491,0,0,0-1.491-1.49h-12.978a1.49,1.49,0,0,0-1.49,1.479v16.285a1.482,1.482,0,0,0,1.484,1.479h2.126a3.971,3.971,0,0,0,3.852,2.875,4.018,4.018,0,0,0,3.851-2.875h4.816A3.97,3.97,0,0,0,2102.08,392a4.018,4.018,0,0,0,3.852-2.875h1.861a1.482,1.482,0,0,0,1.468-1.5v-6.635A2.611,2.611,0,0,0,2108.853,379.588Zm-19.308,9.2a.779.779,0,1,1,.779-.779A.779.779,0,0,1,2089.545,388.788Zm12.525,0a.779.779,0,1,1,.779-.779A.779.779,0,0,1,2102.07,388.788Zm3.651-8.787h-5.878a.368.368,0,0,1-.368-.368l0-4.855a.368.368,0,0,1,.367-.368h2.8a.369.369,0,0,1,.31.171l3.085,4.866a.364.364,0,0,1,.05.177A.368.368,0,0,1,2105.721,380Z" transform="translate(-2073.319 -369.881)" fill="#272727" />
                </g>
                <a href="/recolectar-registro">
                    <text id="Solicita_la_Recolección_Vamos_a_la_puerta_de_tu_casa" data-name="Solicita la Recolección
                Vamos a la puerta de tu casa" transform="translate(78 473)" fill="#272727" font-size="14" font-family="Helvetica-Bold, Helvetica" font-weight="700">
                        <tspan x="0" y="0">Solicita la Recolección</tspan>
                        <tspan font-size="11" font-family="Helvetica" font-weight="400">
                            <tspan x="0" y="11">Vamos a la puerta de tu casa</tspan>
                        </tspan>
                    </text>
                </a>
            </g>
        </svg>
        <p class="h1 display-3 mt-5 font-weight-bold text-@yield('color') mb-3">
            El Reciclaje y
            la Mutación
        </p>
        <p class="text-@yield('color') mb-0"><u>Ver video 2 minutos</u></p>
    </div>
    <div class="col-6 offset-2">
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
            <div class="card-body py-0">
                <div class="card card-nav-tabs card-plain m-0">
                    <div class="card-header card-header header-success">
                        <div class="nav-tabs-navigation nav-pills-primary">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link text-@yield('color') active no-border-radius " href="#Semanal" data-toggle="tab">Semanal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-@yield('color') no-border-radius " href="#Unica" data-toggle="tab">Unica</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="min-height: 49vh;">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="Semanal">
                                <p class="h2 font-weight-bold text-@yield('color') mb-0 mt-4">Recoleecion Semanal</p>
                                <p class="text-@yield('color') h4">Configura los dias que requieras una visita</p>
                                <div class="row px-4 my-5">
                                    <div class="col">
                                        <button class="btn btn-gray btn-fab btn-icon btn-round text-black">
                                            L
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-gray btn-fab btn-icon btn-round text-black">
                                            M
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-success btn-fab btn-icon btn-round text-black">
                                            Mi
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-gray btn-fab btn-icon btn-round text-black">
                                            J
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-gray btn-fab btn-icon btn-round text-black">
                                            V
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-success btn-fab btn-icon btn-round text-black">
                                            S
                                        </button>
                                    </div>
                                </div>
                                <div class="text-center mb-4">
                                    <button class="btn btn-success px-5 btn-lg text-black">Confirmar</button>
                                </div>
                            </div>
                            <div class="tab-pane" id="Unica">
                                <p class="h2 font-weight-bold text-@yield('color') mb-0 mt-4">Recoleecion Única</p>
                                <p class="text-@yield('color') h4">Muta tu conciencia un poco mas confirmando tu nueva recolección</p>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Información adicional"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" value="" placeholder="Dirección" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success px-5 btn-lg text-black">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-transparent pt-3 fixed-bottom col-10">
    <div class="container d-flex align-items-end mb-2">
        <div class="navbar-translate">

        </div>
        <div class="collapse navbar-collapse" id="example-navbar-transparent">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-transparent" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-@yield('color')" href="javascript:;">
                        Siguenos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-@yield('color')" href="javascript:;">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-@yield('color')" href="javascript:;">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-@yield('color')" href="javascript:;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-@yield('color')" href="javascript:;">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection