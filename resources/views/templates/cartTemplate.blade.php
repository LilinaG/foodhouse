@include('templates.components.navigation')

        <section class="py-5 m-5 bg-white d-flex justify-content-center">
            
            <div class="container d-flex row px-4 px-lg-5 mt-5">

                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col mb-3"><h2><b>Tu mejor elección</b></h2></div>
                                <div class="col align-self-center text-right text-muted">3 platillos</div>
                            </div>
                        </div>   
                        
                        
                        <div class=" card row mb-2 border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="#"></div>
                                <div class="col">
                                    <div class="row text-muted">Platillo Generico</div>
                                    <div class="row">?????????</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>

                        <div class=" card row mb-2 border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="#"></div>
                                <div class="col">
                                    <div class="row text-muted">Platillo Generico</div>
                                    <div class="row">?????????</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>

                        <div class=" card row mb-2 border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="#"></div>
                                <div class="col">
                                    <div class="row text-muted">Platillo Generico</div>
                                    <div class="row">?????????</div>
                                </div>
                                <div class="col">
                                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                                </div>
                                <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                            </div>
                        </div>

            </div>       

            <div class="col mb-5">
                <div class="card h-100">
                    <div class="m-3 mb-1"><h2><b>La cuenta</b></h2></div>
                    <hr>
                    <div class="card-body pt-2 px-4">
                        <div class="text-left">
                            <div class="col" style="padding-left:0;">Platillos 3</div>
                            <div class="col text-right">&euro; 132.00</div>
                            <form>
                                <p class="mt-2">Tipo de envío</p>
                                <select>
                                    <option class="text-muted"></option>
                                    <option class="text-muted">A domicilio  &euro;3.50</option>
                                    <option class="text-muted">A recoger en restaurante  Gratis</option>
                                </select>
                            </form>
                            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                                <div class="col"><h5>Precio total</h5></div>
                                <div class="col text-right">&euro; 137.00</div>
                            </div>
                            <button class="btn btn-outline-dark" type="submit">
                                Ordenar comanda
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Nuestras recomendaciones</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Platillo Generico</h5>
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lo quiero</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Platillo Generico</div>
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Platillo Generico</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lo quiero</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Platillo Generico</div>
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Platillo Generico</h5>
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lo quiero</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Platillo Generico</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    $40.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lo quiero</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="js/detailTemplate.js"></script> -->
    </body>

    <footer class="py-5 bg-dark">
            <footer class="w-100 py-4 flex-shrink-0 ">
                <section class="container py-4">
                    <article class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-6">
                            <h5 class="h1 text-white">Food House</h5>
                            <p class="small text-muted">Únete a nosotros para descubrir el mundo de la alta cocina en un entorno acogedor y elegante.</p>
                            <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. foodhouse.com</p>
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
</html>