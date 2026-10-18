<?php
// Auteur: Bouslam Fatima Ezzahra - Partie3
require 'config.php';
function mention($note){
 if($note>=16) return "Très bien"; elseif($note>=14) return "Bien";
 elseif($note>=12) return "Assez bien"; elseif($note>=SEUIL) return "Passable"; else return "Ajourné";
}
function afficher($tab){ foreach($tab as $k=>$v) echo "$k => $v (".mention($v).")<br>"; }

include 'includes/entete_inc.php'; include 'includes/menu_inc.php';

$notes=["Mohamed"=>16,"Ahmed"=>14,"Hind"=>13,"Aicha"=>15,"Samir"=>13,"Zakaria"=>13,"Rafik"=>10,"Ilham"=>9,"Hamza"=>7,"Sami"=>7,"Noura"=>14];
$modules=["PHP","JavaScript","Python"];
echo "<h3>Modules</h3>"; foreach($modules as $m) echo "$m<br>"; echo $modules[0]." ".$modules[1]." ".$modules[2]."<br>";

echo "<h2>3.2 Tableau HTML</h2><table><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach($notes as $nom=>$note){ $cls=$note<SEUIL?" class='rouge'":""; echo "<tr$cls><td>$nom</td><td>$note</td><td>".mention($note)."</td></tr>"; } echo "</table>";

// 3.3 Stats sans fonctions
$somme=0; $max=$notes[array_key_first($notes)]; $min=$max;
foreach($notes as $n){ $somme+=$n; if($n>$max) $max=$n; if($n<$min) $min=$n; }
$moy=$somme/count($notes);
echo "Somme boucle=$somme Moyenne=$moy Max=$max Min=$min<br>";
echo "Vérif: ".array_sum($notes)." ".count($notes)." ".max($notes)." ".min($notes)."<br>";

// Effectifs par mention
$effectifs=[]; foreach($notes as $n){ $m=mention($n); $effectifs[$m]=($effectifs[$m]??0)+1; } print_r($effectifs);

// 3.4 Tri
echo "<h3>ksort noms croissants</h3>"; $t=$notes; ksort($t); afficher($t);
echo "<h3>arsort notes décroissantes</h3>"; $t=$notes; arsort($t); afficher($t);
echo "<h3>krsort noms décroissants</h3>"; $t=$notes; krsort($t); afficher($t);
echo "<h3>asort notes croissantes</h3>"; $t=$notes; asort($t); afficher($t);
// Pour tableau indexé $modules : sort() ou rsort()

// 3.5 Opérateurs
$a=["x"=>1,"y"=>2]; $b=["y"=>2,"x"=>1];
var_dump($a+$b); var_dump($a==$b); var_dump($a===$b);
/* + = union, == = mêmes paires clé/valeur sans ordre, === = même ordre + mêmes types */

include 'includes/pied_inc.php';
?>