<?php
// Auteur: Bouslam Fatima Ezzahra - TP Partie1 - 18/10/2026
// Commentaire ligne avec //
// Commentaire ligne avec #
/* Commentaire sur plusieurs lignes
   pour le TP */
require 'config.php';
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

// 1.1
echo "<h2>1.1 Variables</h2>";
$x=1; $_x=2; $Prix_HT=3; $état="ok"; // Valides
// $2x invalide commence par chiffre
// $x-y invalide tiret = soustraction
// $prix ht invalide espace
$a=5; $A=10; echo "\$a=$a et \$A=$A distincts<br>";

// 1.2
echo "<h2>1.2 Constantes</h2>";
echo ETABLISSEMENT."<br>".NOTE_MIN."<br>".NOTE_MAX."<br>".SEUIL."<br>";
var_dump(defined('SEUIL'), defined('INCONNUE'));
/* Si constante non définie => Warning + Error en PHP8
   const = compilation, global, pas conditionnel
   define() = exécution, peut être dans if/fonction */

// 1.3
echo "<h2>1.3 Calcul</h2>";
$prix_ht=60; $tva=20; $ttc=$prix_ht*(1+$tva/100);
echo "Le prix TTC du produit est de $ttc €.<br>";

// 1.4
echo "<h2>1.4 Types</h2>";
$test=42; $test=(string)$test; var_dump($test);
var_dump((bool)0,(bool)0.0,(bool)"0",(bool)"",(bool)"abc",(bool)[],(bool)null);
var_dump((int)3.9,(int)"12abc",(float)"1.5e3",(int)true);
$dec=255;$hex=0xFF;$oct=0377;$bin=0b11111111;
echo "$dec $hex $oct $bin<br>";

// 1.5
echo "<h2>1.5 Chaînes</h2>";
$traitees="égales à"; $ici=2;
echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo "Voulez-vous supprimer C:\\*.*? <br>";
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";

$s="*Bonjour les développeurs*";
echo trim($s,"*")."<br>";
$str=trim($s,"*");
for($i=0;$i<strlen($str);$i++){
 echo $str[$i]."<br>";
}

include 'includes/pied_inc.php';
?>