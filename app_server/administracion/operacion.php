<?php 
     
    include '../../coneccion/coneccion.php';

     
    $sql = pg_query("SELECT * FROM operaciones");
    $row = pg_fetch_assoc($sql);
    $row = pg_num_rows($sql);
    
?>
      
            
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Operaciones de los Usuarios</div>
                                    </div>
                                </div>
                                
                                    
                                    <div class="panel">

                                        <!-- Default panel contents 
                                        <div class="panel-heading">
                                          <br>
                                        <strong>Historial de Solicitudes</strong>

                                        </div>-->
                                        
                                <div class="card-body">
                                        <!-- Table -->
                                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                                            <thead color="#000000">
                                                <tr>
                                                    <th>Cod Usuario</th>
                                                    <th>Fecha</th>
                                                    <th>Codigo de transaccion</th>
                                                    <th>Tipo de operacion</th>
                                                    <th>Cantidad (dopcoin)</th>
                                                    <th>Monto ($)</th>
                                                    <th>Wallet a Enviar</th>
                                                    <th>Wallet a Recibir</th>
                                                    <th>status</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             <td>'.$info['id_operario'].'</td>
                                                             <td>'.$info['fecha'].'</td>
                                                             <td>#'.$info['codigo'].'</td>
                                                             <td>'.$info['tipo_operacion'].'</td>
                                                             <td>DOP '.$info['cantidad_dopcoin'].'</td>
                                                             <td>$'.$info['monto'].'</td>
                                                             <td>'.$info['wallet_dopcoin'].'</td>
                                                             <td>'.$info['wallet_recep'].'</td>
                                                             <td>'.$info['status'].'</td>                                                 
                                                          </tr>';
                                                         }
                                                     }else{

                                                       }
                                                 ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>