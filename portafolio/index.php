<?php include("header.php");?>
<?php include("connection.php");?>

<?php 
  $objConnection = new connectionphp();
  $proyectos = $objConnection->consultar("SELECT * FROM `proyectos`");
?>

<div class="p-5 bg-ligth"> 
  <div class="container">
    <h1 class="display-3">Bienvenid@s</h1>
    <p class="lead">Este es un portafolio</p>
    <hr class="my-2">
    <p >Más información</p>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($proyectos as $proyecto) { ?>

  <div class="col">
    <div class="card h-100">
      <img src="imagenes/<?php echo $proyecto['image']; ?>" class="card-img-top" alt="<?php echo $proyecto["name"]; ?>">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $proyecto["name"]; ?> </h5>
        <p class="card-text"> <?php echo $proyecto["description"]; ?> </p>
      </div>
    </div>
  </div>

<?php } ?>

</div>

<?php include("footer.php");?>
