<?php

// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=gestion_stock'; // Modifier avec vos informations
$username = 'root'; // Modifier avec votre nom d'utilisateur
$password = ''; // Modifier avec votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('La connexion à la base de données a échoué: '.$e->getMessage());
}

// Récupération des données du formulaire
$email = $_POST['login'];
$password = $_POST['password'];

// Requête SQL pour vérifier l'email et le mot de passe
$sql = 'SELECT * FROM utilisateur WHERE email = :email AND mot_pass = :password';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // L'utilisateur existe dans la base de données et le mot de passe est correct
    // Démarrez la session et redirigez l'utilisateur vers la page d'accueil par exemple
    session_start();
    $_SESSION['email'] = $email; // Vous pouvez stocker d'autres informations de session si nécessaire
    header('Location: ../VIEW/home.php');
    exit;
} else {
    // L'utilisateur n'existe pas dans la base de données ou le mot de passe est incorrect
    // Redirigez l'utilisateur vers la page de connexion avec un message d'erreur par exemple
    header('Location: ../FORMULAIRE/connexion.php');
    echo 'Erreur : Email ou mot de passe incorrect.';
    exit;
}
