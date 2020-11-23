<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpeople = $_SESSION['id'];


$sqld = pg_query("SELECT * from dopcoin");
$rowd = pg_fetch_assoc($sqld);
  

?>                 
                
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Orden de Compra</div> 

                                         <?php
                                 if ($_GET["compra"]=="no"){
                             ?>
                                 <div class="alert" style="margin-left: 200px;margin-top: -20px;"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> Error no se puede realizar la orden</strong></div>
                           <?php  
                               }elseif ($_GET["compra"]=="si") {
                                ?>
                                  <div class="success" style="margin-left: 200px;margin-top: -20px;"><strong style="color: #ffffff;background-color: #5baf30;padding: 8px;border-radius: 3px;">Orden generada con exito <a href="?page=story"> ver operaciones</a></strong></div> <br>
                            <?php 
                                 }  
                             ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    
                                   <form class="form-horizontal"  action="app_server/transacciones/comprasave.php" method="post">
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
                                            <label for="inputPassword3" class="col-sm-2 control-label">Monto USD</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="montousd" placeholder="DIGITE EN USD">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Wallet de Recepcion</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="wallet_recep"  placeholder="DIGITE">
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
                                            <label for="inputPassword3" class="col-sm-2 control-label">Total a pagar</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="montodop" placeholder="MONTO DOP ">
                                            </div>
                                        </div>
                                        
                                       <input type="hidden" name="operario" value="<?php echo $idpeople ;?>">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Aceptar</button>
                                            </div>
                                        </div>
                                        <p>*Coloque solo la dirección BTC, Si comete un error puede perder sus BTC, No Somos responsables de direciones erroneas.</p>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Tasa de compra</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Tasa</code></td>
                                                <td>USD <?php echo $rowd['precio_compra'];?></td>
                                            </tr>
                                            <tr>
                                                <td><code>Fee (5%)</code></td>
                                                <td>USD <?php echo $rowd['precio_compra'] * 0.005 ;?></td>
                                            </tr>
                                            
                                            
                                            
                                        </table>
                                    </div>
                                   
                                </div>

                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Calculadora</div>
                                    </div>
                                </div>
                                 <div class="card-body">

                                 
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Cantidad a comprar</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="n1" placeholder="Ejemplo: 1000 und de Dopcoin">
                                            </div>
                                        </div><br><br>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Precio Dopcoin (USD)</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="n2" placeholder="USD" value="<?php echo $rowd['precio_compra'];?>">
                                            </div>
                                        </div><br><br>
                                        <div class="form-group">
                                             <label  class="col-sm-3 control-label">Total USD</label>
                                             <div class="col-sm-9">
                                             <input type="text" class="form-control" id="resultado">
                                             </div>
                                         </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="button" class="btn btn-info" onClick="valor()" value="suma" >Calcular</button>
                                            </div>
                                        </div>
                                        <p>*Coloque solo la cantidad de Dopcoin a comprar y luego presione calcular </p>
                                  
                                    </div>
                            </div>
                        </div>
                    </div>
   <script type="text/javascript">              
    function valor() {
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var resultado = n1 * n2 ;
    document.getElementById("resultado").value = resultado;
}  
   </script>                   

                   