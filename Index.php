<?php 
/*
Eddy Bardoulat_2018
Ce script calcul le volum et la surface d'un rectangle
renvoi le rayon et le diamètre d'un cercle en donnant son aire
*/

define("BASE","./");
require_once("./includes/functions.class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title><?php echo utf8_encode('Géométrie'); ?></title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <link rel="stylesheet" media="screen" type="text/css" title="stylesheet" href="css/geo.css" />
   </head>
<body>
<h2><?php echo utf8_encode('Calcul de formes géométriques'); ?></h2>

<!--D&eacute;but Partie Rectangle -->
<form id="cvr" action="index.php" method="post" name="cvr">
<fieldset>
<legend>Calcul du volume d'un rectangle</legend><br/>
    <label for="longueur">Veuillez taper sa longeur :</label>
	<input type="text" name="longeur" id="longeur" size="12" maxlength="12"/> cm/m<br />
    <label for="hauteur">Veuillez taper sa hauteur :</label>
	<input type="text" name="hauteur" id="hauteur" size="12" maxlength="12"/> cm/m<br />
    <label for="profondeur">Veuillez taper sa profondeur :</label>
	<input type="text" name="profondeur" id="profondeur" size="12" maxlength="12"/> cm/m<br/><br/>
	<label for="totalvolrec">Son volume est de :</label><b><?php echo $volume; ?></b> <?php echo utf8_encode('cm³/m³'); ?><br />
</fieldset>
<input type="submit" name="Submit" value="Calculer" />&nbsp;<input type="reset" name="reset" value="Effacer" />
</form>
<!--Fin Partie Rectangle -->

<!--D&eacute;but Partie Surface -->
<br/><br/>
<form id="csr" action="" method="post" name="csr">
<fieldset>
<legend>Calcul de la surface d'un rectangle</legend><br/>
    <label for="long">Veuillez taper sa longeur :</label>
	<input type="text" name="long" id="long" size="12" maxlength="12"/> cm/m<br />
    <label for="haut">Veuillez taper sa hauteur :</label>
	<input type="text" name="haut" id="haut" size="12" maxlength="12"/> cm/m<br />
    <label for="totalsurfrec">Sa surface est de :</label><b><?php echo $peri; ?></b> <?php echo utf8_encode('cm²/m²'); ?><br />
</fieldset>
<input type="submit" name="Submit" value="Calculer" />&nbsp;<input type="reset" name="reset" value="Effacer" />
</form>
<!--Fin Partie Surface -->

<!--D&eacute;but Partie Cercle -->
<br/><br/>
<form id="csc" action="" method="post" name="csc">
<fieldset>
<legend>Calcul de la surface d'un cercle</legend><br/>
    <label for="rayon">Veuillez taper son rayon :</label>
	<input type="text" name="rayon" id="rayon" size="12" maxlength="12"/> cm/m<br />
    <label for="totalsurfc">Son aire est de :</label><b><?php echo $surfcercle; ?></b> <?php echo utf8_encode('cm²/m²'); ?><br /><br />
	<label for="diam"><?php echo utf8_encode('Veuillez taper son diamètre'); ?> :</label>
	<input type="text" name="diam" id="diam" size="12" maxlength="12"/> cm/m<br />
    <label for="totalsurf2">Son aire est de :</label><b><?php echo $surf2cercle; ?></b> <?php echo utf8_encode('cm²/m²'); ?><br /><br />
	<label for="aire">Veuillez taper son aire :</label>
	<input type="text" name="aire" id="aire" size="12" maxlength="12"/> <?php echo utf8_encode('cm²/m²'); ?><br />
    <label for="totalray">Son rayon est de :</label><b><?php echo $ray; ?></b> cm/m<br />
	<label for="totaldiam"><?php echo utf8_encode('Son diamètre est de'); ?> :</label><b><?php echo $dia; ?></b> cm/m<br />
</fieldset>
<input type="submit" name="Submit" value="Calculer" />&nbsp;<input type="reset" name="reset" value="Effacer" />
</form>
<!--Fin Partie Cercle -->

</body>
</html>
