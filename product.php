<!DOCTYPE html>
<html lang="en">
<?php include('datos/productos.php');
foreach($productos as $p){
  if($p['id'] == $_GET['id']){
  break;
  }
}
?>
<head>
  <title><?php echo $p['nombre']?></title>
</head>

<body>

<?php require_once("header.php");

?>

  <!-- Page Content -->
  <div class="container">
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?php echo $p['imagen']?>" alt="">
          <div class="card-body">
            <h3 class="card-title"> <?php echo $p['nombre']?> </h3>
            <h4><?php echo $p['precio']?>$</h4>
            <p class="card-text"><?php echo $p['descripcion']?></p>
            <span class="text-warning"><?php echo $p['puntuacion']?></span>
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Comentarios
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->


    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php require_once("footer.php"); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
