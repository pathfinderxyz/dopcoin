<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
session_start();
$idpeople = $_SESSION['id'];


$sql = pg_query("SELECT * from persona where id='$idpeople'");
$row = pg_fetch_assoc($sql);
$status= $row["status_vip"];
  

?>                 
                
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                     <div class="card-title">
                                        <div class="title">Hazte VIP ! <?php echo $status; ?></div> 
                                     </div>
                                </div>

                                <div class="card-body">
                                  
                                  
                                  <?php
                                 if ($_SESSION['status_vip'] == 'no activo'){
                                   echo '
                                   <p>*Unete a nuestro grupo selecto de Dopcoin paga la membresia mensual de <strong>$30</strong> y con eso ya formaras parte.</p> 
                                    
                                   <form class="form-horizontal"  action="app_server/vip/guardarvip.php" method="post">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Criptomoneda</label>
                                            <div class="col-sm-10">
                                             <select class="form-control" name="cripto" id="cripto" required="">
                                                
                                               <option value=""></option>
                                               <option value="BTC">BTC</option>
                                               <option value="ETH">ETH</option>
                                               <option value="Dash">Dash</option>        
                                             </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Wallet de Recepcion</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="wallet"  placeholder="DIGITE">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Tipo de pago</label>
                                            <div class="col-sm-10">
                                            
                                             <select class="form-control" name="tipo_pago" required="">
                                                
                                               <option value=""></option>
                                               <option value="Deposito">Deposito</option>
                                               <option value="Transferencia">Transferencia</option>    
                                             </select>
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Monto a cancelar</label>
                                            <div class="col-sm-10">
                                            
                                             <input type="text" class="form-control"  placeholder="$30">
                                            
                                            </div>
                                        </div>
                                      
                                        
                                       <input type="hidden" name="idpersona" value="<?php echo $idpeople ;?>">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Aceptar</button>
                                            </div>
                                        </div>
                                        
                                    </form>';}
                                     else{
                                      echo '<h5>Su solicitud de Membresia se esta procesando!</h5>';
                                     }

                                   
                                     ?>
                                </div>

                            </div>
                        </div>
                       
                    </div>
  
                   