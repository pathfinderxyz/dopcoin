        <style type="text/css">
         .button, input, select, textarea {
             
             border: 0px !important;
          }

        </style>           
            <!--    <form class="form-inline" action="app_server/registrar/updateinfo.php" method="post"> -->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Usuario</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Nombre y Apellido</code></td>
                                                <td> <input type="text" name="nombre"  placeholder="<?php echo $_SESSION['nombre'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Cedula de identidad</code></td>
                                                <td><input type="text" name="cedula" placeholder="<?php echo $_SESSION['cedula'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Correo Electronico</code></td>
                                                <td><input type="text" name="correo"  placeholder="<?php echo $_SESSION['correo'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero de telefono</code></td>
                                                <td><input type="text" name="telefono"  placeholder="<?php echo $_SESSION['telefono'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Direccion</code></td>
                                                <td><input type="text" name="direccion" placeholder="<?php echo $_SESSION['direccion'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero de referencia</code></td>
                                                <td><input type="text" name="referido"  placeholder="<?php echo $_SESSION['referido'];?>"></td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Cuentas Bancarias</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Banco</code></td>
                                                <td><input type="text" name="bancos" placeholder="<?php echo $_SESSION['bancos'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Nombre</code></td>
                                                <td><input type="text" name="nombre2" placeholder="<?php echo $_SESSION['nombre'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Tipo de cuenta</code></td>
                                                <td><input type="text" name="tipo_cuenta" placeholder="<?php echo $_SESSION['tipo_cuenta'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero</code></td>
                                                <td><input type="text" name="cuenta" placeholder="<?php echo $_SESSION['cuenta'];?>"></td>
                                            </tr>
                                            
                                            
                                        </table>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Wallet</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Criptomoneda</code></td>
                                                <td><input type="text" name="cripto" placeholder="<?php echo $_SESSION['cripto'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Wallet</code></td>
                                                <td><input type="text" name="wallet" placeholder="<?php echo $_SESSION['wallet'];?>"></td>
                                            </tr>
                                            
                                            
                                            
                                        </table>
                                    </div>
                                    <div class="sub-title"><strong>Cuenta no verificada </strong> Limite: 1000 USDT</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                       <!--<input type="hidden" name="iduser" value="<?php echo $_SESSION['id'] ;?>">
                   <button type="submit" class="btn btn-info">Actualizar</button>-->
                </form>    <br><br>

                   