<!DOCTYPE html>
<html>

<head>
    <title>Dopcoin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
    <link rel="shortcut icon" href="img/icon2.png"/>
</head>
*/<style>
   body {
    background: url("img/banner/22.jpg") no-repeat center 10%;
   }
   .flat-blue .login-box .login-form .login-body {
    background-color: transparent;
   }
   .flat-blue a:hover {
    color: #2fadb3;
}
.flat-blue a {
    color: #fff;
}
   .titulo-login{
    color: #ffffff;
    text-align: center;
   }
   .titulo-login2{
    color: #ffffff;
    text-align: left;
   }
   .login-page .login-button .btn {
    
    width: 100%;
     }
   
</style>/*

<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                   
                    
                    <div class="col-sm-12">
                        <div class="login-body">
                         
                           
                             <div class="login-col"><br>
                                
                        
                                    <h2 class="titulo-login">Entrar en Dopcoin</h2>
                                    <p class="titulo-login">Introduzca sus credenciales</p>
            
                             </div>

                            <form  action="login/autenticacion.php" method="post" role="form" id="form_login">
                                <div class="control">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Usuario o correo" />
                                </div>
                                <div class="control">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                                </div>
                                  <p class="titulo-login2"><a href="olvidopassword.php">Olvido su password?</a></p>
                                <div class="login-button text-center">
                                    <button type="submit" class="btn btn-info">Ingresar</button>
                                    <div class="progress hidden" id="login-progress">
                                       <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                                         Ingresando...
                                       </div>
                                    </div><br><br>
                                    <p class="titulo-login"><a href="registrodop.php">Crear una nueva cuenta</a></p>
                                </div>

                            </form><br><br>
                            <div>
                               <?php
                                 if ($_GET["errorusuario"]=="si"){
                              ?>
                                 <div class="alert"><strong style="color:#B71C1C;"> Datos Incorrectos !</strong></div>
                            <?php
                                 }
                             ?>
                              </div>
                        </div>
                              
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
   <script type="text/javascript" src="lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.matchHeight-min.js"></script>
            <script type="text/javascript" src="lib/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="lib/js/ace/theme-github.js"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="js/app.js"></script>
            <script type="text/javascript" src="js/index.js"></script>
         <?php
             session_start();
             if ($_SESSION["autenticado"] == "SI") {
             session_destroy();
             exit();
             }
         ?>

</body>

</html>
