<!doctype html>
<html lang="en">
  <head>
    <title>Calculator Switch</title>
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
        <a>Opération : </a>
        <select name="operation" value="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="submit" value="Calculer">
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
if(isset($_POST['nombreOne']) && isset($_POST['nombreTwo']) && isset($_POST['operation'])){
    $nbreOne = $_POST['nombreOne'];
    $nbreTwo = $_POST['nombreTwo'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case '+':
            $resultAdd = $nbreOne + $nbreTwo;
            echo $resultAdd;
            break;
        case '-':
            $resultSubs = $nbreOne - $nbreTwo;
            echo $resultSubs;
            break;
        case '*':
            $resultMult = $nbreOne * $nbreTwo;
            echo $resultMult;
            break;
        case '/':
            if($nbreTwo != 0){
                $resultDiv = $nbreOne / $nbreTwo;
                echo $resultDiv;
            } else {echo "erreur, division impossible par 0";};
            break;
        case '%':
            if($nbreTwo != 0){
                $resultMod = $nbreOne % $nbreTwo;
                echo $resultMod;
            } else {"erreur, division impossible par 0";};
            break;
        default:
            echo "Choisissez un opérateur";
            break;
    };
};

?>