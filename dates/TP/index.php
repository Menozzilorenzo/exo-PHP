<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <a>TP Calendrier</a>
    <form action="index.php" method="post">
    <select name="liste_mois" id="mois">
    <?php
    $mois = [1=> "Janvier", 2=> "Février", 3=> "Mars", 4=> "Avril", 5=> "Mai", 6=> "Juin", 7=> "Juillet", 8=> "Août", 9=> "Septembre", 10=> "Octobre", 11=> "Novembre", 12=> "Décembre"];
    foreach ($mois as $index => $value) {
        echo '<option value="'.$index.'" id="'.$value.'">'.$value.'</option>';
    };
    ?>
    </select>
    <select name="liste_annee" id="annee">
    <?php
    for($i = 2010; $i <= 2019; $i++){
        echo '<option id="'.$i.'">'.$i.'</option>';
    };
    ?>
    </select>
    <input type = "submit" value = "Soumettre">
    </form>
    <?php
    $mois = [1=> "Janvier", 2=> "Février", 3=> "Mars", 4=> "Avril", 5=> "Mai", 6=> "Juin", 7=> "Juillet", 8=> "Août", 9=> "Septembre", 10=> "Octobre", 11=> "Novembre", 12=> "Décembre"];
    $semaine = [6, 0, 1, 2, 3, 4, 5];
    $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    $t = mktime(12, 0, 0, $_POST['liste_mois'], 1, $_POST['liste_annee']);
    // echo $_POST['liste_annee'];
    // echo $_POST['liste_mois'];
    echo '<table class="border table text-center w-50 p-3"><tbody>';
    echo '<tr class="border text-center"><td colspan="7">'.$_POST['liste_annee'].'</td></tr>';
    echo '<tr class="border text-center"><td colspan="7">'.$mois[$_POST['liste_mois']].'</td></tr>';
    echo '<tr class="border">';
    for($a=0; $a<7; $a++){
        echo '<td class="border text-center">'.$jours[$a].'</td>';
    };
    echo '</tr>';
    for($b = 0; $b < 6; $b++){
        echo '<tr class="border">';
        for($a = 0; $a < 7; $a++){
            $w = $semaine[(int)date('w', $t)]; // jour de la semaine à traiter
            $c = (int)date('n', $t);
            if(($w == $a) && ($c == $_POST['liste_mois'])){
                echo '<td class="border text-center">'.date('j', $t).'</td>';
                $t += 86400;
            } else{
                echo '<td class="border">&nbsp;</td>';
            };
        };
        echo '</tr>';
    };
    echo '</tbody></table>';
    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>