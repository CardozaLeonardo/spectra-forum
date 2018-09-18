
<header>
   @yield('header')
 <h1>PERFIL</h1>
 <div class="container">
   <nav>
            
      <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </label>
            <div class="nav-wrapper" id="nav-wrapper">
                <ul>
                    <li><a href="{{ route('indice') }}" class="hvr-push">INICIO</a></li>
                    <li><a href="#" class="hvr-push">NOTICIAS</a></li>
                    <li><a href="#" class="hvr-push">DESTACADOS</a></li>
                    <li><a href="#" class="hvr-push">BLOG</a></li>
                    <li><a href="{{ route('forum') }}" class="hvr-push">FORO</a></li>
                    <li>
                        <form action="" method="get"><input type="text" placeholder="Buscar                                        &#xf002;"></form>
                    </li>
                    <li class="UserOptions">
                        <div class="dropdown">
                            <button class="dropdown-toggle ButtonUserMenu" data-toggle="dropdown"><img src="img/ImgProfile.png"
                                    alt="" class="img-user"><span class="PersonalName">Mark Schnaider</span></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="UserMenu">
                                <a href="" class="dropdown-item"><i class="fas fa-user"></i> Perfil</a>
                                <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Configuración</a>
                                <a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                            </div>
                        </div>
                    </li>
                    <!-- Agregar aquí la clase loginAnchor -->
                    <li class="loginAnchor"><a href="{{ route('log') }}" class="hvr-push"><i class="user fas fa-user"></i><span>REGÍSTRATE
                                O INICIA SESIÓN</span></a></li>
                </ul>
            </div>
        </nav>
     </div>
</header> 
  
  

<footer class="container-fluid">
  @yield('footer')
        <div class="row FooterLogoContainer">
            <div class="col-12 FooterLogo">
                <h1>SPECTRA</h1>
            </div>
        </div>
        <div class="row FollowContainer">
            <div class="col-12 Follow">
                <a href=""><span><i class="fab fa-facebook-f"></i></span></a>
                <a href=""><span><i class="fab fa-twitter"></i></span></a>
                <a href=""><span><i class="fab fa-instagram"></i></span></a>
                <a href=""><span><i class="fab fa-telegram-plane"></i></span></a>
                <a href=""><span><i class="fab fa-youtube"></i></span></a>
                <a href=""><span><i class="fas fa-envelope"></i></span></a>
            </div>
        </div>
        <div class="row FooterMenuContainer">
            <div class="col-lg-4 col-6 FooterCat">
                <h3>Categorías</h3>
                <a href="">
                    <p>Microsoft</p>
                </a>
                <a href="">
                    <p>Apple</p>
                </a>
                <a href="">
                    <p>Open Source</p>
                </a>
                <a href="">
                    <p>Android</p>
                </a>
                <a href="">
                    <p>Google</p>
                </a>
                <a href="">
                    <p>Programación</p>
                </a>
                <a href="">
                    <p>Machine Learning</p>
                </a>
                <a href="">
                    <p>Cryptocurrencys</p>
                </a>
                <a href="">
                    <p>Seguridad Informática</p>
                </a>
                <a href="">
                    <p>Videojuegos</p>
                </a>
                <a href="">
                    <p>Diseño</p>
                </a>
                <a href="">
                    <p>Data Science</p>
                </a>
            </div>
            <div class="col-lg-3 col-6 FooterMenu">
                <h3>Menú</h3>
                <a href="{{ route('indice') }}">
                    <p>Inicio</p>
                </a>
                <a href="">
                    <p>Noticias</p>
                </a>
                <a href="">
                    <p>Destacados</p>
                </a>
                <a href="">
                    <p>Blog</p>
                </a>
                <a href="#">
                    <p>Foro</p>
                </a>
                <a href="{{ route('log') }}">
                    <p>Inicia Sesión o Regístrate</p>
                </a>
            </div>
            <div class="col-lg-5 col-12 FooterRight">
                <form action="" method="get">
                    <label for="EmailNews">RECIBE UN EMAIL AL DÍA CON LAS NOVEDADES DE SPECTRA</label>
                    <span><input type="email" name="EmailNews" id="EmailNews" placeholder="Corre Electrónico" required></span>
                    <span><button type="submit" class="btn">Suscribir</button></span>
                </form>
                <div class="Copyright">
                    <a href="">
                        <p>Equipo Editorial</p>
                    </a>
                    <a href="">
                        <p>Condiciones de Uso</p>
                    </a>
                    <p class="copyright">Copyright © Todos los Derechos Reservados</p>
                </div>
            </div>
        </div>
    </footer>