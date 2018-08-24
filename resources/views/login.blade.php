<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../resources/assets/login/img/Favicon/Favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../resources/assets/login/css/Hover-master/css/hover-min.css">
    <link rel="stylesheet" href="../resources/assets/login/css/login.css">
    <title>SPECTRA LOGIN</title>
</head>
<body>
  @yield('body')
    <script src="../resources/resources/assets/login/js/sweetalert2.all.min.js"></script>
    <script src="../resources/assets/login/js/validation.js"></script>
    <div class="container">
        <div class="row login-container justify-content-center align-items-center">
            <div class="left-side order-1 order-md-0 col-sm-12 col-md-5 col-lg-6 p-0">
                <img src="../resources/assets/login/img/Left-Side Background/Left-Side-Background_2.jpg" alt="">
                <div class="logo-container">
                    <p class="logo-text">SPECTRA</p>
                    <p class="secondary-logo-text-1"> LEARN, INSPIRE,</p>
                    <p class="secondary-logo-text-2">CREATE</p>
                </div>
                <p class="caption-btn-SM">SOCIAL MEDIA</p>
                <p class="caption-btn-NA" id="caption-btn-NA">CREATE NEW ACCOUNT</p>
                <div class="buttons">
                    <a href=""><button type="button" class="btn google-btn hvr-pop"><span><img class="btn-icon" src="../resources/assets/login/img/Btn-Icons/Google.png" alt=""></span><span class="google-title-btn">Login with Google</span></button></a>
                    <a href=""><button type="button" class="btn twitter-btn hvr-pop"><span><img class="btn-icon" src="../resources/assets/login/img/Btn-Icons/Twitter.png" alt=""></span><span class="twitter-title-btn">Login with Twitter</span></button></a>
                    <a href="#"><button type="button" class="btn user-signup-btn hvr-pop" id="user-signup-btn"><span><img class="btn-icon-user float-left" src="../resources/assets/login/img/Btn-Icons/User.png" alt=""></span><span class="user-title-btn">SIGN UP</span></button></a>
                    <a href="#"><button type="button" class="btn user-login-btn hvr-pop" id="user-login-btn"><span><img class="btn-icon-user float-left" src="../resources/assets/login/img/Btn-Icons/User.png" alt=""></span><span class="user-title-btn">LOGIN</span></button></a>
                </div>
            </div>
            <div class="right-side order-0 order-md-1 col-sm-12 col-md-6 col-lg-4 p-0">
                <form action="{{ route('user.login') }}" method="post" id="Login-Form" class="Login-Form" onsubmit="return LoginFormVal()">
                {{ csrf_field() }}
                    <h1>Login</h1>
                    <div class="form-group-container-login">
                        <div class="form-group user-form">
                            <label for="Username">Username</label>
                            <input type="text" class="input-login is-invalid" placeholder="&#xf007;" name="email" id="Username" autocomplete="off" minlength="3" maxlength="40">
                        </div>
                        <div class="form-group password-form">
                            <label for="Password">Password</label>
                            <input type="password" class="input-login" placeholder="&#xf023;" name="password" id="PasswordLogin" autocomplete="off" minlength="6" maxlength="30">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="RememberUser">
                            <label class="custom-control-label" for="RememberUser">Remember Me</label>
                            <span><a href="#" class="forgot-pass">Forgot password?</a></span>
                        </div>
                        <div class="login-access d-flex justify-content-center">
                            <a href=""><button type="submit" class="btn login-btn hvr-ripple-out" id="login-btn" value="send-login"><p>LOGIN</p></button></a>
                        </div>
                    </div>
                </form>
                <form action="{{ route('user.registrar') }}" method="post" id="Register-Form" class="Register-Form" onsubmit="return RegisterFormVal()">
                {{ csrf_field() }}
                   <h1>New Account</h1> 
                   <div class="form-group-container">
                        <div class="form-group ">
                            <label for="Name-Register">Name</label>
                            <input type="text" name="name" id="Name-Register" class="input-register" placeholder="Aa" autocomplete="off" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="Email-Register">Email</label>
                            <input type="email" name="email" id="Email-Register" class="input-register" placeholder="&#xf0e0" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="Username-Register">Username</label>
                            <input type="text" name="username" id="Username-Register" class="input-register" placeholder="&#xf007;" autocomplete="off" minlength="3" maxlength="15">
                        </div>
                        <div class="form-group">
                            <label for="Password-Register">Password</label>
                            <input type="password" name="password" id="Password-Register" class="input-register" placeholder="&#xf023;" autocomplete="off" minlength="6" maxlength="30">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="TermsConds" required>
                            <label class="custom-control-label" for="TermsConds"><a href="#">I accept the Terms and Conditions</a></label>
                        </div>
                            <div class="register-access d-flex justify-content-center">
                            <a href=""><button type="submit" class="btn register-btn hvr-ripple-out" value="send-register" id="register-btn" onclick="return validacion()"><p>REGISTER</p></button></a>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../resources/assets/login/js/login.js"></script>
</body>
</html>