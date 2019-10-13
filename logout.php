<?php 
// Déconnecte la session et redirige vers la page d'accueil
session_start();
unset($_SESSION['connecte']);
header('Location: index.php');