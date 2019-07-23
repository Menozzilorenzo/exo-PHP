<h2> Formu post </h2>
<form action = "user.php" method="post">
    Votre nom : <input type = "text" name = "nom"><br />
    Votre prénom : <input type = "text" name = "prenom"><br />
<input type = "submit" value = "Envoyer">   
<?php
// serveur local: php -S localhost:8080 index.php
// exo 1 ----------------------------------------------------
// url: http://localhost:8080/?nom=Nemare&prenom=Jean
/*if(isset($_GET['nom']) AND isset($_GET['prenom'])){
    echo $_GET['nom'] . $_GET['prenom'];
} else {
    echo "Ces paramètre n'existent pas.";
};

// exo 2 ----------------------------------------------------
// url: http://localhost:8080/?nom=Nemare&prenom=Jean
/*if(isset($_GET['age'])){
    echo $_GET['age'];
} else {
    echo "Le paramètre age n'existe pas.";
};
*/

// exo 3 ----------------------------------------------------
// url: http://localhost:8080/?dateDebut=2/05/2016&dateFin=27/11/2016
/*if(isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
    echo $_GET['dateDebut'].$_GET['dateFin'];
} else {
    echo "Ces paramètres n'existent pas.";
};
*/

// exo 4 ----------------------------------------------------
// url: http://localhost:8080/?langage=PHP&serveur=LAMP
/*if(isset($_GET['langage']) AND isset($_GET['serveur'])){
    echo $_GET['langage'] . $_GET['serveur'];
} else {
    echo "Ces paramètres n'existent pas.";
};
*/

// exo 5 ----------------------------------------------------
// url: http://localhost:8080/?semaine=12
/*if(isset($_GET['semaine'])){
    echo $_GET['semaine'];
} else {
    echo "Ce paramètre n'existe pas.";
};
*/

// exo 6 ----------------------------------------------------
// url: http://localhost:8080/?batiment=12&salle=101
/*if(isset($_GET['batiment']) AND isset($_GET['salle'])){
    echo $_GET['batiment'] . $_GET['salle'];
} else {
    echo "Ces paramètres n'existent pas.";
};
*/

?>