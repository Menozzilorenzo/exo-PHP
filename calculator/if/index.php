<!doctype html>
<html lang="en">
  <head>
    <title>Calculator If</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="index.php" method="POST">
        <a>Nombre 1 : </a><input type="number" name="nombreOne" id="one">
        <a>Nombre 2 : </a><input type="number" name="nombreTwo" id="two">
        <input type="submit" value="+" name="addition">
        <input type="submit" value="-" name="soustraction">
        <input type="submit" value="/" name="division">
        <input type="submit" value="*" name="multiplication">
        <input type="submit" value="%" name="modulo">
        <input type="button" name="clear" value="Clear" onclick="clean()">
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      function clean() {
        document.getElementById('one').value = "";
        document.getElementById('two').value = "";
      };
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST['addition'])){
  $nombreOne = $_POST['nombreOne'];
  $nombreTwo = $_POST['nombreTwo'];
  $resultatAdd = $nombreOne + $nombreTwo;
  echo $resultatAdd;
} elseif(isset($_POST['soustraction'])){
  $nombreOne = $_POST['nombreOne'];
  $nombreTwo = $_POST['nombreTwo'];
  $resultatSubs = $nombreOne - $nombreTwo;
  echo $resultatSubs;
} elseif(isset($_POST['division'])){
  $nombreOne = $_POST['nombreOne'];
  $nombreTwo = $_POST['nombreTwo'];
  $resultatDiv = $nombreOne / $nombreTwo;
  echo $resultatDiv;
} elseif(isset($_POST['multiplication'])){
  $nombreOne = $_POST['nombreOne'];
  $nombreTwo = $_POST['nombreTwo'];
  $resultatMult = $nombreOne * $nombreTwo;
  echo $resultatMult;
} elseif(isset($_POST['modulo'])){
  $nombreOne = $_POST['nombreOne'];
  $nombreTwo = $_POST['nombreTwo'];
  if($nombreTwo != 0){
    $resultatMod = $nombreOne % $nombreTwo;
    echo $resultatMod;
  } else {"Erreur, impossible";};
};
?>