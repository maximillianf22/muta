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

    ::-webkit-scrollbar-thumb {
        background: #fdfdfd !important;
        border-radius: 10px;
    }

    ::-webkit-scrollbar {
        width: 11px;
        border-radius: 10px;
    }
</style>
<link rel="stylesheet" href="https://github.hubspot.com/odometer/themes/odometer-theme-default.css" />
@endsection

@section('content')
<div class="bag">
    <div id="odometer" class="odometer bag-number display-1 text-success">0 </div>
    <div class=" bag-text display-1 text-success">ton</div>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="316.497" height="185" viewBox="0 0 316.497 185" class="text-success">
        <defs>
            <clipPath id="clip-path">
                <rect id="Rectángulo_1783" data-name="Rectángulo 1783" width="41" height="67" transform="translate(237 290)" fill="none" stroke="#707070" stroke-width="1" />
            </clipPath>
        </defs>
        <g id="Grupo_2366" data-name="Grupo 2366" transform="translate(-157.503 -190)">
            <g id="Grupo_2230" data-name="Grupo 2230" transform="translate(165 -65)">
                <g id="Grupo_2229" data-name="Grupo 2229">
                    <text id="de_plástico_Recolectado" data-name="de plástico Recolectado" transform="translate(59 355)" fill="#fffe9c" font-size="38" font-family="Helvetica-Bold, Helvetica" font-weight="700">
                        <tspan x="0" y="0">de plástico</tspan>
                        <tspan x="0" y="35">Recolectado</tspan>
                    </text>
                </g>
                <text id="Solicita_la_Recolección" data-name="Solicita la Recolección" transform="translate(59 437)" fill="#fffe9c" font-size="14" font-family="Helvetica-Bold, Helvetica" font-weight="700" text-decoration="underline">
                    <tspan x="0" y="0">Solicita la Recolección</tspan>
                </text>
            </g>
            <g id="Grupo_2344" data-name="Grupo 2344" transform="translate(-539.695 -453.57)">
                <path id="Trazado_2807" data-name="Trazado 2807" d="M738.816,648.021a3.957,3.957,0,0,1,3.953-3.971h0c2.609,0,3.689,1.985,3.976,4.615,1.1,9.874,3.712,33.323,4.918,44.163a5.148,5.148,0,0,1-5.1,5.742H702.319a5.18,5.18,0,0,1-3.815-1.717,5.3,5.3,0,0,1-1.276-4.025c1.172-10.84,3.723-34.236,4.792-44.163.287-2.629,1.367-4.615,3.976-4.615h0a4.079,4.079,0,0,1,4.079,4.078v4.454a2.532,2.532,0,0,0,2.551,2.522h23.638a2.532,2.532,0,0,0,2.551-2.522Z" transform="translate(0 0)" fill="#fffe9c" fill-rule="evenodd" />
            </g>
        </g>
    </svg>
</div>
<div class="animals">
<div id="odometer1" class="odometer animals-number display-1 text-info">0 </div>

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="252.511" height="185" viewBox="0 0 252.511 185" class="text-blue">
        <defs>
            <clipPath id="clip-path">
                <rect id="Rectángulo_1784" data-name="Rectángulo 1784" width="43" height="61" transform="translate(569 293)" fill="none" stroke="#707070" stroke-width="1" />
            </clipPath>
        </defs>
        <g id="Grupo_2367" data-name="Grupo 2367" transform="translate(-633.489 -245)">
            <g id="Grupo_2234" data-name="Grupo 2234" transform="translate(-77.967 -10)">
                <g id="Grupo_2233" data-name="Grupo 2233">
                    <text id="Eventos_realizados" data-name="Eventos realizados" transform="translate(777.967 355)" fill="#9ac9f5" font-size="38" font-family="Helvetica-Bold, Helvetica" font-weight="700">
                        <tspan x="0" y="0">Eventos</tspan>
                        <tspan x="0" y="35">realizados</tspan>
                    </text>
                </g>
                <text id="Asiste_a_los_Eventos" data-name="Asiste a los Eventos" transform="translate(779 437)" fill="#9ac9f5" font-size="13" font-family="Helvetica-Bold, Helvetica" font-weight="700" text-decoration="underline">
                    <tspan x="0" y="0">Asiste a los Eventos</tspan>
                </text>
            </g>
            <g id="Grupo_2347" data-name="Grupo 2347" transform="translate(-450.086 -581.158)">
                <path id="Trazado_2809" data-name="Trazado 2809" d="M1107,831.4c.615-3.078,2.1-5.244,3.837-5.244s3.223,2.166,3.837,5.244a20.155,20.155,0,0,1,12.4,9.062,33.613,33.613,0,0,1,2.8,2.451,31.235,31.235,0,0,1,6.39,9.347c2.324,5.415,2.415,10.487.309,11.4-1.578.684-3.968-1.2-6.026-4.445a24.34,24.34,0,0,1-5.38,11.4,8.237,8.237,0,0,1,1.389,2.907c.866,3.249-.22,6.326-2.428,6.9-2.185.627-4.648-1.482-5.539-4.673a16.762,16.762,0,0,1-3.272,1.2c-.025.057-.05.057-.077.114-.914.912-2.36,2.336-3.275,3.249a1.224,1.224,0,0,1-1.7,0l-3.186-3.192a16.325,16.325,0,0,1-3.965-1.368l0,.057c-.866,3.191-3.359,5.357-5.566,4.787-2.208-.626-3.294-3.7-2.428-6.953a8.343,8.343,0,0,1,1.443-2.963,24.3,24.3,0,0,1-5.439-11.513c-2.06,3.305-4.458,5.186-6.039,4.5-2.106-.912-2.015-5.984.31-11.4a31.251,31.251,0,0,1,6.389-9.347,25.942,25.942,0,0,1,2.83-2.451A20.148,20.148,0,0,1,1107,831.4Z" transform="translate(0 0)" fill="#9ac9f5" fill-rule="evenodd" />
            </g>
        </g>
    </svg>
