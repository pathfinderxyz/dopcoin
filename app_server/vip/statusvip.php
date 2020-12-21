<?php

include '../../coneccion/coneccion.php';

$idp = $_GET['idcliente'];

?>          
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Cambiar Status VIP</div>
                                    </div>
                                    <div class="pull-right card-action">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal form-material" action="app_server/vip/updatevip.php" method="post">
                                        <p>
                                             Elija el nuevo status del cliente<br><br>
                                         </p>
                                        <div class="col-sm-8">
                                          <div class="form-group">
                                          <select class="form-control" name="estado" id="estado" required="">
                                                
                                               <option value=""></option>
                                               <option value="activo">Activo</option>
                                               <option value="no activo">No Activo</option>
                                               <option value="procesando">Procesando</option>
                                               
                                                
                                        </select>
                                        </div>                                        
                                        <br>

                                         <input type="hidden" name="idp" value="<?php echo $idp ;?>">
                                         <a class="btn btn-default" <a href="?page=alluser"><i class="icon-close"></i>Cancelar</a>
                                         <button type="submit" class="btn btn-success">Guardar</button>
                                          <br> <br>
                                         </div>
                                       
                                     </form>

                                  </div>  

                             </div> 
                        </div>    
                        <div class="col-sm-3">
                        </div>
                        
                    </div>