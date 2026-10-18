<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit; }
echo "Bienvenue ".htmlspecialchars($_SESSION['login'])."<br><a href='deconnexion.php'>Déconnexion</a>";
if(isset($_COOKIE['dernier_login'])) echo "<br>Dernier login cookie: ".htmlspecialchars($_COOKIE['dernier_login']);
// Lecture variante json: $u=json_decode($_COOKIE['user'],true);
?>