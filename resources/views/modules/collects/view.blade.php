@extends('layout.app')
@section('title', 'Recolectar con Muta')
@section('color', 'success')
@section('active-collects', 'active')

@section('css')
<style>
    ::-webkit-input-placeholder {
        color: #fffe9c !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #fffe9c !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #fffe9c !important;
    }

    :-ms-input-placeholder {
        color: #fffe9c !important;
    }

    ::-webkit-scrollbar-thumb {
        background: #fffe9c !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }

    .form-group.no-border .input-group-append .input-group-text,
    .form-group.no-border .input-group-prepend .input-group-text,
    .input-group.no-border .input-group-append .input-group-text,
    .input-group.no-border .input-group-prepend .input-group-text {
        background-color: #2c2c2c;
        border: none;
    }

    .form-group.no-border .form-control,
    .form-group.no-border .form-control+.input-group-append .input-group-text,
    .form-group.no-border .form-control+.input-group-prepend .input-group-text,
    .input-group.no-border .form-control,
    .input-group.no-border .form-control+.input-group-append .input-group-text,
    .input-group.no-border .form-control+.input-group-prepend .input-group-text {
        background-color: #2c2c2c;
        border: medium none;
    }
</style>
@endsection

@section('content')
<div class="row pt-2" style="height: 75vh;">
    <div class="col-12 pl-0">
        <div class="close-windows" onclick="show('container_up','main_place_video_up')">
            <svg xmlns="http://www.w3.org/2000/svg" width="37.477" height="37.477" viewBox="0 0 37.477 37.477">
                <g id="Grupo_2140" data-name="Grupo 2140" transform="translate(-622.132 -563.13)">
                    <circle id="Elipse_6" data-name="Elipse 6" class="text-@yield('color')" cx="13.5" cy="13.5" r="13.5" transform="translate(627.271 569.271)" fill="#cda06f" />
                    <text id="_" data-name="+" transform="translate(634.859 587.879) rotate(45)" fill="#272727" font-size="31" font-family="Helvetica-Light, Helvetica" font-weight="300">
                        <tspan x="-10.23" y="0">+</tspan>
                    </text>
                </g>
            </svg>
        </div>
        <div class="w-100">
            <a href="#" class="showLoading">
                <div class="card card-blog card-background categories mx-auto rounded-lg mt-0" data-animation="zooming" style="min-height: 75vh !important;">
                    <div class="full-background mb-0" style="background-image: url('./assets/img/events/1.png')"></div>
                    <iframe style="z-index:4;" width="100%" height="100%" src="https://www.youtube.com/embed/5q2HSdgO7CA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection