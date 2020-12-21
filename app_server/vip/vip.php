<?php

include '../../coneccion/coneccion.php';

$sql = pg_query("SELECT * from dopcoinvip");
$row = pg_fetch_assoc($sql);


?>  
<style type="text/css">
    .colorwe{ 
      text-align: center;
     }
</style>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            
          
            
               
                    <div class="row">
                        <div class="col-xs-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">VIP</div>
                                        <div class="description">Tasa de compra-venta exclusiva para nuestros clientes vip</div>
                                    </div>
                                    <div class="pull-right card-action">
                                        <div class="btn-group" role="group" aria-label="...">
                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardBannerExample"><i class="fa fa-code"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <strong><h3>Compra</h3></strong>
                                            <a href="?page=compravip">
                                                <div class="card blue summary-inline">
                                                    <div class="card-body">
                                                        <i class="icon fa fa-usd fa-4x"></i>
                                                        <div class="content">
                                                            <div class="title"><?php echo $row['precio_compra'];?></div>
                                                            <div class="sub-title">USD</div>
                                                        </div>
                                                        <div class="clear-both"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><br><br><br>
                                            <div class="sub-title" >
                                                <p class="colorwe">Minimo: <?php echo $row['minimo'];?> Dopcoin</p><br>
                                                <p>VIA: BTC/ETH/LTC/TRANSFERENCIA</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <strong><h3>Venta</h3></strong>
                                            <a href="?page=ventavip">
                                                <div class="card blue summary-inline">
                                                    <div class="card-body">
                                                        <i class="icon fa fa-usd fa-4x"></i>
                                                        <div class="content">
                                                            <div class="title"><?php echo $row['precio_venta'];?></div>
                                                            <div class="sub-title">USD</div>
                                                        </div>
                                                        <div class="clear-both"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
            
                
        </div>
        </div>
    </body>
                        