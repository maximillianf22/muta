<nav class="navbar navbar-expand-lg navbar-transparent pt-3">
    <div class="container-fluid">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="195.498" height="48.054" viewBox="0 0 195.498 48.054">
                    <g id="Grupo_1748" data-name="Grupo 1748" transform="translate(695.73 -524.858)" class="text-@yield('color')">
                        <path id="Trazado_2688" data-name="Trazado 2688" d="M-651.939,524.858h-39.529a4.262,4.262,0,0,0-4.262,4.262v39.529a4.262,4.262,0,0,0,4.262,4.262h39.529a4.263,4.263,0,0,0,4.263-4.262V529.12A4.263,4.263,0,0,0-651.939,524.858Zm-16.425,27.131h-1.28v-4.406h-.018l-1.524,4.406h-1.054l-1.524-4.363h-.018v4.363h-1.28v-6.218h1.924l1.454,4.276h.018l1.376-4.276h1.924Z" transform="translate(0)" fill="#@yield('hexacolor')" fill-rule="evenodd" />
                        <g id="Grupo_1679" data-name="Grupo 1679" transform="translate(-548.28 524.858)">
                            <path id="Trazado_2689" data-name="Trazado 2689" d="M-279.728,579.464l-.81,2.282h1.611l-.784-2.282Z" transform="translate(303.752 -557.018)" fill="#@yield('hexacolor')" fill-rule="evenodd" />
                            <path id="Trazado_2690" data-name="Trazado 2690" d="M-291.057,540.151c-4.686-3.563-13.855-10.522-18.716-14.214a5.337,5.337,0,0,0-6.432,0c-4.861,3.692-14.029,10.652-18.745,14.214a5.271,5.271,0,0,0-1.834,5.722c1.8,5.811,5.414,17.4,7.277,23.337a5.268,5.268,0,0,0,5.036,3.7h22.965a5.268,5.268,0,0,0,5.035-3.7c1.863-5.94,5.472-17.526,7.277-23.337A5.238,5.238,0,0,0-291.057,540.151Zm-20.3,11.838-.471-1.384h-2.325l-.488,1.384h-1.376l2.351-6.218h1.4l2.325,6.218Z" transform="translate(337.013 -524.858)" fill="#@yield('hexacolor')" fill-rule="evenodd" />
                        </g>
                        <path id="Trazado_2691" data-name="Trazado 2691" d="M-552.13,524.858a24.027,24.027,0,0,0-24.027,24.026,24.027,24.027,0,0,0,24.027,24.027A24.028,24.028,0,0,0-528.1,548.884,24.027,24.027,0,0,0-552.13,524.858Zm2.648,24.716a2.356,2.356,0,0,1-.705,1.876,2.874,2.874,0,0,1-1.951.614,2.862,2.862,0,0,1-1.955-.61,2.377,2.377,0,0,1-.693-1.881v-3.867h1.368v3.867a2.8,2.8,0,0,0,.044.5,1,1,0,0,0,.182.431,1,1,0,0,0,.388.3,1.573,1.573,0,0,0,.666.118,1.28,1.28,0,0,0,1.01-.327,1.552,1.552,0,0,0,.279-1.023v-3.867h1.367Z" transform="translate(-70.423)" fill="#@yield('hexacolor')" />
                        <path id="Trazado_2692" data-name="Trazado 2692" d="M-410.395,544.326c-4.887-4.908-12.671-12.672-17.558-17.581a6.475,6.475,0,0,0-4.584-1.888,6.452,6.452,0,0,0-4.541,1.888c-4.93,4.908-12.671,12.672-17.6,17.581a6.409,6.409,0,0,0-1.86,4.557,6.409,6.409,0,0,0,1.86,4.557c4.93,4.908,12.671,12.673,17.6,17.581a6.451,6.451,0,0,0,4.541,1.887,6.474,6.474,0,0,0,4.584-1.887c4.887-4.908,12.671-12.673,17.558-17.581a6.449,6.449,0,0,0,1.9-4.557A6.449,6.449,0,0,0-410.395,544.326Zm-19.6,2.594h-1.864v5.068h-1.367v-5.068h-1.864v-1.15h5.095Z" transform="translate(-140.872)" fill="#@yield('hexacolor')" fill-rule="evenodd" />
                    </g>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-transparent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse align-items-end flex-column bd-highlight w-100" id="example-navbar-transparent">
            <ul class="navbar-nav ml-auto d-flex bd-highlight w-100 align-items-end">
                <li class="nav-item p-2 flex-fill bd-highlight text-right">
                    <a class="nav-link text-@yield('color')" href="#">
                        <i class="fa fa-search mr-3"></i> Buscar
                    </a>
                </li>
                @if(Route::current()->getName() == 'home')
                <li class="nav-item p-2 flex-fill bd-highlight text-right">
                    <a class="nav-link text-@yield('color')" href="/seleccionar">
                        Registro de mutantes
                    </a>
                </li>
                @else
                <li class="dropdown nav-item p-2 flex-fill bd-highlight text-right">
                    <a href="#" class="dropdown-toggle nav-link text-@yield('color')" data-toggle="dropdown">
                        <i class="fa fa-cogs d-lg-none d-xl-none  text-black"></i> Catalina Muta
                    </a>
                        <div class="dropdown-menu dropdown-with-icons dropdown-menu-right bg-translucid rounded-lg">
                            <a href="/perfil" class="dropdown-item text-@yield('color')">
                                Perfil <i class="fa fa-user text-@yield('color') float-right ml-3 mr-0"></i>
                            </a>
                            <a href="/billetera" class="dropdown-item text-black">
                                Billetera <i class="fas fa-wallet text-black float-right ml-3 mr-0"></i>
                            </a>
                            <a href="/historial-chats" class="dropdown-item text-black">
                                Historial <i class="fa fa-history text-black float-right ml-3 mr-0"></i>
                            </a>
                            <a href="/" class="dropdown-item text-black">
                                Cerrar Sesión <i class="fa fa-sign-out-alt text-black float-right ml-3 mr-0"></i>
                            </a>
                        </div>
                </li>
                @endif
                <li class="nav-item p-2 flex-fill bd-highlight text-right text-@yield('color')">
                    <a class="nav-link text-@yield('color')" href="#" data-toggle="modal" data-target="#cartModal">
                        <svg id="Grupo_1715" data-name="Grupo 1715" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="Trazado_2704" data-name="Trazado 2704" d="M2181.12,761.717l-15.99-1.2-1.06-2.558a1.746,1.746,0,0,0-1.638-.995h-1.409a1.516,1.516,0,1,0,0,3h.183l2.9,7,2.137,5.322c.574,1.356,1.06,2.725,3.163,2.725h9.229c1.747,0,3.708-1.141,4.068-2.725l1.582-7.834A2.969,2.969,0,0,0,2181.12,761.717Z" transform="translate(-2159.283 -756.96)" fill="#fff" />
                            <path id="Trazado_2705" data-name="Trazado 2705" d="M2217.355,892.865a2.979,2.979,0,1,0,2.979,2.979A2.979,2.979,0,0,0,2217.355,892.865Z" transform="translate(-2206.673 -873.868)" fill="#fff" />
                            <path id="Trazado_2706" data-name="Trazado 2706" d="M2273.728,892.865a2.979,2.979,0,1,0,2.979,2.979A2.979,2.979,0,0,0,2273.728,892.865Z" transform="translate(-2256.615 -873.868)" fill="#fff" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('components.modals.modal-cart')