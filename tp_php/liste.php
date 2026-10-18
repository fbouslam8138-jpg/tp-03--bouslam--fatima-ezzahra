<?php
require 'config.php'; include 'includes/entete_inc.php'; include 'includes/menu_inc.php';
$file='data/notes.csv';
if(!file_exists($file)){ echo "Aucun fichier"; exit; }
$f=fopen($file,'r'); if(!$f){ echo "Erreur ouverture"; exit; }

echo "<table><tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";
function mention($n){ if($n>=16)return "Très bien"; elseif($n>=14)return "Bien"; elseif($n>=12)return "Assez bien"; elseif($n>=SEUIL)return "Passable"; else return "Ajourné"; }
$total=0; $nb=0;
while(($row=fgetcsv($f,1000,';'))!==false){
 $moy=($row[1]+$row[2])/2; $total+=$moy; $nb++;
 echo "<tr><td>".htmlspecialchars($row[0])."</td><td>$row[1]</td><td>$row[2]</td><td>$moy</td><td>".mention($moy)."</td></tr>";
}
fclose($f);
echo "</table>";
if($nb>0) echo "Moyenne générale: ".($total/$nb);

include 'includes/pied_inc.php';
?>