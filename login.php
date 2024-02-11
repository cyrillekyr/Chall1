<?php
session_start();

// Récupérer les données du formulaire
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérifier les conditions d'authentification
if(strlen($username) !== 9 || strpos($username, '_') === false) {
    header('Location: noukotwelomangnon.php');
    exit();
} elseif(strlen($password) != 12 || !preg_match('/^(?=.*[A-Z].*[A-Z])(?=.*[0-9].*[0-9])(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{12,}$/', $password)) {
    header('Location: passwordoulomangnon.php');
    exit();
} else {
    // Les conditions d'authentification sont remplies
    // Ici, vous pouvez effectuer une vérification supplémentaire pour les informations d'identification, par exemple en les vérifiant dans une base de données
    // Si les informations d'identification sont valides, authentifiez l'utilisateur et démarrez la session
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
    exit();
}
?>
