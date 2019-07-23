<?php
// //exo 1 -------------------------------------
// function true(){
//     return true;
// };
// echo true();


// exo 2 --------------------------------------
// function cafe($a = "Un Cappucino s'il vous plaît."){
//     return $a;
// };
// echo cafe();
// function cafeTwo($b = "Cappucino"){
//     return "Un $b s'il vous plaît.";
// };
// echo cafeTwo();


/*// exo 3 ----------------------------------------
function name($prenom = "Lorenzo", $nom = "Menozzi"){
    return "Je m'appelle $nom $prenom.";
};
echo name();
*/

// exo 4 ------------------------------------------
// function chiffre($a, $b){
//     if($a > $b){
//         echo "Le premier nombre est plus grand";
//     } elseif ($a < $b) {
//         echo "Le premier nombre est plus petit";
//     } else {
//         echo "les deux nombres sont identiques";
//     }
// };
// chiffre(22, 22);

/*// exo 5 --------------------------------------------
function concat($nbre = 5, $chaine = "pommes"){
    return $nbre . " " . $chaine;
};
echo concat();
*/

/*// exo 6 --------------------------------------------
function phrase($nom, $prenom, $age){
    return "Bonjour $nom $prenom, tu as $age ans";
};
echo phrase("Menozzi", "Lorenzo", 25);
*/

// exo 7 ---------------------------------------------
/*function genreAge($genre, $age){
    if($genre === "homme" && $age > 18){
        echo "Vous êtes un homme et vous êtes majeur";
    } elseif($genre === "homme" && $age < 18){
        echo "Vous êtes un homme et vous êtes mineur";
    } elseif($genre !== "homme" && $age > 18){
        echo "Vous êtes une femme et vous êtes majeur";
    } else{
        echo "Vous êtes une femme et vous êtes mineur";
    };
};
echo genreAge("homme", 25);
*/

// exo 8 -----------------------------------------------
function addition($a = 22, $b = 11, $c = 45){
    return $a + $b + $c;
};
echo addition();

?>