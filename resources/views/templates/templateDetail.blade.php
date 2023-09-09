@include('templates.components.navigation')
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $dish->photo }}" alt="..." /></div>
                    <div class="col-md-6">
                                                <h1 class="display-5 fw-bolder">{{ $dish->name_dish }}</h1>
                        <div class="fs-5 mb-5">                            
                            <span>{{ $dish->price."€" }}</span>
                        </div>
                        <p class="lead">{{ $dish->description_detail }}</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="py-5 bg-dark">
            <footer class="w-100 py-4 flex-shrink-0">
                <section class="container py-4">
                    <article class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-6">
                            <h5 class="h1 text-white">Food House</h5>
                            <p class="small text-muted">Únete a nosotros para descubrir el mundo de la alta cocina en un entorno acogedor y elegante.</p>
                            <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. foodhouse.com</a></p>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="text-white mb-3">Sobre Nosotros</h5>
                            <ul class="list-unstyled text-muted">
                                <li><p href="#">Home</p></li>
                                <li><p href="#">About</p></li>
                                <li><p href="#">Get started</p></li>
                                <li><p href="#">FAQ</p></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="text-white mb-3">Contactos</h5>
                            <ul class="list-unstyled text-muted">
                                <li><p href="#">Home</p></li>
                                <li><p href="#">About</p></li>
                                <li><p href="#">Get started</p></li>
                                <li><p href="#">FAQ</p></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h5 class="text-white mb-3">Newsletter</h5>
                            <p class="small text-muted">Descubre las últimas creaciones de nuestro chef, los ingredientes frescos que dan vida a nuestros platos y las historias detrás de cada receta innovadora.</p>
                            <form action="#">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="La receta que buscas..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </article>
                </section>
            </footer>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/detailTemplate.js"></script>
    </body>
</html>