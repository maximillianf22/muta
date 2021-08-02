<div class="modal fade" id="drawModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog bg-transparent">
        <div class="modal-content bg-transparent">
            <button class="close-windows btn-link mb-5" type="button" class="close" data-dismiss="modal" aria-label="Close" style="top: -25px; right: -25px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.477" height="37.477" viewBox="0 0 37.477 37.477">
                    <g id="Grupo_2140" data-name="Grupo 2140" transform="translate(-622.132 -563.13)">
                        <circle id="Elipse_6" data-name="Elipse 6" class="text-@yield('color')" cx="13.5" cy="13.5" r="13.5" transform="translate(627.271 569.271)" fill="#cda06f" />
                        <text id="_" data-name="+" transform="translate(634.859 587.879) rotate(45)" fill="#272727" font-size="31" font-family="Helvetica-Light, Helvetica" font-weight="300">
                            <tspan x="-10.23" y="0">+</tspan>
                        </text>
                    </g>
                </svg>
            </button>
            <div class="card card-login card-transparent bg-transparent">
                <div class="card-body p-3 py-5">
                    <div class="row my-auto text-center my-5 p-3">
                        <div class="col-12 text-center text-@yield('color')">
                            <h4 class="h2 text-@yield('color')">Retiro</h4>
                            <p class="text-@yield('color')">Registre su entidad financiera</p>
                        </div>
                        <div class="col-6">
                            <a href="/retirar-certificado" class="btn btn-@yield('color') btn-round text-dark mt-5 btn-block px-0">Certificado bancario</a>
                        </div>
                        <div class="col-6">
                            <a href="/retirar-informacion" class="btn btn-@yield('color') btn-round text-dark mt-5 btn-block px-0">Informacion de tu cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>