<?php 
session_start();

require 'auth.php';
//Fonction de /auth.php qui redirige l'utilisateur vers login.php si il n'est pas connecté
forcer_utilisateur_connecte();

var_dump(est_connecte());

?>

<?php require 'header.php'; ?>
    <h1>Espace Admin</h1>
<?php require 'footer.php'; ?>