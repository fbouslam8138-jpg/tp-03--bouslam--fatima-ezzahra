<?php
require 'config.php'; include 'includes/entete_inc.php'; include 'includes/menu_inc.php';
$nom=htmlspecialchars($_GET['nom']??''); $prenom=htmlspecialchars($_GET['prenom']??''); $sexe=$_GET['sexe']??'M';
echo ($sexe=='M'?"Bonjour Monsieur ":"Bonjour Madame ")."$prenom $nom";
include 'includes/pied_inc.php';
?>