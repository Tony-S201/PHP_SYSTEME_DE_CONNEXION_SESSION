<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Système de connexion</title>
</head>
<body>
    
<div class="headerSection">Bienvenue</div>
<div>
    <?php if(!est_connecte()): ?>
        <a href="login.php">Connexion</a>
    <?php endif ?>
</div>
<div class="disconnect">
    <!-- Teste si l'utilisateur est connecté, pour afficher le lien de déconnection -->
    <?php if (est_connecte()): ?>
        <a href="logout.php">Se déconnecter</a>
    <?php endif ?>
</div>