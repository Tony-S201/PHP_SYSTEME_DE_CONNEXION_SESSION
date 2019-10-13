<?php 
session_start();

require_once 'auth.php';
//Fonction de /auth.php qui redirige l'utilisateur vers login.php si il n'est pas connecté
forcer_utilisateur_connecte();

//var_dump(est_connecte());

?>

<!-- Page renvoyée lorsque l'utilisateur est connecté (voir login.php ligne 20) -->
<?php require_once 'header.php'; ?>
    <h1>Espace Admin</h1>
<?php require_once 'footer.php'; ?>