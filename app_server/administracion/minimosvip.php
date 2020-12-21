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
                                        <div class="title">Minimo de compra y venta en VIP</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <form class="form-inline" action="app_server/administracion/updateminimo.php" method="post">
                                    <div>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <td><code>Minimo Actual</code></td>
                                                <td> <input type="text"  placeholder="<?php echo $row['minimo'];?> Dopcoin"></td>
                                            </tr>
                                            <tr>
                                                <td><code>Nuevo minimo</code></td>
                                                <td><input type="text" name="minimo" placeholder="Introduzca el nuevo monto"></td>
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
