<?php
// DOIT être première ligne, avant tout HTML
session_start();
$cookie_login = $_COOKIE['dernier_login'] ?? '';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $login=trim($_POST['login']??'');
 $_SESSION['login']=$login;
 setcookie("dernier_login",$login,time()+86400,"/");
 // Variante tableau json: setcookie("user", json_encode(['login'=>$login,'date'=>date('Y-m-d')]), time()+86400,"/");
 header("Location: profil.php"); exit;
}
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Login</title></head><body>
<form method="POST">
Login: <input name="login" value="<?= htmlspecialchars($cookie_login) ?>" required>
<button>Connexion</button>
</form>
</body></html>