<?php
session_start();
$_SESSION['nom']="Menozzi";
$_SESSION['prenom']="Lorenzo";
$_SESSION['age']=25;
if(isset($_POST['send'])){
    setcookie("login", $_POST["login"]);
    setcookie("password", $_POST["password"]); // ils sont stockés
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br/>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br/>";
    echo $_SERVER['SERVER_NAME'];
    ?>
    </div>
    <div>
        <form action="index.php" method="post">
            Login : <input type = "text" name = "login"><br>
            Mot de passe : <input type = "text" name = "password"><br>
            <input type = "submit" value = "Envoyer" name = "send">
        </form>
    </div>
</body>
</html>