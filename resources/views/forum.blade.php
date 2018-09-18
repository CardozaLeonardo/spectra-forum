<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/forumStyle.css')}}">
    <title>FORUM</title>
</head>

<?php 
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Storage;
?>

<body>
    <script src="{{ asset('js/main.js') }}"></script>
    <header class="hero">
        <button type="button" class="Filter-Btn"><i class="fas fa-sliders-h"></i></button>
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
                        <li><a href="{{ route('indice') }}" class="hvr-pop">INICIO</a></li>
                        <li><a href="#" class="hvr-pop">NOTICIAS</a></li>
                        <li><a href="#" class="hvr-pop">DESTACADOS</a></li>
                        <li><a href="#" class="hvr-pop">BLOG</a></li>
                        <li><a href="{{ route('forum') }}" class="hvr-pop">FORO</a></li>
                        <li><form action="" method="get"><input type="text" placeholder="Buscar                                        &#xf002;"></form></li>
                        @if(Auth::check())
                        <li class="UserOptions">
                            <?php $user = Auth::user(); ?>
                            <div class="dropdown">
                                <button class="dropdown-toggle ButtonUserMenu" data-toggle="dropdown"><img src="{{ asset('/storage/img/blank-profile.png') }}" alt="" class="img-user"><span class="PersonalName"></span>{{ $user->username }}</button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="UserMenu">
                                    <a href="" class="dropdown-item"><i class="fas fa-user"></i> Perfil</a>
                                    <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Configuración</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                                </div>
                            </div>
                        </li>
                        @else
                        <li><a href="{{ route('log') }}" class="hvr-push"><i class="user fas fa-user"></i><span>REGÍSTRATE O INICIA SESIÓN</span></a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        <h1>SPECTRA FORUM</h1>
        <p>Please try looking for your problem before your question, thanks!</p>
        <section class="search-container">
            <form action="" method="get">
                <input type="text" class="SearchBox" name="SearchBox" id="SearchBox" placeholder="Buscar Consulta" autocomplete="false">
            </form>
        </section>
    </header>
    <main class="container-fluid">
        @if (Auth::check())
            <div class="fixed-button">
                <a href="{{ route('forum.newentry') }}" class="hvr-bounce-in" data-toggle="tooltip" data-placement="top" title="Nuevo"><button
                        class="btn"><i class="fas fa-plus"></i></button></a>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-3 d-lg-block Categories">
                <i class="fas fa-arrow-circle-left close-categorie"></i>
                <div class="title-container">
                    <span><i class="fas fa-bars"></i></span><span class="title">Categorías</span>
                </div>
                <div class="Categories-Container">
                    <a href="" class="hvr-push"><button type="button" class="btn">Programación</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Diseño</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Microsoft</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Apple</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Open Source</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Android</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Google</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Machine Learning</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Data Science</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Cryptocurrencys</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Seguridad</button></a>
                    <a href="" class="hvr-push"><button type="button" class="btn">Videojuegos</button></a>
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 Questions">
                <h1 class="display-4 headerQuestions">Últimas Entradas</h1>
                <div class="card-container">
                    <a href="" class="card Programming-Card">
                        <div class="card-bg-Container bg-img-card-programming"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Programming/Programming.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Programación</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card Design-Card">
                        <div class="card-bg-Container bg-img-card-design"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Design/Design.jpg" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies">3</span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Diseño</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card Microsoft-Card">
                        <div class="card-bg-Container bg-img-card-microsoft"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Microsoft/Microsoft.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies">5</span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Microsoft</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" div class="card Apple-Card">
                        <div class="card-bg-Container bg-img-card-apple"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Apple/Apple.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Apple</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card OS-Card">
                        <div class="card-bg-Container bg-img-card-os"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/OpenSource/OS.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Open Source</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card Android-Card">
                        <div class="card-bg-Container bg-img-card-android"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Android/Android.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Android</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card Google-Card">
                        <div class="card-bg-Container bg-img-card-google"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Google/Google.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Google</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card ML-Card">
                        <div class="card-bg-Container bg-img-card-ml"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/ML/ML.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Machine Learning</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card DS-Card">
                        <div class="card-bg-Container bg-img-card-ds"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/DS/DS.jpg" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Data Science</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card CC-Card">
                        <div class="card-bg-Container bg-img-card-cc"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/CC/CC.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Cryptocurrencys</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card Segurity-Card">
                        <div class="card-bg-Container bg-img-card-seguridad"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/Seguridad/Seguridad.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies text-muted"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Seguridad</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <a href="" class="card VG-Card">
                        <div class="card-bg-Container bg-img-card-vg"><img class="card-img-top" src="../resources/assets/Forum/img/Cards/VG/VG.png" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <small class="row1_footer"><span class="autor"></span><span class="Replies"><span class="CantReplies"></span><span class="ml-1">Réplicas</span></span></small>
                            <small class="text-muted row2_footer"><span class="CardCategorie">Videojuegos</span><span
                            class="date"></span></small>
                        </div>
                    </a>
                    <div class="pag">
                        
                    </div>
                </div>
            </div>

            
    </main>
    <footer class="container-fluid">
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
</body>

</html>
