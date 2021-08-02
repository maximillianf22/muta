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
                    <div class="col-12 px-4">
                        <h4 class="text-@yield('color') font-weight-bold mb-3">
                            Retiros
                        </h4>
                        <p class="text-@yield('color')">
                            Registrando tu certificado bancario podrás hacer los <br>
                            retiros con mayor facilidad y rapidez
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="264" height="120" viewBox="0 0 264 120">
                            <defs>
                                <filter id="Rectángulo_913" x="0" y="0" width="264" height="120" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="3" result="blur" />
                                    <feFlood flood-opacity="0.161" />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g id="Grupo_2369" data-name="Grupo 2369" transform="translate(-287 -299)" class="text-@yield('color')">
                                <g transform="matrix(1, 0, 0, 1, 287, 299)" filter="url(#Rectángulo_913)">
                                    <rect id="Rectángulo_913-2" data-name="Rectángulo 913" width="246" height="102" rx="14" transform="translate(9 6)" fill="#272727" />
                                </g>
                                <g id="Grupo_1940" data-name="Grupo 1940" transform="translate(408.731 348.362)">
                                    <rect id="Rectángulo_1134" data-name="Rectángulo 1134" width="3.495" height="15.746" rx="1.748" transform="translate(8.591 4.915)" fill="#fffe9c" />
                                    <rect id="Rectángulo_1135" data-name="Rectángulo 1135" width="3.495" height="11.068" rx="1.748" transform="translate(10.346 4.184) rotate(45)" fill="#fffe9c" />
                                    <rect id="Rectángulo_1136" data-name="Rectángulo 1136" width="11.068" height="3.495" rx="1.748" transform="translate(10.355 4.184) rotate(45)" fill="#fffe9c" />
                                    <path id="Trazado_2753" data-name="Trazado 2753" d="M2273.7,685.222h-17.075a1.785,1.785,0,0,1-1.785-1.785h0a1.71,1.71,0,0,1,1.71-1.71H2273.7a1.71,1.71,0,0,1,1.71,1.71v.074A1.71,1.71,0,0,1,2273.7,685.222Z" transform="translate(-2254.841 -681.727)" fill="#fffe9c" />
                                </g>
                            </g>
                        </svg>
                        <div class="row mt-3">
                            <div class="col-7">
                                <button class="btn btn-danger btn-lg btn-block text-black py-3 rounded-lg">
                                    <h5 class="mb-0 h4">Sube aquí tu certificado bancario</h5>
                                </button>
                                <button class="btn btn-danger btn-success btn-block text-black py-3 mt-4 rounded-lg" data-toggle="modal" data-target="#drawModalConfirmation">
                                    <h5 class="mb-0 h4">Continuar</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@include('components.modals.modal-draw-confirmation')
@endsection