<?php

/*
Eddy Bardoulat_2018

Ce script calcul le volum et la surface d'un rectangle
renvoi le rayon et le diamètre d'un cercle en donnant son aire
*/

// Ci-dessous, la fonction qui calcul le volume du rectangle
function VolumeCube($longeur, $hauteur, $profondeur) {

   $volume = ($longeur * $hauteur * $profondeur); // calcul du volume
   return round($volume, 2); // indique la valeur à renvoyer, ici le volume
}
$volume = VolumeCube($_POST['longeur'], $_POST['hauteur'], $_POST['profondeur']);

// Ci-dessous, la fonction qui calcul l'aire du rectangle
function PeriCarre($long, $haut) {

   $peri = ($long * $haut); // calcul de la surface
   return round($peri, 2); // indique la valeur à renvoyer, ici le périmètre
}
$peri = PeriCarre($_POST['long'], $_POST['haut']);

// Ci-dessous, la fonction qui calcul l'aire d'un cercle avec son rayon comme donnée
function SurfCerc($rayon) {

   $surfcercle = (($rayon * $rayon) * pi()); // calcul de l'aire
   return round($surfcercle, 2); // indique la valeur à renvoyer, ici l'aire
}
$surfcercle = SurfCerc($_POST['rayon']);

// Ci-dessous, la fonction qui calcul l'aire d'un cercle avec son diamètre comme donnée
function SurfCerc2($diam) {

   $surf2cercle = ((($diam / 2) * ($diam / 2)) * pi()); // calcul de l'aire
   return round($surf2cercle, 2); // indique la valeur à renvoyer, ici l'aire
}
$surf2cercle = SurfCerc2($_POST['diam']);

// Ci-dessous, la fonction qui donne le rayon d'un cercle avec son aire comme donnée
function SurfAire($aire) {

   $vol = ($aire / pi()); // calcul du rayon
   $ray = sqrt($vol);// Racine carré du resultat pour avoir le rayon
   $dia = $ray * 2;//calul pour avoir le diamètre
   return round($ray, 2); // indique la valeur à renvoyer, ici le rayon avec 2 décimales
} 
$ray = SurfAire($_POST['aire']);

// Ci-dessous, la fonction qui donne le diamètre d'un cercle avec son aire comme donnée
function SurfAireD($aire) {

   $vol = ($aire / pi()); // on calcul 'pi' pour avoir le rayon
   $dia = sqrt($vol) * 2; // Racine carré du resultat pour avoir le diamètre
   return round($dia, 2); // indique la valeur à renvoyer, ici le diamètre avec 2 décimales
}
$dia = SurfAireD($_POST['aire']);
?>