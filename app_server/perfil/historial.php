<?php 
     
    include '../../coneccion/coneccion.php';
    $idpeople = $_SESSION['id'];

     
    $sql = pg_query("SELECT * FROM operaciones where id_operario='$idpeople'");
    $row = pg_fetch_assoc($sql);
    $row = pg_num_rows($sql);
    
?>
      
            
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Historial de operaciones en Dopcoin</div>
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
                                                    <th>Tipo de operacion</th>
                                                    <th>Fecha</th>
                                                    <th>Codigo de transaccion</th>
                                                    
                                                    <th>Cantidad (dopcoin)</th>
                                                    <th>Monto ($)</th>
                                                    <th>status</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                        
                                                     echo '<tr>
                                                             <td  class="'.$info['color'].'">'.$info['tipo_operacion'].'</td>
                                                             <td>'.$info['fecha'].'</td>
                                                             <td>#'.$info['codigo'].'</td>
                                                             
                                                             <td>DOP '.$info['cantidad_dopcoin'].'</td>
                                                             <td>$'.$info['monto'].'</td>
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