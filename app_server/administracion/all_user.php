<?php 
     
    include '../../coneccion/coneccion.php';
    

     
    $sql = pg_query("SELECT * FROM persona");
    $row = pg_num_rows($sql);
    
?>
            <form>
            <br>
            <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                    <div class="title">Usuarios Registrados</div>
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
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Cedula</th>
                                                    <th>Correo</th>
                                                    <th>Telefono</th>
                                                    <th>Direccion</th>
                                                    <th>Status VIP</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     if ($row) {
                                                         while ($info = pg_fetch_assoc($sql)) {
                                                     echo '<tr>
                                                             <td>'.$info['id'].'</td>
                                                             <td>'.$info['nombre'].'</td>
                                                             <td>'.$info['cedula'].'</td>
                                                             <td>'.$info['correo'].'</td>
                                                             <td>'.$info['telefono'].'</td>
                                                             <td>'.$info['direccion'].'</td>
                                                             <td>'.$info['status_vip'].'</td>
                                                            
                                                             <td ><a class="btn btn-danger" <a href="?page=delete&idcliente='.$info['id'].'" ><i class="icon-close"></i> Eliminar</a>
                                                             <a class="btn btn-success" <a href="?page=statusvip&idcliente='.$info['id'].'" ><i class="icon-close"></i>Status VIP</a>
                                                              </td>                                                 
                                                          </tr>
                                                 
                                                       ';
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


           