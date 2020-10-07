<body>

  <?php require_once("header.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Categorias</h1>
        <div class="list-group">
          <?php
           include('datos/categorias.php');
           foreach($categorias as $cat){
          ?>
          <a href="products.php?cat=<?php echo $cat['id']?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:'' ?>" class="list-group-item"><?php echo $cat['nombre']?></a>
         <?php } ?> 
          <a href="products.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:'' ?>" class="list-group-item">Todas</a>
        </div>

        <h1 class="my-4">Marcas</h1>
        <div class="list-group">
          <?php
           include('datos/marcas.php');
           foreach($marcas as $m){
          ?>
          <a href="products.php?marca=<?php echo $m['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:'' ?>" class="list-group-item"><?php echo $m['nombre']?></a>
         <?php } ?> 
         <a href="products.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:'' ?>" class="list-group-item">Todas</a>
        </div>


      </div>
      
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <?php
           include('datos/productos.php');
           foreach($imagenes as $i){
          ?>
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/<?php echo $i?>" alt="First slide">
            </div>
            <?php
           }
          ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <?php
          $i=0;
           foreach($productos as $p){
             if($p['activo'] == true){
          ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="product.php?id=<?php echo $p['id']?>"><img class="card-img-top" src="<?php echo $p['imagen']?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="product.php?id=<?php echo $p['id']?>"><?php echo $p['nombre']?></a>
                </h4>
                <h5><?php echo $p['precio']?>$</h5>
                <p class="card-text"><?php echo $p['descripcion']?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><?php echo $p['puntuacion']?></small>
              </div>
            </div>
          </div>
          <?php
          $i++;
          if($i == 10) {
               break; // because we don't want to continue the loop
              } 
            }
          }
          ?>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php require_once("footer.php"); ?>

    <!-- /.container -->


</body>

</html>
