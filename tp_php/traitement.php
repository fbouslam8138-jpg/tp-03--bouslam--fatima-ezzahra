<?php
// Auteur: Bouslam Fatima Ezzahra
require 'config.php'; include 'includes/entete_inc.php'; include 'includes/menu_inc.php';

if(!isset($_POST['nom'],$_POST['note_info'],$_POST['note_math']) || empty($_POST['nom'])){
 echo "Champs manquants"; exit;
}
$nom=htmlspecialchars(trim($_POST['nom']));
$info=(float)$_POST['note_info']; $math=(float)$_POST['note_math'];

if($info<NOTE_MIN||$info>NOTE_MAX||$math<NOTE_MIN||$math>NOTE_MAX){ echo "Notes invalides (0-20)"; exit; }

echo "Récap: $nom - Info:$info Math:$math Moy:".(($info+$math)/2);

// Ecriture CSV Partie5.1
if(!is_dir('data')) mkdir('data');
$f=fopen('data/notes.csv','a');
fputcsv($f,[$nom,$info,$math],';');
fclose($f);
echo "<br>Enregistré dans data/notes.csv";

/* POST vs GET: POST ne montre pas données dans URL, plus sécurisé pour mdp, pas de limite taille
   $_REQUEST contient $_GET + $_POST + $_COOKIE
   mode "w" écrase le fichier, "a" ajoute à la fin */
include 'includes/pied_inc.php';
?>