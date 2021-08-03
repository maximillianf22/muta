@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    .bg-image {
        background-image: url(./assets/img/home/bg-2.jpg) !important;
        height: 111vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.5;
    }

    ::-webkit-scrollbar-thumb {
        background: #fffe9c !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }

    .play {
        position: absolute;
        top: 45%;
        bottom: 45%;
        left: 48%;
        right: 48%;
        z-index: 9;
    }

    .top-50 {
        margin-top: 90%;
    }
</style>
@endsection

@section('content')
<a href="/recolectar-ver" class="play">
    <svg xmlns="http://www.w3.org/2000/svg" width="66.206" height="81.784" viewBox="0 0 66.206 81.784" class="text-@yield('color')">
        <g id="Grupo_1811" data-name="Grupo 1811" transform="translate(-279.925 -183.917)" opacity="0.55">
            <path id="Polígono_3" data-name="Polígono 3" d="M33.235,12.4a9,9,0,0,1,15.314,0L73.3,52.477a9,9,0,0,1-7.657,13.729H16.137A9,9,0,0,1,8.48,52.477Z" transform="translate(346.131 183.917) rotate(90)" fill="#fffe9c" />
        </g>
    </svg>
</a>
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
    <div class="col-9">
        &nbsp;
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-transparent pt-3 fixed-bottom col-10">
    <div class="container-fluid d-flex align-items-end mb-2">
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