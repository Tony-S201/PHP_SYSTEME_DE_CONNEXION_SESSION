<?php 
// Authentification, démarre la session si elle n'est pas active ---------------------- //

function est_connecte(): bool {
    // Fait un session_start() si la session n'est pas active
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']); 
} 

// -------------------------------------- //

// Teste si l'utilisateur est connecté ------------- //

function forcer_utilisateur_connecte(): void {
    // Si l'utilisateur n'est pas connecté, redirige vers /login.php
    // exit() empêche l'execution de la suite (en imaginant qu'il y en est une)
    if (!est_connecte()) {
        header('Location: ./login.php');
        exit();
    }
}

// ---------------------------------------------- //