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

    .carousel-wrap {
        width: 1000px;
        margin: auto;
        position: relative;
    }

    .owl-carousel .owl-nav {
        overflow: hidden;
        height: 0px;
    }

    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #2caae1;
    }


    .owl-carousel .item {
        text-align: center;
    }

    .owl-carousel .nav-btn {
        height: 54px;
        position: absolute;
        width: 26px;
        cursor: pointer;
        top: 40% !important;
    }

    .card {
        border-radius: 30px;
    }

    .owl-carousel .owl-prev.disabled,
    .owl-carousel .owl-next.disabled {
        pointer-events: none;
        opacity: 0.2;
    }

    .owl-carousel .prev-slide {
        background: url(nav-icon.png) no-repeat scroll 0 0;
        left: -33px;
    }

    .owl-carousel .next-slide {
        background: url(nav-icon.png) no-repeat scroll -24px 0px;
        right: -33px;
    }

    .owl-carousel .prev-slide:hover {
        background-position: 0px -53px;
    }

    .owl-carousel .next-slide:hover {
        background-position: -24px -53px;
    }

    span.img-text {
        text-decoration: none;
        outline: none;
        transition: all 0.4s ease;
        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        cursor: pointer;
        width: 100%;
        font-size: 23px;
        display: block;
        text-transform: capitalize;
    }

    span.img-text:hover {
        color: #2caae1;
    }
</style>
@endsection

