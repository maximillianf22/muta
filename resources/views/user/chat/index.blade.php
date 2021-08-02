@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    ::-webkit-input-placeholder {
        color: #000 !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #000 !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #000 !important;
    }

    :-ms-input-placeholder {
        color: #000 !important;
    }

    ::-webkit-scrollbar-thumb {
        background: #fffe9c !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 5px;
        border-radius: 10px;
        background-color: #717171;
    }

    .form-group.no-border .input-group-append .input-group-text,
    .form-group.no-border .input-group-prepend .input-group-text,
    .input-group.no-border .input-group-append .input-group-text,
    .input-group.no-border .input-group-prepend .input-group-text {
        background-color: #717171;
        border: none;
    }

    .form-group.no-border .form-control,
    .form-group.no-border .form-control+.input-group-append .input-group-text,
    .form-group.no-border .form-control+.input-group-prepend .input-group-text,
    .input-group.no-border .form-control,
    .input-group.no-border .form-control+.input-group-append .input-group-text,
    .input-group.no-border .form-control+.input-group-prepend .input-group-text {
        background-color: #717171;
        border: medium none;
    }

    .bg-input {
        background-color: #717171;
        border: 0px solid #cad1d7;
        font-size: 0.8rem;
        padding-left: 20px;
        font-weight: bold;
    }

    .bg-cards {
        background-color: #717171;
    }

    .rounded-success {
        border-radius: 20px 20px 0px 20px !important;
        font-size: 0.8rem;
    }

    .rounded-gray {
        border-radius: 20px 20px 20px 0px !important;
        font-size: 0.8rem;
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
        <img src="./assets/img/profile.png" alt="Raised circle image" class="img-fluid rounded-circle shadow img-profile mb-5">
        <div class="card card-transparent rounded-xl" style="min-height: 68vh; max-height: 68vh; overflow-y: auto">
            <div class="card-body px-5 pt-5 pb-0">
                <div class="row h-100">
                    <div class="col-3 text-center border-right border-success h-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.7" height="13.7" viewBox="0 0 13.7 13.7" style="position: absolute;right: 55px; top: 15px;" class="text-success">
                            <g id="Trazado_2793" data-name="Trazado 2793" transform="matrix(1, -0.017, 0.017, 1, 4.069, 4.165)" fill="#fffe9c">
                                <path d="M 2.733645915985107 7.467296123504639 C 0.1235059127211571 7.467296123504639 -2.000004053115845 5.343785762786865 -2.000004053115845 2.733645915985107 C -2.000004053115845 0.1235059127211571 0.1235059127211571 -2.000004053115845 2.733645915985107 -2.000004053115845 C 5.343785762786865 -2.000004053115845 7.467296123504639 0.1235059127211571 7.467296123504639 2.733645915985107 C 7.467296123504639 5.343785762786865 5.343785762786865 7.467296123504639 2.733645915985107 7.467296123504639 Z" stroke="none" />
                                <path d="M 2.733645915985107 -4.291534423828125e-06 C 1.223896026611328 -4.291534423828125e-06 -4.291534423828125e-06 1.223896026611328 -4.291534423828125e-06 2.733645915985107 C -4.291534423828125e-06 4.243395805358887 1.223896026611328 5.467296123504639 2.733645915985107 5.467296123504639 C 4.243395805358887 5.467296123504639 5.467296123504639 4.243395805358887 5.467296123504639 2.733645915985107 C 5.467296123504639 1.223896026611328 4.243395805358887 -4.291534423828125e-06 2.733645915985107 -4.291534423828125e-06 M 2.733645915985107 -4.000003814697266 C 6.446596145629883 -4.000003814697266 9.467296600341797 -0.979304313659668 9.467296600341797 2.733645915985107 C 9.467296600341797 6.446596145629883 6.446596145629883 9.467296600341797 2.733645915985107 9.467296600341797 C -0.979304313659668 9.467296600341797 -4.000003814697266 6.446596145629883 -4.000003814697266 2.733645915985107 C -4.000003814697266 -0.979304313659668 -0.979304313659668 -4.000003814697266 2.733645915985107 -4.000003814697266 Z" stroke="none" fill="#ffff9c" />
                            </g>
                        </svg>

                        <img src="./assets/img/support.png" class="img-fluid rounded-circle shadow m-0 lh-1 mb-3" style="width: 120px;">
                        <h3 class="text-@yield('color') m-0 lh-1 text-center"> Mutante</h3>
                        <h3 class="text-@yield('color') m-0 lh-1 text-center font-weight-bold"> John Smith</h3>
                        <small class="text-muted text-center lead mb-5 text-gray">Jhon está activo</small>
                        <h4 class="mt-5"><u class="text-@yield('color')">Soporte</u></h4>
                    </div>
                    <div class="col-5 p-0">
                        <div class="mensajes">
                            <div class="mesgs pt-0 row w-100" style="max-height: 53vh; min-height: 53vh; overflow-y: auto;">
                                <div class="msg_history mt-4 px-3 w-100">
                                    <div class="d-flex flex-column mb-3 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm font-weight-light text-success">Hoy 8:19 AM</span>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="./assets/img/profile.png">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.467" height="13.467" viewBox="0 0 13.467 13.467" style="position: absolute;bottom: 2px;right: -2px;">
                                                    <g id="Elipse_154" data-name="Elipse 154" transform="translate(4 4)" fill="#fffe9c" stroke="rgba(207,224,4,0.18)" stroke-width="4">
                                                        <circle cx="2.734" cy="2.734" r="2.734" stroke="none"></circle>
                                                        <circle cx="2.734" cy="2.734" r="4.734" fill="none"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded-success p-3 bg-light-primary text-dark-50 font-weight-light font-size-lg text-right max-w-400px bg-success">Hey there, we’re just writing.</div>
                                    </div>

                                    <div class="d-flex flex-column mb-3 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="./assets/img/support.png">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.467" height="13.467" viewBox="0 0 13.467 13.467" style="position: absolute;bottom: 2px;right: -2px;">
                                                    <g id="Elipse_154" data-name="Elipse 154" transform="translate(4 4)" fill="#fffe9c" stroke="rgba(207,224,4,0.18)" stroke-width="4">
                                                        <circle cx="2.734" cy="2.734" r="2.734" stroke="none"></circle>
                                                        <circle cx="2.734" cy="2.734" r="4.734" fill="none"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="text-muted font-size-sm font-weight-light text-success">Hoy 8:27 AM </span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded-gray p-3 bg-light-warning text-dark-50 font-weight-light font-size-lg text-left max-w-400px bg-input">How likely are you</div>
                                    </div>

                                    <div class="d-flex flex-column mb-3 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm font-weight-light text-success">Hoy 8:19 AM</span>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="./assets/img/profile.png">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.467" height="13.467" viewBox="0 0 13.467 13.467" style="position: absolute;bottom: 2px;right: -2px;">
                                                    <g id="Elipse_154" data-name="Elipse 154" transform="translate(4 4)" fill="#fffe9c" stroke="rgba(207,224,4,0.18)" stroke-width="4">
                                                        <circle cx="2.734" cy="2.734" r="2.734" stroke="none"></circle>
                                                        <circle cx="2.734" cy="2.734" r="4.734" fill="none"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded-success p-3 bg-light-primary text-dark-50 font-weight-light font-size-lg text-right max-w-400px bg-success">Hey there, we’re just writing.</div>
                                    </div>

                                    <div class="d-flex flex-column mb-3 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="./assets/img/support.png">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.467" height="13.467" viewBox="0 0 13.467 13.467" style="position: absolute;bottom: 2px;right: -2px;">
                                                    <g id="Elipse_154" data-name="Elipse 154" transform="translate(4 4)" fill="#fffe9c" stroke="rgba(207,224,4,0.18)" stroke-width="4">
                                                        <circle cx="2.734" cy="2.734" r="2.734" stroke="none"></circle>
                                                        <circle cx="2.734" cy="2.734" r="4.734" fill="none"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="text-muted font-size-sm font-weight-light text-success">Hoy 8:27 AM </span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded-gray p-3 bg-light-warning text-dark-50 font-weight-light font-size-lg text-left max-w-400px bg-input">How likely are you</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-left px-lg-5">
                            <div class="input-group bg-input rounded-lg no-border">
                                <input type="text" class="form-control py-3 bg-transparent px-1" placeholder="Escribe tu mensaje...">
                                <div class="input-group-append no-border bg-transparent">
                                    <span class="input-group-text bg-transparent  p-0"><i class="fab fa-telegram-plane"></i></span>
                                </div>
                                <div class="input-group-append no-border bg-transparent p-0 pr-3">
                                    <span class="input-group-text bg-transparent"><i class="far fa-smile"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-5 px-0">
                        <div class="px-2" style=" max-height: 52vh; overflow-y: auto;">
                            <h4 class="text-success text-center mt-4">Chats activos</h4>
                            <div class="row w-100 m-0" style="max-height: 38vh;">
                                <div class="bg-dark w-100 my-2" style="min-height: 10vh;max-height: 10vh;border-radius: 2rem;">
                                    <div class="media product" style="margin-top: 1vh;margin-bottom: 1vh;padding-left: 1.2vh;">
                                        <a class="pull-left img-fluid rounded-circle shadow-sm " href="javascript:;" style="background-image: url(./assets/img/support-1.png);background-position: center;background-size: cover;height: 55px;width: 55px;"></a>
                                        <div class="media-body ml-2 my-auto p-0">
                                            <h4 class="text-success mb-1 font-weight-light">Camilo</h4>
                                            <p class="text-success lead" style="line-height:1.2;font-size: 11px;">Hola, necesito...</p>
                                        </div>
                                        <button class="btn btn-sm btn-success pull-right py-1 text-dark px-3 my-auto mr-3 rounded-lg" style="font-size: 10px;">Soporte</button>
                                    </div>
                                </div>
                                <div class="bg-dark w-100 my-2" style="min-height: 10vh;max-height: 10vh;border-radius: 2rem;">
                                    <div class="media product" style="margin-top: 1vh;margin-bottom: 1vh;padding-left: 1.2vh;">
                                        <a class="pull-left img-fluid rounded-circle shadow-sm " href="javascript:;" style="background-image: url(./assets/img/support-2.png);background-position: center;background-size: cover;height: 55px;width: 55px;"></a>
                                        <div class="media-body ml-2 my-auto p-0">
                                            <h4 class="text-success mb-1 font-weight-light">Andrea</h4>
                                            <p class="text-success lead" style="line-height:1.2;font-size: 11px;">Hola, necesito...</p>
                                        </div>
                                        <button class="btn btn-sm btn-success pull-right py-1 text-dark px-3 my-auto mr-3 rounded-lg" style="font-size: 10px;">Soporte</button>
                                    </div>
                                </div>
                                <div class="bg-dark w-100 my-2" style="min-height: 10vh;max-height: 10vh;border-radius: 2rem;">
                                    <div class="media product" style="margin-top: 1vh;margin-bottom: 1vh;padding-left: 1.2vh;">
                                        <a class="pull-left img-fluid rounded-circle shadow-sm " href="javascript:;" style="background-image: url(./assets/img/support-1.png);background-position: center;background-size: cover;height: 55px;width: 55px;"></a>
                                        <div class="media-body ml-2 my-auto p-0">
                                            <h4 class="text-success mb-1 font-weight-light">Camilo</h4>
                                            <p class="text-success lead" style="line-height:1.2;font-size: 11px;">Hola, necesito...</p>
                                        </div>
                                        <button class="btn btn-sm btn-success pull-right py-1 text-dark px-3 my-auto mr-3 rounded-lg" style="font-size: 10px;">Soporte</button>
                                    </div>
                                </div>
                                <div class="bg-dark w-100 my-2" style="min-height: 10vh;max-height: 10vh;border-radius: 2rem;">
                                    <div class="media product" style="margin-top: 1vh;margin-bottom: 1vh;padding-left: 1.2vh;">
                                        <a class="pull-left img-fluid rounded-circle shadow-sm " href="javascript:;" style="background-image: url(./assets/img/support-1.png);background-position: center;background-size: cover;height: 55px;width: 55px;"></a>
                                        <div class="media-body ml-2 my-auto p-0">
                                            <h4 class="text-success mb-1 font-weight-light">Camilo</h4>
                                            <p class="text-success lead" style="line-height:1.2;font-size: 11px;">Hola, necesito...</p>
                                        </div>
                                        <button class="btn btn-sm btn-success pull-right py-1 text-dark px-3 my-auto mr-3 rounded-lg" style="font-size: 10px;">Soporte</button>
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
@include('components.modals.modal-draw-confirmation')
@endsection