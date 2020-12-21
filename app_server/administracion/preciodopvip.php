<?php

include '../../coneccion/coneccion.php';

$sql = pg_query("SELECT * from dopcoinvip");
$row = pg_fetch_assoc($sql);


?>  
    <style type="text/css">
         .button, input, select, textarea {
             
             border: 0px !important;
          }


        </style>           
            
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Precio de Compra VIP</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <form class="form-inline" action="app_server/administracion/update_precio_compra_vip.php" method="post">
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Precio Actual de compra VIP</code></td>
                                                <td> <input type="text"  placeholder="USD <?php echo $row['precio_compra'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Nuevo precio</code></td>
                                                <td><input type="text" name="pcompra" placeholder="Introduzca el nuevo precio"></td>
                                            </tr>
                                            
                                         
                                        </table>

                                    </div>
                                     <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Actualizar</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Precio de venta VIP</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   <form class="form-inline" action="app_server/administracion/update_precio_venta_vip.php" method="post">
                                    
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Precio Actual de venta VIP</code></td>
                                                <td><input type="text"  placeholder="USD <?php echo $row['precio_venta'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Nuevo precio</code></td>
                                                <td><input type="text" name="pventa" placeholder="Introduzca el nuevo precio"></td>
                                            </tr>
                                           
                                            
                                            
                                        </table>
                                    </div>
                                     <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-info">Actualizar</button>
                                            </div>
                                        </div>
                                     </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   <br><br>