@section('content')
<div class="row" style="height: 75vh;">
    @include('components.others.side-nav')
    <div class="col-lg-10 col-md-12 col-12 pl-0">
        <div class="carousel-wrap w-100 mt-0 px-0">
            <div class="owl-carousel owl-theme mr-5 owl-loaded owl-drag px-4">
                <div class="item" style=" max-width:53vh;">
                    <a href="#" class="showLoading">
                        <div class="close-windows-slider" onclick="show('container_down','main_place_event_down')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <g id="Grupo_2342" data-name="Grupo 2342" transform="translate(-826 -116)">
                                    <circle id="Elipse_82" data-name="Elipse 82" cx="18" cy="18" r="18" transform="translate(826 116)" fill="#fffe9c" />
                                    <path id="Icon_ionic-md-share" data-name="Icon ionic-md-share" d="M14.928,13.267a2.174,2.174,0,0,0-1.556.6l-5.7-3.3a2.672,2.672,0,0,0,.08-.556,2.671,2.671,0,0,0-.08-.556l5.625-3.258a2.387,2.387,0,1,0-.758-1.748,2.656,2.656,0,0,0,.08.556L6.989,8.261a2.4,2.4,0,0,0-1.636-.636A2.362,2.362,0,0,0,3,10.009a2.4,2.4,0,0,0,4.029,1.748l5.665,3.3a1.993,1.993,0,0,0-.08.516,2.314,2.314,0,1,0,2.314-2.3Z" transform="translate(833.198 124.045)" fill="#151515" class="text-black" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    <div class="card card-blog card-background categories mx-auto rounded-xl" data-animation="zooming" style="height: 467px;">
                        <div class="full-background" style="background-image: url('./assets/img/home/bg-home.jpg')"></div>
                        <div class="card-body pt-0 px-0">
                            <div class="content-top text-center bg-translucid w-100 p-3">
                                <h3 class=" h2 card-title mt-0 text-@yield('color') font-weight-bold mb-1 text-center">Catalina está <br>Mutando al Mundo</h3>
                                <small class="text-@yield('color') text-center lead">Únete en <a href="#" class="text-success"><u>www.mutaworld.com</u></a> y elige ser un Mutante</small>
                            </div>
                            <div class="content-bottom text-left w-100 p-4">
                                <div class="row p-2">
                                    <div class="col-6 text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35.153" height="35.168" viewBox="0 0 35.153 35.168">
                                            <g id="Grupo_2344" data-name="Grupo 2344" transform="translate(-697.198 -644.05)">
                                                <path id="Trazado_2807" data-name="Trazado 2807" d="M724.044,646.611a2.553,2.553,0,0,1,2.55-2.561h0c1.683,0,2.379,1.281,2.565,2.977.712,6.369,2.394,21.5,3.173,28.487a3.321,3.321,0,0,1-3.291,3.7H700.5a3.341,3.341,0,0,1-2.461-1.107,3.416,3.416,0,0,1-.823-2.6c.756-6.992,2.4-22.084,3.091-28.487.185-1.7.882-2.977,2.565-2.977h0a2.631,2.631,0,0,1,2.632,2.63v2.873a1.633,1.633,0,0,0,1.645,1.627H722.4a1.633,1.633,0,0,0,1.645-1.627Z" transform="translate(0 0)" fill="#fffe9c" fill-rule="evenodd" />
                                            </g>
                                        </svg>
                                        <br>
                                        <h4 class="text-success m-0 mt-3 lh-1">
                                            Has ahorrado
                                        </h4>
                                        <h3 class="text-success display-2 m-0 lh-1">
                                            8.3 kg
                                        </h3>
                                        <h4 class="text-success m-0 lh-1">
                                            de Plástico
                                        </h4>
                                    </div>
                                    <div class="col-6 p-0 d-flex align-items-end">
                                        <p class="text-success w-100 border-left border-success mt-auto pl-3">
                                            Eso equivale a
                                            <b class="font-weight-bold">486 litros</b> de agua
                                            y a <b class="font-weight-bold">3 kilogramos</b> de
                                            emisión de CO2.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="item" style=" max-width:53vh;">
                    <a href="#" class="showLoading">
                        <div class="close-windows-slider" onclick="show('container_down','main_place_event_down')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <g id="Grupo_2342" data-name="Grupo 2342" transform="translate(-826 -116)">
                                    <circle id="Elipse_82" data-name="Elipse 82" cx="18" cy="18" r="18" transform="translate(826 116)" fill="#FFA48E" />
                                    <path id="Icon_ionic-md-share" data-name="Icon ionic-md-share" d="M14.928,13.267a2.174,2.174,0,0,0-1.556.6l-5.7-3.3a2.672,2.672,0,0,0,.08-.556,2.671,2.671,0,0,0-.08-.556l5.625-3.258a2.387,2.387,0,1,0-.758-1.748,2.656,2.656,0,0,0,.08.556L6.989,8.261a2.4,2.4,0,0,0-1.636-.636A2.362,2.362,0,0,0,3,10.009a2.4,2.4,0,0,0,4.029,1.748l5.665,3.3a1.993,1.993,0,0,0-.08.516,2.314,2.314,0,1,0,2.314-2.3Z" transform="translate(833.198 124.045)" fill="#151515" class="text-black" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    <div class="card card-blog card-background categories mx-auto rounded-xl" data-animation="zooming" style="height: 467px;">
                        <div class="full-background" style="background-image: url('./assets/img/events/1.png')"></div>
                        <div class="card-body pt-0 px-0">
                            <div class="content-top text-center bg-translucid w-100 p-3">
                                <h3 class=" h2 card-title mt-0 text-danger font-weight-bold mb-1 text-center">Catalina está <br>Mutando al Mundo</h3>
                                <small class="text-danger text-center lead">Únete en <a href="#" class="text-danger"><u>www.mutaworld.com</u></a> y elige ser un Mutante</small>
                            </div>
                            <div class="content-bottom text-left w-100 p-4">
                                <div class="row p-2">
                                    <div class="col-6 text-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47.007" viewBox="0 0 47 47.007">
                                            <g id="Grupo_2347" data-name="Grupo 2347" transform="translate(-1083.575 -826.158)">
                                                <path id="Trazado_2809" data-name="Trazado 2809" d="M1103.773,830.679c.53-2.654,1.811-4.521,3.309-4.521s2.779,1.868,3.309,4.521a17.378,17.378,0,0,1,10.695,7.813,28.988,28.988,0,0,1,2.411,2.113,26.932,26.932,0,0,1,5.509,8.059c2,4.669,2.082,9.042.267,9.828-1.36.59-3.421-1.032-5.2-3.833a20.985,20.985,0,0,1-4.639,9.828,7.1,7.1,0,0,1,1.2,2.506c.747,2.8-.19,5.455-2.094,5.946-1.884.541-4.008-1.277-4.776-4.029a14.452,14.452,0,0,1-2.821,1.032c-.021.049-.043.049-.067.1-.788.786-2.035,2.014-2.823,2.8a1.055,1.055,0,0,1-1.464,0l-2.747-2.752a14.072,14.072,0,0,1-3.419-1.179l0,.049c-.747,2.752-2.9,4.619-4.8,4.127-1.9-.54-2.84-3.194-2.094-5.995a7.194,7.194,0,0,1,1.244-2.555,20.952,20.952,0,0,1-4.689-9.926c-1.776,2.85-3.843,4.472-5.207,3.882-1.816-.786-1.738-5.16.267-9.828a26.943,26.943,0,0,1,5.508-8.059,22.357,22.357,0,0,1,2.44-2.113A17.372,17.372,0,0,1,1103.773,830.679Z" transform="translate(0 0)" fill="#ffa48e" fill-rule="evenodd" />
                                            </g>
                                        </svg>

                                        <br>
                                        <h4 class="text-danger m-0 mt-3 lh-1">
                                            Has ahorrado
                                        </h4>
                                        <h3 class="text-danger display-2 m-0 lh-1">
                                            8.3 kg
                                        </h3>
                                        <h4 class="text-danger m-0 lh-1">
                                            de Plástico
                                        </h4>
                                    </div>
                                    <div class="col-6 p-0 d-flex align-items-end">
                                        <p class="text-danger w-100 border-left border-danger mt-auto pl-3">
                                            Eso equivale a
                                            <b class="font-weight-bold">486 litros</b> de agua
                                            y a <b class="font-weight-bold">3 kilogramos</b> de
                                            emisión de CO2.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="item" style=" max-width:53vh;">
                    <a href="#" class="showLoading">
                        <div class="close-windows-slider" onclick="show('container_down','main_place_event_down')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <g id="Grupo_2342" data-name="Grupo 2342" transform="translate(-826 -116)">
                                    <circle id="Elipse_82" data-name="Elipse 82" cx="18" cy="18" r="18" transform="translate(826 116)" fill="#fffe9c" />
                                    <path id="Icon_ionic-md-share" data-name="Icon ionic-md-share" d="M14.928,13.267a2.174,2.174,0,0,0-1.556.6l-5.7-3.3a2.672,2.672,0,0,0,.08-.556,2.671,2.671,0,0,0-.08-.556l5.625-3.258a2.387,2.387,0,1,0-.758-1.748,2.656,2.656,0,0,0,.08.556L6.989,8.261a2.4,2.4,0,0,0-1.636-.636A2.362,2.362,0,0,0,3,10.009a2.4,2.4,0,0,0,4.029,1.748l5.665,3.3a1.993,1.993,0,0,0-.08.516,2.314,2.314,0,1,0,2.314-2.3Z" transform="translate(833.198 124.045)" fill="#151515" class="text-black" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    <div class="card card-blog card-background categories mx-auto rounded-xl" data-animation="zooming" style="height: 467px;">
                        <div class="full-background" style="background-image: url('./assets/img/home/bg-home.jpg')"></div>
                        <div class="card-body pt-0 px-0">
                            <div class="content-top text-center bg-translucid w-100 p-3">
                                <h3 class=" h2 card-title mt-0 text-@yield('color') font-weight-bold mb-1 text-center">Catalina está <br>Mutando al Mundo</h3>
                                <small class="text-@yield('color') text-center lead">Únete en <a href="#" class="text-success"><u>www.mutaworld.com</u></a> y elige ser un Mutante</small>
                            </div>
                            <div class="content-bottom text-left w-100 p-4">
                                <div class="row p-2">
                                    <div class="col-6 text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35.153" height="35.168" viewBox="0 0 35.153 35.168">
                                            <g id="Grupo_2344" data-name="Grupo 2344" transform="translate(-697.198 -644.05)">
                                                <path id="Trazado_2807" data-name="Trazado 2807" d="M724.044,646.611a2.553,2.553,0,0,1,2.55-2.561h0c1.683,0,2.379,1.281,2.565,2.977.712,6.369,2.394,21.5,3.173,28.487a3.321,3.321,0,0,1-3.291,3.7H700.5a3.341,3.341,0,0,1-2.461-1.107,3.416,3.416,0,0,1-.823-2.6c.756-6.992,2.4-22.084,3.091-28.487.185-1.7.882-2.977,2.565-2.977h0a2.631,2.631,0,0,1,2.632,2.63v2.873a1.633,1.633,0,0,0,1.645,1.627H722.4a1.633,1.633,0,0,0,1.645-1.627Z" transform="translate(0 0)" fill="#fffe9c" fill-rule="evenodd" />
                                            </g>
                                        </svg>
                                        <br>
                                        <h4 class="text-success m-0 mt-3 lh-1">
                                            Has ahorrado
                                        </h4>
                                        <h3 class="text-success display-2 m-0 lh-1">
                                            8.3 kg
                                        </h3>
                                        <h4 class="text-success m-0 lh-1">
                                            de Plástico
                                        </h4>
                                    </div>
                                    <div class="col-6 p-0 d-flex align-items-end">
                                        <p class="text-success w-100 border-left border-success mt-auto pl-3">
                                            Eso equivale a
                                            <b class="font-weight-bold">486 litros</b> de agua
                                            y a <b class="font-weight-bold">3 kilogramos</b> de
                                            emisión de CO2.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="item" style=" max-width:53vh;">
                    <a href="#" class="showLoading">
                        <div class="close-windows-slider" onclick="show('container_down','main_place_event_down')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <g id="Grupo_2342" data-name="Grupo 2342" transform="translate(-826 -116)">
                                    <circle id="Elipse_82" data-name="Elipse 82" cx="18" cy="18" r="18" transform="translate(826 116)" fill="#FFA48E" />
                                    <path id="Icon_ionic-md-share" data-name="Icon ionic-md-share" d="M14.928,13.267a2.174,2.174,0,0,0-1.556.6l-5.7-3.3a2.672,2.672,0,0,0,.08-.556,2.671,2.671,0,0,0-.08-.556l5.625-3.258a2.387,2.387,0,1,0-.758-1.748,2.656,2.656,0,0,0,.08.556L6.989,8.261a2.4,2.4,0,0,0-1.636-.636A2.362,2.362,0,0,0,3,10.009a2.4,2.4,0,0,0,4.029,1.748l5.665,3.3a1.993,1.993,0,0,0-.08.516,2.314,2.314,0,1,0,2.314-2.3Z" transform="translate(833.198 124.045)" fill="#151515" class="text-black" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    <div class="card card-blog card-background categories mx-auto rounded-xl" data-animation="zooming" style="height: 467px;">
                        <div class="full-background" style="background-image: url('./assets/img/events/1.png')"></div>
                        <div class="card-body pt-0 px-0">
                            <div class="content-top text-center bg-translucid w-100 p-3">
                                <h3 class=" h2 card-title mt-0 text-danger font-weight-bold mb-1 text-center">Catalina está <br>Mutando al Mundo</h3>
                                <small class="text-danger text-center lead">Únete en <a href="#" class="text-danger"><u>www.mutaworld.com</u></a> y elige ser un Mutante</small>
                            </div>
                            <div class="content-bottom text-left w-100 p-4">
                                <div class="row p-2">
                                    <div class="col-6 text-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47.007" viewBox="0 0 47 47.007">
                                            <g id="Grupo_2347" data-name="Grupo 2347" transform="translate(-1083.575 -826.158)">
                                                <path id="Trazado_2809" data-name="Trazado 2809" d="M1103.773,830.679c.53-2.654,1.811-4.521,3.309-4.521s2.779,1.868,3.309,4.521a17.378,17.378,0,0,1,10.695,7.813,28.988,28.988,0,0,1,2.411,2.113,26.932,26.932,0,0,1,5.509,8.059c2,4.669,2.082,9.042.267,9.828-1.36.59-3.421-1.032-5.2-3.833a20.985,20.985,0,0,1-4.639,9.828,7.1,7.1,0,0,1,1.2,2.506c.747,2.8-.19,5.455-2.094,5.946-1.884.541-4.008-1.277-4.776-4.029a14.452,14.452,0,0,1-2.821,1.032c-.021.049-.043.049-.067.1-.788.786-2.035,2.014-2.823,2.8a1.055,1.055,0,0,1-1.464,0l-2.747-2.752a14.072,14.072,0,0,1-3.419-1.179l0,.049c-.747,2.752-2.9,4.619-4.8,4.127-1.9-.54-2.84-3.194-2.094-5.995a7.194,7.194,0,0,1,1.244-2.555,20.952,20.952,0,0,1-4.689-9.926c-1.776,2.85-3.843,4.472-5.207,3.882-1.816-.786-1.738-5.16.267-9.828a26.943,26.943,0,0,1,5.508-8.059,22.357,22.357,0,0,1,2.44-2.113A17.372,17.372,0,0,1,1103.773,830.679Z" transform="translate(0 0)" fill="#ffa48e" fill-rule="evenodd" />
                                            </g>
                                        </svg>

                                        <br>
                                        <h4 class="text-danger m-0 mt-3 lh-1">
                                            Has ahorrado
                                        </h4>
                                        <h3 class="text-danger display-2 m-0 lh-1">
                                            8.3 kg
                                        </h3>
                                        <h4 class="text-danger m-0 lh-1">
                                            de Plástico
                                        </h4>
                                    </div>
                                    <div class="col-6 p-0 d-flex align-items-end">
                                        <p class="text-danger w-100 border-left border-danger mt-auto pl-3">
                                            Eso equivale a
                                            <b class="font-weight-bold">486 litros</b> de agua
                                            y a <b class="font-weight-bold">3 kilogramos</b> de
                                            emisión de CO2.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
<script>
    $('.owl-carousel').owlCarousel({
        margin: 40,
        nav: true,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        navText: ["<div class='nav-btn prev-slide'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='70' viewBox='0 0 16.787 45.632'><path id='Trazado_2810' data-name='Trazado 2810' d='M11680.462,302.5l-16.273,21.742,16.273,23.6' transform='translate(-11663.881 -302.35)' fill='none' stroke='#fffe9c' stroke-width='0.5'/></svg></div>",
            "<div class='nav-btn next-slide'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='70' viewBox='0 0 16.787 45.632'><path id='Trazado_2811' data-name='Trazado 2811' d='M11664.188,302.5l16.273,21.742-16.273,23.6' transform='translate(-11663.982 -302.35)' fill='none' stroke='#fffe9c' stroke-width='0.5'/></svg></div>"
        ],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
</script>
@endsection