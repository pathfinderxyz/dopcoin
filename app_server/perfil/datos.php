                   
                
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
                                                <td><?php echo $_SESSION['nombre'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Cedula de identidad</code></td>
                                                <td><?php echo $_SESSION['cedula'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Correo Electronico</code></td>
                                                <td><?php echo $_SESSION['correo'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero de telefono</code></td>
                                                <td><?php echo $_SESSION['telefono'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Direccion</code></td>
                                                <td><?php echo $_SESSION['direccion'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero de referencia</code></td>
                                                <td><?php echo $_SESSION['referido'];?></td>
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
                                                <td><?php echo $_SESSION['bancos'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Nombre</code></td>
                                                <td><?php echo $_SESSION['nombre'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Tipo de cuenta</code></td>
                                                <td><?php echo $_SESSION['tipo_cuenta'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Numero</code></td>
                                                <td><?php echo $_SESSION['cuenta'];?></td>
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
                                                <td><?php echo $_SESSION['cripto'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Wallet</code></td>
                                                <td><?php echo $_SESSION['wallet'];?></td>
                                            </tr>
                                            
                                            
                                            
                                        </table>
                                    </div>
                                    <div class="sub-title"><strong>Cuenta Verificada </strong> Limite: 1000 USDT</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                   