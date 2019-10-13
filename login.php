<?php 

$erreur = null;

// Vérifie les données du formulaire (présence et concordance)
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if($_POST['pseudo'] === 'Tony' && $_POST['motdepasse'] === 'abc123') {
        // On connecte l'utilisateur
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: dashboard.php');
    } else {
        // On affiche une erreur
        $erreur = 'Mauvais identifiants';
    }
}

require 'auth.php';
if(est_connecte()) {
    header('Location: dashboard.php');
    exit(); 
}

require 'header.php';
?>

<!-- Affichage de l'erreur si mauvais identifiants -->
<?php if($erreur): ?>
    <div class="error">
        <?= $erreur ?>
    </div>
<?php endif ?>

<!-- Formulaire de connexion -->
<form action="" method="POST">
    <div class="form-group">
        <input type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input type="password" name="motdepasse" placeholder="Mot de passe">
    </div>
    <button type="submit">Se connecter</button>
</form>
<!-- Fin Formulaire de connexion -->

<?php
require 'footer.php';
?>