</div>
<div class="cars">
<div id="odometer2" class="odometer cars-number display-1 text-danger">0 </div>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="271.53" height="185" viewBox="0 0 271.53 185" class="text-danger">
        <defs>
            <clipPath id="clip-path">
                <rect id="Rectángulo_1782" data-name="Rectángulo 1782" width="43" height="61" transform="translate(569 293)" fill="none" stroke="#707070" stroke-width="1" />
            </clipPath>
        </defs>
        <g id="Grupo_2368" data-name="Grupo 2368" transform="translate(-412.47 -405)">
            <g id="Grupo_2232" data-name="Grupo 2232" transform="translate(32 150)">
                <g id="Grupo_2231" data-name="Grupo 2231">
                    <text id="Mutaciones_a_la_venta" data-name="Mutaciones a la venta" transform="translate(442 355)" fill="#ffa48e" font-size="38" font-family="Helvetica-Bold, Helvetica" font-weight="700">
                        <tspan x="0" y="0">Mutaciones</tspan>
                        <tspan x="0" y="35">a la venta</tspan>
                    </text>
                </g>
                <text id="Compra_los_Productos" data-name="Compra los Productos" transform="translate(442 437)" fill="#ffa48e" font-size="13" font-family="Helvetica-Bold, Helvetica" font-weight="700" text-decoration="underline">
                    <tspan x="0" y="0">Compra los Productos</tspan>
                </text>
            </g>
            <g id="Grupo_2348" data-name="Grupo 2348" transform="translate(-477.915 -239.076)">
                <path id="Trazado_2812" data-name="Trazado 2812" d="M937.347,691.6a1.986,1.986,0,0,0-1.365.5,1.5,1.5,0,0,0-.564,1.176v2.855a2.4,2.4,0,0,1-.728,1.735,2.335,2.335,0,0,1-1.755.728H932a2.335,2.335,0,0,1-1.755-.728,2.4,2.4,0,0,1-.728-1.735v-2.855a1.5,1.5,0,0,0-.564-1.176,1.986,1.986,0,0,0-1.365-.5H907.717a2,2,0,0,0-1.365.5,1.5,1.5,0,0,0-.564,1.176v2.855a2.374,2.374,0,0,1-.728,1.735,2.326,2.326,0,0,1-1.755.728h-.937a2.342,2.342,0,0,1-1.754-.728,2.4,2.4,0,0,1-.728-1.735v-2.855a1.5,1.5,0,0,0-.564-1.176,1.987,1.987,0,0,0-1.365-.5H896.2a5.924,5.924,0,0,1-4.847-2.575,5.823,5.823,0,0,1-.5-5.485c.672-1.567,4.243-8.62,4.243-8.62s2.832-20.375,3.622-26.028a5.6,5.6,0,0,1,5.535-4.814H931a5.58,5.58,0,0,1,5.518,4.7c.863,5.6,3.757,26.141,3.757,26.141s3.588,7.165,4.226,8.788a5.76,5.76,0,0,1-.587,5.374A5.855,5.855,0,0,1,939.1,691.6Z" fill="#ffa48e" fill-rule="evenodd" />
            </g>
        </g>
    </svg>

</div>
@include('components.others.footer-nav')
@endsection

@section('js')
<script src="http://github.hubspot.com/odometer/odometer.js"></script>
<script>
    setTimeout(function() {
        odometer.innerHTML = 1560;
    }, 800);

    setTimeout(function() {
        odometer1.innerHTML = 568;
    }, 800);

    setTimeout(function() {
        odometer2.innerHTML = 122;
    }, 800);
</script>
@endsection