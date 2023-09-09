
@include('templates.components.navigation')

        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Food House</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Explora el Lujo Saludable de Nuestra Cocina Gourmet</p>
                </div>
            </div>
        </header>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                
                @yield('content')
                                        
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
                                <li><p><a class="nav-link" href="{{ url('/register')}}">Registrarse</a></p></li>
                                <li><p><a class="nav-link" href="{{ url('/admin/dishes')}}">Login</a></p></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Cerrar Sesión</button>
                                        </form>
                                </li>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
