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
    <div class="col-lg-10 col-md-12 col-12 pl-0">
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
                        <h4 class="text-@yield('color') font-weight-bold mb-4">
                            Historial / Chats
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills nav-pills-success nav-pills-icons" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i>
                                    Activos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                    Inactivos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                                    <i class="now-ui-icons ui-1_calendar-60"></i>
                                    Soporte
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space px-2">
                            <div class="tab-pane active" id="dashboard-1">
                                <div class="table-responsive">
                                    <table class="table tablesorter table-sm table-shopping" id="">
                                        <thead class="">
                                            <tr>
                                                <th class="text-@yield('color')"></th>
                                                <th class="text-@yield('color')">Nombre</th>
                                                <th class="text-@yield('color')">Apellido</th>
                                                <th class="text-@yield('color')">Fecha</th>
                                                <th class="text-@yield('color')">Ciudad</th>
                                                <th class="text-@yield('color')">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jeimi</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Activo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Activo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Activo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Activo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="schedule-1">
                                <div class="table-responsive">
                                    <table class="table tablesorter table-sm table-shopping" id="">
                                        <thead class="">
                                            <tr>
                                                <th class="text-@yield('color')"></th>
                                                <th class="text-@yield('color')">Nombre</th>
                                                <th class="text-@yield('color')">Apellido</th>
                                                <th class="text-@yield('color')">Fecha</th>
                                                <th class="text-@yield('color')">Ciudad</th>
                                                <th class="text-@yield('color')">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-1.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Inactivo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-1.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Inactivo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-1.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Inactivo</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-1.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Inactivo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tasks-1">
                                <div class="table-responsive">
                                    <table class="table tablesorter table-sm table-shopping" id="">
                                        <thead class="">
                                            <tr>
                                                <th class="text-@yield('color')"></th>
                                                <th class="text-@yield('color')">Nombre</th>
                                                <th class="text-@yield('color')">Apellido</th>
                                                <th class="text-@yield('color')">Fecha</th>
                                                <th class="text-@yield('color')">Ciudad</th>
                                                <th class="text-@yield('color')">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-2.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Soporte</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-2.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Soporte</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-2.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Soporte</td>
                                            </tr>
                                            <tr>
                                                <td class="text-@yield('color')">
                                                    <a href="/chat">
                                                        <img src="./assets/img/support-2.png" alt="..." class="rounded-circle" style="width:50px; height: 50px;">
                                                    </a>
                                                </td>
                                                <td class="text-@yield('color')">Jaime</td>
                                                <td class="text-@yield('color')">Castillo</td>
                                                <td class="text-@yield('color')">23/02/2021</td>
                                                <td class="text-@yield('color')">Barranquilla</td>
                                                <td class="text-@yield('color')">Soporte</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
@endsection