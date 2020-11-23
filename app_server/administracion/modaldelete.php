<?php

include '../../coneccion/coneccion.php';

$idp = $_GET['idcliente'];

$sql2 = pg_query("SELECT * from persona where id ='$idp'");
$row2 = pg_fetch_assoc($sql2);


?>          
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Eliminar usuario</div>
                                    </div>
                                    <div class="pull-right card-action">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal form-material" action="app_server/usuarios/delete_user.php" method="post">
                                         <p>
                                             Esta seguro que desea eliminar a <?php echo ''.$row2["nombre"].'' ; ?><br><br>
                                         </p>

                                         <input type="hidden" name="idp" value="<?php echo $idp ;?>">
                                         <a class="btn btn-default" <a href="?page=alluser"><i class="icon-close"></i>Cancelar</a>
                                         <button type="submit" class="btn btn-danger">Eliminar</button>
                              
                                       
                                     </form>

                                  </div>  
                             </div> 
                        </div>    
                        <div class="col-sm-3">
                        </div>
                        
                    </div>