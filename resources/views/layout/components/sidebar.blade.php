<div class="col-md-3 col-lg-2 p-0 m-0">
    <div class="sidebars d-none d-sm-none d-md-block w-100 mt-0">
        <div class="list-group w-100">
            <a href="/recolectar" type="button" class="w-100 text-center d-flex align-content-center text-center flex-wrap h-20 list-group-item list-group-item-action @yield('active-collects') border-dark success-color" style="border-radius: 2rem 0rem 0rem 0rem !important;">
                <p class="text-center w-100 text-success">Recolecta con Muta</p>
            </a>
            <a href="/comprar" class="d-flex align-content-center text-center flex-wrap h-20 list-group-item list-group-item-action danger-color @yield('active-shoppings') border-top border-dark">
                <p class="text-center w-100 text-danger">Compra Mutaciones</p>
            </a>
            <a href="/eventos" type="button" class="d-flex align-content-center text-center flex-wrap h-20 list-group-item list-group-item-action info-color border-top @yield('active-events') border-dark">
                <p class="text-center w-100 text-info">Eventos para Mutar</p>
            </a>
            <a href="/comunidad" type="button" class="d-flex align-content-center text-center flex-wrap h-20 list-group-item list-group-item-action primary-color border-top @yield('active-comunities') border-dark">
                <p class="text-center w-100 text-primary">Comunidad de Mutantes</p>
            </a>
            <a href="/historias" type="button" class="d-flex align-content-center text-center flex-wrap h-20 list-group-item list-group-item-action danger-color border-top @yield('active-histories') border-dark" style="border-radius: 0rem 0rem 0rem 2rem !important;">
                <p class="text-center w-100 text-warning">Historias de Mutacion</p>
            </a>
        </div>
    </div>
</div>