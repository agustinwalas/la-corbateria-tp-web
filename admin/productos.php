<?php require_once("header.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row data">
                    <div class="col-lg-12">
                     <h2>LA CORBATERIA PRODUCTOS</h2>   
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>descripcion</th>
                                    <th>precio</th>
                                    <th>imagen</th>
                                    <th>visible</th>
                                    <th>Modificar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('../datos/productos.php');
                            foreach($productos as $p){
                            ?>
                                <tr>
                                    <td><?php echo $p['id']?></td>
                                    <td><?php echo $p['nombre']?></td>
                                    <td><?php echo $p['descripcion']?></td>
                                    <td><?php echo $p['precio']?></td>
                                    <td><?php echo $p['imagen']?></td>
                                    <td><?php /* if($p['activo'] == true) {echo "visible"} else { "oculto" } */ ?></td>
                                    <td><a href="">Editar</a> <a href="">Eliminar</a> </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>


                </div>              
                  <hr/>      
            </div>
        </div>
<?php require_once("footer.php"); ?>