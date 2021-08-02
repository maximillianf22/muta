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

    .first-place {
        position: absolute;
        left: 39%;
        right: 39%;
        top: 5%;
    }

    .second-place {
        position: absolute;
        left: 39%;
        right: 39%;
        bottom: 45%;
        top: 45%;
    }

    .third-place {
        position: absolute;
        left: 39%;
        right: 39%;
        bottom: 5%;
    }

    .first-text {
        position: absolute;
        top: 5%;
    }

    .second-text {
        position: absolute;
        bottom: 45%;
        top: 45%;
    }

    .third-text {
        position: absolute;
        bottom: 5%;
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
                        <h4 class="text-@yield('color') font-weight-bold mb-5">
                            Historial / Detalles
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-@yield('color') font-weight-bold m-0">
                            Activos
                        </h4>
                        <div class="bg-dark w-100 my-2" style="min-height: 1.7vh;max-height: 10.7vh;border-radius: 1rem;">
                            <div class="media product" style="padding-top: 1vh;padding-bottom: 1vh;padding-left: 1.2vh;">
                                <a class="pull-left img-fluid rounded-circle shadow-sm " href="javascript:;" style="background-image: url(./assets/img/support-1.png);background-position: center;background-size: cover;height: 60px;width: 60px;"></a>
                                <div class="media-body ml-2 my-auto p-0">
                                    <p class="text-gray lead" style="font-size: 12px;">
                                        Nombre: Camilo <br>
                                        Fecha: 02/02/2021 <br>
                                        Ubicación: Soledad
                                    </p>
                                </div>
                                <div class="m-0 pull-right py-1 pr-3 text-center">
                                    <p class="text-gray m-0 lh-1">Estado</p>
                                    <button class="btn m-0 btn-blue py-0 btn-sm px-2 text-black rounded-lg my-1">Pendiente</button>
                                    <p class="text-gray m-0 lh-1 mt-1" style="font-size: 8px;"><u>Ver detalle</u></p>
                                </div>
                                <a class="btn btn-success btn-icon btn-round pull-right py-1 text-dark px-3 my-auto mr-3 rounded-lg" type="button" href="/chat">
                                    <i class="fas fa-comments"></i>
                                </a>
                            </div>
                        </div>
                        <h4 class="text-@yield('color') mt-4">
                            Detalles
                        </h4>
                        <div class="row">
                            <div class="col-2 p-0 text-center">

                                <div class="first-place">
                                    <div class="place-success">
                                        <i class="fas fa-circle text-success" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <div class="second-place">
                                    <div class="place-incomplete">
                                        <i class="fas fa-circle text-gray" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <div class="third-place">
                                    <div class="place-incomplete">
                                        <i class="fas fa-circle text-gray" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="177" viewBox="0 0 4 177">
                                    <rect id="back" width="4" height="177" rx="2" fill="#bfbfbf" />
                                </svg>

                            </div>
                            <div class="col-10 p-0">
                                <div class="first-text">
                                    <div class="place-success">
                                        <p class="m-0 text-gray font-weight-light"><b class="mr-3 m-0 font-weight-bold">En asignacion del Reciclador</b> 3:57 PM</p>
                                    </div>
                                </div>

                                <div class="second-text">
                                    <div class="place-incomplete">
                                        <p class="m-0 text-gray font-weight-light"><b class="mr-3 m-0 font-weight-bold">En camino a tu punto de recolección</b> 1:57 PM</p>
                                    </div>
                                </div>

                                <div class="third-text">
                                    <div class="place-incomplete">
                                        <p class="m-0 text-gray font-weight-light"><b class="mr-3 m-0 font-weight-bold">Procesando en planta</b> 9:57 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-success btn-lg text-black m-0 rounded-lg py-2">Certificado PDF</button>
                            <p class="text-gray mt-2"><em>No disponible</em></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-xl">
                            <div id="map" class="rounded-lg" style="height: 60vh;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.others.footer-nav')
@include('components.modals.modal-draw')
@endsection

@section('js')
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 10.956775,
                lng: -74.762537
            },
            zoom: 18,
            mapTypeId: 'roadmap',
            disableDefaultUI: true,
        });

        var marker = "{{asset('assets/img/marker.svg')}}";

        var marker010 = new google.maps.Marker({
            position: {
                lat: 10.956775,
                lng: -74.762537
            },
            map: map,
            icon: marker,
        });
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
</script>
@endsection