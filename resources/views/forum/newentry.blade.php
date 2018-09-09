<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../resources/assets/Forum/img/Favicon/NE.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resources/assets/login/css/Hover-master/css/hover-min.css">
    <link rel="stylesheet" href="../../resources/assets/Forum/css/emojionearea.min.css">
    <script type="text/javascript" src="../../resources/assets/Forum/js/emojionearea.min.js"></script>
    <link rel="stylesheet" href="../../resources/assets/Forum/css/new_entryStyle.css">
    <title>Nueva Entrada</title>
</head>
<body>
    <script src="../../resources/assets/Forum/js/NEValidation.js"></script>
    <header>
        <a href="index.html" class="back-forum"><i class="fas fa-arrow-circle-left"></i></a>
        <h1>Nueva Entrada</h1>
    </header>
    <main class="container">
        <div class="fixed-button">
            <a href="index.html" data-toggle="tooltip" data-placement="top" title="Cancelar" class="hvr-bounce-in"><button class="btn"><i class="fas fa-plus"></i></button></a> 
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                {{ csrf_field() }}
                    <div class="form-group Topic-Title">
                        <label for="Password">Título de la Entrada</label>
                        <input type="text" placeholder="Título" name="topic-title" autocomplete="off" maxlength="50" required>
                    </div>
                    <div class="form-group Categories">
                        <label for="Categorie">Categoría de la Entrada</label>
                        <select name="Categorie" id="" required>
                            <!--<option value="" selected disabled>Elija una categoría</option>
                            <option value="Programación">Programación</option>
                            <option value="PHP">PHP</option>
                            <option value="Microsoft">Microsoft</option>
                            <option value="Apple">Apple</option>
                            <option value="Open Source">Open Source</option>
                            <option value="Android">Android</option>
                            <option value="Google">Google</option>
                            <option value="Machine Learning">Machine Learning</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Cryptocurrencys">Cryptocurrencys</option>
                            <option value="Seguridad">Seguridad</option>
                            <option value="Videjuegos">Videjuegos</option>-->
                            @foreach($categories as $cat)
                            <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group Query">
                        <label for="Query">Escriba su Consulta</label>
                        <textarea name="Query" id="Query" class="QueryTextA" placeholder="Consulta..." required></textarea>
                        <script type="text/javascript">
                            $(document).ready(function() {
                              $("#Query").emojioneArea();
                            });
                        </script>
                    </div>
                    <button type="submit" class="hvr-pop"><span>PUBLICAR</span><span><i class="fas fa-edit"></i></span></button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>