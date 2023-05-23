
<?php

// for ($numeroInicial=0; $numeroInicial<10; $numeroInicial++) {
//   echo "Numero ".$numeroInicial;
// } 

// $ninicial = 5;

// do {
//   echo "Número".$ninicial."<br/>";
//   $ninicial++;
// } while($ninicial<10)

$ninicial = 5;

while($ninicial<=10) {
  echo "Número".$ninicial."<br/>";
  $ninicial++;
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
  <form action="ejercicio5.php" method="post">
    
    <input type="submit" name="btnValor" value="1">
    <br>
    <input type="submit" name="btnValor" value="2">
    <br>
    <input type="submit" name="btnValor" value="3">

  </form>

</body>
</html>