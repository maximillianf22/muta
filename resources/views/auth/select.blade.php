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
            <div class="card-body">
                <a href="/login" class="text-black">
                    <div class="row p-5 border-bottom border-dark">
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
                </a>
                <a href="/registro" class="text-black">
                    <div class="row p-5 border-bottom border-dark">
                        <div class="col-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42.986" height="33.427" viewBox="0 0 42.986 33.427" class="text-white">
                                <path id="Icon_awesome-home" data-name="Icon awesome-home" d="M20.922,10.925,7.164,22.257v12.23A1.194,1.194,0,0,0,8.358,35.68l8.362-.022a1.194,1.194,0,0,0,1.188-1.194V27.323A1.194,1.194,0,0,1,19.1,26.129h4.776a1.194,1.194,0,0,1,1.194,1.194V34.46a1.194,1.194,0,0,0,1.194,1.2l8.359.023a1.194,1.194,0,0,0,1.194-1.194V22.248L22.064,10.925A.91.91,0,0,0,20.922,10.925Zm21.732,7.7-6.238-5.142V3.149a.9.9,0,0,0-.9-.9H31.341a.9.9,0,0,0-.9.9V8.567l-6.681-5.5a3.582,3.582,0,0,0-4.552,0L.324,18.627A.9.9,0,0,0,.2,19.888l1.9,2.313a.9.9,0,0,0,1.262.122L20.922,7.866a.91.91,0,0,1,1.142,0L39.617,22.323a.9.9,0,0,0,1.261-.119l1.9-2.313a.9.9,0,0,0-.127-1.263Z" transform="translate(0.001 -2.254)" fill="#fff" />
                            </svg>
                        </div>
                        <div class="col-8 my-auto text-white">
                            Soy hogar
                        </div>
                    </div>
                </a>
                <a href="/registro-empresa" class="text-black">
                    <div class="row p-5">
                        <div class="col-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.919" height="41.051" viewBox="0 0 35.919 41.051">
                                <path id="Icon_awesome-building" data-name="Icon awesome-building" d="M34.957,38.485h-1.6V1.924A1.924,1.924,0,0,0,31.429,0H4.49A1.924,1.924,0,0,0,2.566,1.924V38.485H.962A.962.962,0,0,0,0,39.447v1.6H35.919v-1.6A.962.962,0,0,0,34.957,38.485ZM10.263,6.093a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962V9.3a.962.962,0,0,1-.962.962H11.225a.962.962,0,0,1-.962-.962Zm0,7.7a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962V17a.962.962,0,0,1-.962.962H11.225A.962.962,0,0,1,10.263,17Zm4.169,11.866H11.225a.962.962,0,0,1-.962-.962V21.487a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962v3.207A.962.962,0,0,1,14.432,25.657Zm6.093,12.828H15.394V31.75a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm5.131-13.79a.962.962,0,0,1-.962.962H21.487a.962.962,0,0,1-.962-.962V21.487a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm0-7.7a.962.962,0,0,1-.962.962H21.487A.962.962,0,0,1,20.525,17V13.79a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Zm0-7.7a.962.962,0,0,1-.962.962H21.487a.962.962,0,0,1-.962-.962V6.093a.962.962,0,0,1,.962-.962h3.207a.962.962,0,0,1,.962.962Z" fill="#151515" />
                            </svg>
                        </div>
                        <div class="col-8 my-auto">
                            <p class="text-black">Soy empresa</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@endsection