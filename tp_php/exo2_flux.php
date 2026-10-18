<?php
// Auteur: Bouslam Fatima Ezzahra - Partie2
require 'config.php';
include 'includes/entete_inc.php'; include 'includes/menu_inc.php';

function mention($note){
 if($note>=16) return "Très bien";
 elseif($note>=14) return "Bien";
 elseif($note>=12) return "Assez bien";
 elseif($note>=SEUIL) return "Passable";
 else return "Ajourné";
}

echo "<h2>2.1 Mention</h2>";
foreach([8,10,12,14,16,18] as $n) echo "$n => ".mention($n)."<br>";

echo "<h2>2.2 Switch Mois</h2>";
$mois=date("m");
switch($mois){
 case "01": echo "Janvier"; break;
 case "02": echo "Février"; break;
 case "03": echo "Mars"; break;
 case "04": echo "Avril"; break;
 case "05": echo "Mai"; break;
 case "06": echo "Juin"; break;
 case "07": echo "Juillet"; break;
 case "08": echo "Août"; break;
 case "09": echo "Septembre"; break;
 case "10": echo "Octobre"; break;
 case "11": echo "Novembre"; break;
 case "12": echo "Décembre"; break;
 default: echo "Mois inconnu"; break;
}
// Si on oublie break => fall-through, exécute les cases suivants

echo "<h2>2.3 Boucles</h2>";
// 1 Triangle
for($i=1;$i<=6;$i++){ for($j=1;$j<=$i;$j++) echo "*"; echo "<br>"; }
// 2 while 0-20
$i=0; while($i<=20){ if($i==10) echo "<b>$i</b><br>"; else echo "$i<br>"; $i+=2; }
// 3 pairs avec continue
echo "Pairs 0-10: "; for($i=0;$i<=10;$i++){ if($i%2!=0) continue; echo "$i "; } echo "<br>";
// 4 while switch break2
$i=1; while(true){ switch($i){ case 5: echo "At 5<br>"; break; case 10: echo "At 10; quitting<br>"; break 2; } $i++; }
// 5 do-while différence: do-while exécute au moins 1 fois même si condition fausse au début
$i=0; do{ if($i==10) echo "<b>$i</b><br>"; else echo "$i<br>"; $i+=2; }while($i<=20);

include 'includes/pied_inc.php';
?>