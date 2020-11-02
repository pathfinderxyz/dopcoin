<?php

$tab=$_GET['tab'];
?>
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
    background: url("img/banner/22.jpg") repeat center 10%;
   }
   .flat-blue .login-box .login-form .login-body {
    background-color: transparent;
   }
   
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
         <h2 class="titulo-login">Bienvenido al registro de Dopcoin.co</h2>
         <p class="titulo-login">Crypto Exchange  DopCoin SRL | Con este formulario perteneceras a la familia DopCoin , requerimos ciertas informaciones sobre nuestros clientes para poder operar con nosotros. Al llenar el formulario usted acepta los Terminos y Condiciones de DopCoin</p><br>
                     
         

                     <div class="row">
                         <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Nuevo Registro</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="app_server/registrar/consultas/registrar.php" method="post" role="form">
                                    <div class="step">
                                        <ul class="nav nav-tabs nav-justified" role="tablist">
                                            <li role="step" >
                                                <a href="#step1" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" style="background-color: #eaeaea;">
                                                    <div class="icon fa fa-truck"></div>
                                                    <div class="step-title">
                                                        <div class="title">Usuario</div>
                                                        <div class="description">Inicio de sesion</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role="step" >
                                                <a href="#step2" role="tab" id="step2-tab" data-toggle="tab" role="tab" aria-controls="profile" style="background-color: #eaeaea;">
                                                    <div class="icon fa fa-credit-card"></div>
                                                    <div class="step-title">
                                                        <div class="title">Datos personales</div>
                                                        <div class="description">Informacion</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role="step" >
                                                <a href="#step3" role="tab" id="step3-tab" data-toggle="tab" role="tab" aria-controls="profile" style="background-color: #eaeaea;">
                                                    <div class="icon fa fa-check-circle-o"></div>
                                                    <div class="step-title">
                                                        <div class="title">Banco</div>
                                                         <div class="description">Datos financieros</div>
                                                        <div class="description"></div>
                                                    </div>
                                                </a>
                                            </li>
                                        
                                        </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="step1" aria-labelledby="home-tab">
                                    <h3>Usuario</h3><br>
                                             <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre de Usuario</label>
                                            <input type="text" class="form-control" name="usuario" placeholder="introduzca un nombre de usuario" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="Password" class="form-control" name="password"  placeholder="introduzca una contraseña" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Repetir Password</label>
                                            <input type="Password" class="form-control"  placeholder="vuelva a introducir la contraseña" required="">
                                        </div><br>
                                          <a href="#step2" role="tab" id="step1-tab" data-toggle="tab" aria-controls="profile" style="padding: 10px 15px 10px 15px; background-color: #2ca91d; color: #fff; border-radius: 3px;">siguiente</a>


                                 </div>
                                 <div role="tabpanel" class="tab-pane fade" id="step2" aria-labelledby="profile-tab">
                                   <strong><h3>Datos Personales</h3></strong> <br>
                                                <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion de correo electronico *</label>
                                            <input type="email" class="form-control" name="correo" placeholder="Tu direccion de correo electronico" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nombre Completo</label>
                                            <input type="text" class="form-control" name="nombre"  placeholder="Introduzca nombre y apellido" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Numero de Cedula o Pasaporte</label>
                                            <input type="number" class="form-control" name="cedula"  placeholder="Introduzca cedula o pasaporte" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Direccion de la vivienda*</label>
                                            <input type="text" class="form-control" name="direccion"  placeholder="Direccion" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ocupacion y lugar de trabajo</label>
                                            <input type="text" class="form-control" name="ocupacion"  placeholder="Introduzca su ocupacion y lugar de trabajo" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Numero telefonico</label>
                                            <input type="number" class="form-control" name="telefono"  placeholder="Introduzca su numero telefonico" required="">
                                        </div>
                                        <label for="exampleInputFile">Criptomoneda</label>
                                        
                                        <div class="form-group">
                                          <select class="form-control" name="cripto" id="cripto" required="">
                                                
                                               <option value=""></option>
                                               <option value="BTC">BTC</option>
                                               <option value="ETH">ETH</option>
                                               <option value="BTC">BTC</option>
                                               <option value="Dash">Dash</option>
                                                
                                        </select>
                                        
                                        </div><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Wallet Donde Recibira su Crypto. [ WALLET + (BTC - ETH - LTC - Dash) ] - (Puede ser modificada en su orden)</label>
                                            <input type="text" class="form-control" name="wallet"  placeholder="Introduzca su Wallet" required="">
                                        </div><br>
                                         <a href="#step3" role="tab" id="step1-tab" data-toggle="tab" aria-controls="profile" style="padding: 10px 15px 10px 15px; background-color: #2ca91d; color: #fff; border-radius: 3px;">siguiente</a>
                                 </div>
                                 <div role="tabpanel" class="tab-pane fade" id="step3" aria-labelledby="dropdown3-tab">
                                    <strong><h3>Banco</h3></strong> <br>
                                             <div class="form-group">
                                            <label for="exampleInputEmail1">Codigo de referido</label>
                                            <input type="text" class="form-control" name="codreferido" placeholder="Introduzca su codigo de referido de no poseerlo deje la casilla vacia">
                                        </div>
                                         <label for="exampleInputFile">Cuenta de banco para pagos o depositos</label>
                                         <div>
                                          <select class="form-control" name="banco" id="banco" required="">
                                                
                                               <option value=""></option>
                                               <option value="BANK RESERVAS">BANK RESERVAS</option>
                                               <option value="EBHD LEON">BHD LEON</option>
                                               <option value="ASOCIACION ROMANA DE AHORRO Y PRESTAMOS">ASOCIACION ROMANA DE AHORRO Y PRESTAMOS</option> 
                                               <option value="BANCO ADEMI">BANCO ADEMI</option>
                                               <option value="SCOTIABANK">SCOTIABANK</option>
                                                <option value="BANCO DEL PROGRESO">BANCO DEL PROGRESO</option>
                                               <option value="BANCO VIMENCA">BANCO VIMENCA</option>
                                                <option value="BANCO BDI">BANCO BDI</option>
                                                <option value="BANCO POPULAR">BANCO POPULAR ( LBTR y ACH )</option>
                                                
                                        </select>
                                      </div><br>
                                       
                                           
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Numero de cuenta</label>
                                            <input type="number" class="form-control" name="numcuenta" placeholder="Introduzca su numero de cuenta">
                                        </div>
                                        <label for="exampleInputFile">Tipo de cuenta</label>
                                        <div>
                                          <select class="form-control" name="cuenta" id="cuenta" required="">
                                                
                                               <option value=""></option>
                                               <option value="Cuenta Corriente">Cuenta Corriente</option>
                                               <option value="Cuenta de Ahorro">Cuenta de Ahorro</option>
                                                
                                        </select>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">TRANSFERENCIAS LTBR y ACH.</label>
                                            <p>Las ventas menores a ( 5000 $ ) DOP No aplican para transferencias LTBR al menos que el cliente acepte los costo de dicha transferencia ( 100 $ ) DOP.<br><br>-ACH:la transaccion se reflejara en la cuenta destino dentro de un periodo de 1 a 24 horas;<br><br>-LBTR: la transaccion se efectuara en tiempo real, con un costo por comision.De lunes a viernes en horario de 8:00AM a 4:00PM., toda transaccion realizada en o fuera del horario antes indicado, sera procesada con fecha valor del siguiente dia laborable.</p>
                                        </div><br>
                                        <label for="exampleInputFile">Acepta los terminos sobre el tiempo en las transferencia LTBR y ACH. <a href="https://bit.ly/2K0no0y">(Leer Aqui)</a></label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-19" required="">
                                            <label for="checkbox-19">
                                              Si Acepto
                                            </label>
                                          </div>
                                        </div><br>
                                        <label for="exampleInputFile">Acepta los terminos de DopCoin <a href=" https://bit.ly/DopCoinTerminosYCondiciones">(Leer Aqui)</a></label>
                                        <div class="checkbox">

                                          <div class="checkbox3 checkbox-round">
                                            <input type="checkbox" id="checkbox-191" required="">
                                            <label for="checkbox-191">
                                              Si Acepto
                                            </label>
                                          </div>
                                        </div>

                                        <button type="submit" class="btn btn-success">Registrar</button>
                                        <button type="button" class="btn btn-info" name="Cancelar" class="btn btn-dark" onClick="location.href='index.php'">Cancelar</button> 
                                         
                                   </div>

                                
                                 </div>
                                    </div>
                                    </form>
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
       

</body>

</html>
