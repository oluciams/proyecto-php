<?php include("header.php");?>
<?php include("connection.php");?>

<?php
  if($_POST) {

    $name = $_POST["name"];
    $description = $_POST["description"];

    $fecha = new DateTime();

    $imagen = $fecha->getTimestamp()."_".$_FILES["imagen"]["name"];

    $imagen_temporal = $_FILES["imagen"]["tmp_name"];

    move_uploaded_file($imagen_temporal, "imagenes/".$imagen);

    $objConnection = new connectionphp();  
    $sql = "INSERT INTO `proyectos` (`id`, `name`, `image`, `description`) VALUES (NULL, '$name' , '$imagen', '$description');";  
    $objConnection->ejecutar($sql);
    header("location:portafolio.php");
  }

  if($_GET) {

    $id= $_GET["borrar"];
    $objConnection = new connectionphp();

    $imagen = $objConnection->consultar("SELECT image FROM `proyectos` WHERE id=".$id);    
    unlink("imagenes/".$imagen[0]['image']);

    $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id;
    $objConnection->ejecutar($sql);
    header("location:portafolio.php");
  }

  $objConnection = new connectionphp();
  $proyectos = $objConnection->consultar("SELECT * FROM `proyectos`");
 

?>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Datos del Proyecto
        </div>
        <div class="card-body">
          
          <form action="portafolio.php" method="post" enctype="multipart/form-data">
            Nombre del proyecto: <input required class="form-control" type="text" name="name">
            <br>  
            Imagen del proyecto: <input required class="form-control" type="file" name="imagen">
            <br>
            Descripcion:
            <textarea required class="form-control" name="description" rows="3"></textarea>
            <br>

            <input class="btn btn-success" type="submit" value="Enviar">
          </form>
          
        </div>
        <div class="card-footer text-muted">
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($proyectos as $proyecto){?>
            <tr>
              <td><?php echo $proyecto["id"]; ?></td>
              <td><?php echo $proyecto["name"]; ?></td>
              <td>
                <img width="100" src="imagenes/<?php echo $proyecto['image']; ?>" alt="" srcset="">
              </td>
              <td><?php echo $proyecto["description"]; ?></td>
              <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto["id"]; ?>" >Eliminar</a> </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
    </div>
</div>






<?php include("footer.php"); ?>