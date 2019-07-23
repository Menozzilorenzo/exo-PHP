<!-- exo 5 -6 formulaires -->
<!--<h2>Formulaire GET</h2>
<form action = "user.php" method="get">
    Votre nom : <input type = "text" name = "nom"><br />
    Votre prénom : <input type = "text" name = "prenom"><br />
    <input type = "submit" value = "Envoyer">
-->
<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilite']) && isset($_FILES['fileUpload'])){
    echo $_POST['civilite'];
    echo "<br/>";
    echo $_POST['nom'];
    echo "<br/>";
    echo $_POST['prenom'];
    echo "<br/>";
    if($_FILES['fileUpload']['type'] == "application/pdf"){
        echo $_FILES['fileUpload']['name'].$_FILES['fileUpload']['type'];
    } else {
        echo "Ceci n'est pas un fichier PDF !!!";
    };
} else{
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
        <h2>Formulaire POST</h2>
        <form action = "index.php" method="post" enctype="multipart/form-data">
        Civilité :
        <select name="civilite" id="1">
            <option>Mr</option>
            <option>Mme</option>
        </select><br>
        Votre nom : <input type = "text" name = "nom"><br>
        Votre prénom : <input type = "text" name = "prenom"><br>
        Fichier : <input type = "file" name = "fileUpload"><br>
        <input type = "submit" value = "Envoyer">
    </body>
    </html>
<?php
};

// ajouter du required pour les champs
?>