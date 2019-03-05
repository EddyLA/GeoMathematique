<?php

/*
Eddy Bardoulat_2018

Ce script calcul le volum et la surface d'un rectangle
renvoi le rayon et le diam�tre d'un cercle en donnant son aire
*/

// Ci-dessous, la fonction qui calcul le volume du rectangle
function VolumeCube($longeur, $hauteur, $profondeur) {

   $volume = ($longeur * $hauteur * $profondeur); // calcul du volume
   return round($volume, 2); // indique la valeur � renvoyer, ici le volume
}
$volume = VolumeCube($_POST['longeur'], $_POST['hauteur'], $_POST['profondeur']);

// Ci-dessous, la fonction qui calcul l'aire du rectangle
function PeriCarre($long, $haut) {

   $peri = ($long * $haut); // calcul de la surface
   return round($peri, 2); // indique la valeur � renvoyer, ici le p�rim�tre
}
$peri = PeriCarre($_POST['long'], $_POST['haut']);

// Ci-dessous, la fonction qui calcul l'aire d'un cercle avec son rayon comme donn�e
function SurfCerc($rayon) {

   $surfcercle = (($rayon * $rayon) * pi()); // calcul de l'aire
   return round($surfcercle, 2); // indique la valeur � renvoyer, ici l'aire
}
$surfcercle = SurfCerc($_POST['rayon']);

// Ci-dessous, la fonction qui calcul l'aire d'un cercle avec son diam�tre comme donn�e
function SurfCerc2($diam) {

   $surf2cercle = ((($diam / 2) * ($diam / 2)) * pi()); // calcul de l'aire
   return round($surf2cercle, 2); // indique la valeur � renvoyer, ici l'aire
}
$surf2cercle = SurfCerc2($_POST['diam']);

// Ci-dessous, la fonction qui donne le rayon d'un cercle avec son aire comme donn�e
function SurfAire($aire) {

   $vol = ($aire / pi()); // calcul du rayon
   $ray = sqrt($vol);// Racine carr� du resultat pour avoir le rayon
   $dia = $ray * 2;//calul pour avoir le diam�tre
   return round($ray, 2); // indique la valeur � renvoyer, ici le rayon avec 2 d�cimales
} 
$ray = SurfAire($_POST['aire']);

// Ci-dessous, la fonction qui donne le diam�tre d'un cercle avec son aire comme donn�e
function SurfAireD($aire) {

   $vol = ($aire / pi()); // on calcul 'pi' pour avoir le rayon
   $dia = sqrt($vol) * 2; // Racine carr� du resultat pour avoir le diam�tre
   return round($dia, 2); // indique la valeur � renvoyer, ici le diam�tre avec 2 d�cimales
}
$dia = SurfAireD($_POST['aire']);
?>