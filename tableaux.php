<?php
/*// exo 1 -------------------------------
$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

// exo 2 ---------------------------------
echo $mois[2];
echo $mois[5];
//var_dump($mois);
$mois[7] = "août";
echo $mois[7];
*/

/*// exo 3 ---------------------------------
$departement = [
    01 => "Ain",
    03 => "Allier",
    07 => "Ardèche",
    15 => "Cantal",
    26 => "Dôme",
    38 => "Isère",
    42 => "Loire",
    43 => "Haite-Loire",
    63 => "Puy-de-Dôme",
    69 => "Rhône",
    73 => "Savoie",
    74 => "Haute-Savoie"
];
echo $departement[69];
$departement[57] = "Metz";
echo $departement[57] . "\n";
foreach ($departement as $key => $value) {
    echo "Le département $value a le numéro $key." . "\n";
};
*/

// exo 4 ---------------------------------------------------
$invite = ["Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou"];
foreach ($invite as $value) {
    echo "Salut $value, devine quoi ! Je me marie samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)" . "\n";
};

?>