<?php
session_start();
echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['age'];
echo $_COOKIE["login"];
echo $_COOKIE["password"];
?>