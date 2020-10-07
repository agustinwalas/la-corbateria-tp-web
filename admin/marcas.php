<?php require_once("header.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row data">
                    <div class="col-lg-12">
                     <h2>LA CORBATERIA MARCAS</h2>   
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('../datos/marcas.php');
                            foreach($marcas as $m){
                            ?>
                                <tr>
                                    <td><?php echo $m['id']?></td>
                                    <td><?php echo $m['nombre']?></td>
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