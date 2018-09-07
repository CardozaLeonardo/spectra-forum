<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../resources/assets/Spectra/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../resources/assets/login/css/Hover-master/css/hover.css">
    <link rel="stylesheet" href="../resources/assets/Spectra/css/home.css">
    <script src="../resources/assets/Spectra/js/app.js"></script>
    <title>SPECTRA</title>
</head>
<body>
    <section class="BGPrincipal"></section>
    @yield('sidebar')
    <div class="side-bar d-flex flex-wrap justify-content-center">
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Home"><img src="../resources/assets/Spectra/img/SideBar/home.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Microsoft"><img src="../resources/assets/Spectra/img/SideBar/microsoft2.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Apple"><img src="../resources/assets/Spectra/img/SideBar/apple.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Open Source"><img src="../resources/assets/Spectra/img/SideBar/ubuntu.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Google"><img src="../resources/assets/Spectra/img/SideBar/search.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Android"><img src="../resources/assets/Spectra/img/SideBar/android.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Programación"><img src="../resources/assets/Spectra/img/SideBar/code.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Machine Learning"><img src="../resources/assets/Spectra/img/SideBar/chip.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Cryptocurrencys"><img src="../resources/assets/Spectra/img/SideBar/bitcoin.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Seguridad Informática"><img src="../resources/assets/Spectra/img/SideBar/security-on.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Videojuegos"><img src="../resources/assets/Spectra/img/SideBar/console-2.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Diseño"><img src="../resources/assets/Spectra/img/SideBar/layers.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Data Science"><img src="../resources/assets/Spectra/img/SideBar/big-data.svg" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Publicaciones"><img src="../resources/assets/Spectra/img/SideBar/message.svg" alt=""></a>
        <a href="Forum/Forum.html" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Foro"><img src="../resources/assets/Spectra/img/SideBar/group.svg" alt=""></a>
    </div>
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
                    <li><a href="#" class="hvr-push">INICIO</a></li>
                    <li><a href="#" class="hvr-push">NOTICIAS</a></li>
                    <li><a href="#" class="hvr-push">DESTACADOS</a></li>
                    <li class="Filter" id="Filter"><a href="../resources/assets/Spectra/filter.html" class="hvr-push">FILTRAR</a></li>
                    <li><a href="#" class="hvr-push">BLOG</a></li>
                    <li><a href="#" class="hvr-push">FORO</a></li>
                    <li><input type="search" placeholder="Buscar                                        &#xf002;"></li>
                    <li><a href="{{ route('log') }}" class="hvr-push"><i class="user fas fa-user"></i><span>REGÍSTRATE O INICIA SESIÓN</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
    
        <main class="MainContainer row" id="MainContainer">
            <div class="col-lg-12">
                <div class="Contenido">
                    <h1 class="display-4">Destacados</h1>
                </div>
            </div>
        </main>
    </div>
    <footer class="container-fluid">
    @yield('footer')
        <div class="row FooterLogoContainer">
            <div class="col-12 FooterLogo"><h1>SPECTRA</h1></div>
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
                <a href=""><p>Microsoft</p></a>
                <a href=""><p>Apple</p></a>
                <a href=""><p>Open Source</p></a>
                <a href=""><p>Android</p></a>
                <a href=""><p>Google</p></a>
                <a href=""><p>Programación</p></a>
                <a href=""><p>Machine Learning</p></a>
                <a href=""><p>Cryptocurrencys</p></a>
                <a href=""><p>Seguridad Informática</p></a>
                <a href=""><p>Videojuegos</p></a>
                <a href=""><p>Diseño</p></a>
                <a href=""><p>Data Science</p></a>
            </div>
            <div class="col-lg-3 col-6 FooterMenu">
            @yield('footer')
                <h3>Menú</h3>
                <a href="">
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
                <a href="">
                    <p>Foro</p>
                </a>
                <a href="">
                    <p>Inicia Sesión o Regístrate</p>
                </a>
            </div>
            <div class="col-lg-5 col-12 FooterRight">
                <form action="" method="get">
                    <label for="EmailNews">RECIBE UN EMAIL AL DÍA CON LAS NOVEDADES DE SPECTRA</label>
                    <span><input type="email" name="EmailNews" id="EmailNews" placeholder="Corre Electrónico"></span>
                    <span><button type="submit" class="btn">Suscribir</button></span>
                </form>
                <div class="Copyright">
                    <a href=""><p>Equipo Editorial</p></a>
                    <a href=""><p>Condiciones de Uso</p></a>
                    <p>Copyright © Todos los Derechos Reservados</p>
                </div>
            </div>
        </div>
    
    </footer>
</body>
</html>