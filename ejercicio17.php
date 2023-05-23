
<?php

$name= "";
$lenguaje= "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";
$anime = "";
$comentario = ""; 

if($_POST) {
  $name = (isset($_POST["name"])) ? $_POST["name"] : "";
  $lenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";

  $chkphp = (isset($_POST["chkphp"]) == "si") ? "checked" : "";
  $chkhtml = (isset($_POST["chkhtml"]) == "si") ? "checked" : "";
  $chkcss = (isset($_POST["chkcss"]) == "si") ? "checked" : "";

  $anime = (isset($_POST["anime"])) ? $_POST["anime"] : "";

  $comentario = (isset($_POST["comentario"])) ? $_POST["comentario"] : ""; 

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php if($_POST) { ?>
  <strong>Hola</strong>: <?php echo $name; ?><br>
  <strong>Tu lenguaje es: </strong> <?php echo $lenguaje; ?><br>
  <strong>Estas aprendiendo: </strong><br>
  <?php echo ($chkphp == "checked") ? "PHP" : "";?><br>
  <?php echo ($chkhtml == "checked") ? "HTML" : "";?><br>
  <?php echo ($chkcss == "checked") ? "CSS" : "";?><br>
  <strong>El anime que te gusta es: </strong> <?php echo $anime; ?><br>
  <strong>Tu comentario es: </strong> <?php echo $comentario; ?><br>

  <?php } ?>
  <br>


  <form action="ejercicio17.php" method="post">

    Nombre: <br>
    <input type="text" name="name" id="" value="<?php echo $name; ?>">
    <br>
    <br>
    ¿Te gusta?: <br>
    <br> php : <input type="radio" <?php echo ($lenguaje == "php") ? "checked" : "";?> name="lenguaje" value="php"><br>
    <br> html : <input type="radio" <?php echo ($lenguaje == "html") ? "checked" : "";?> name="lenguaje" value="html"><br>
    <br> css : <input type="radio" <?php echo ($lenguaje == "css") ? "checked" : "";?> name="lenguaje" value="css"><br>
    <br>

    Estas aprendiendo... <br>
    <br> php : <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si"><br>
    <br> html : <input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si"><br>
    <br> css : <input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si"><br>
    <br>

    ¿Que anime te gusta? <br>
    <select name="anime" id="" >
      <option value="">Ninguna serie</option>
      <option value="naruto" <?php echo ($anime == "naruto")? "selected" : "";?> >Naruto</option>
      <option value="bleach" <?php echo ($anime == "bleach")? "selected" : "";?> >Bleach</option>
      <option value="dragon" <?php echo ($anime == "dragon")? "selected" : "";?> >Dragon Ball</option>
    </select>
    <br>
    <br>
    tienes dudas: <br>
    <textarea name="comentario" id="" cols="30" rows="10">
      <?php echo $comentario;?> 
    </textarea><br>
    <br>

    <input type="submit" value="Enviar">
    
  </form>

</body>
</html>