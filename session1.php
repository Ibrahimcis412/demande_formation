<?php
session_start();

// Configuration de la base de données
$host = "localhost";
$dbname = "automatisation";
$username = "root"; // Modifier si nécessaire
$password = ""; // Modifier si nécessaire

try {
    // Connexion à la base de données via PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    // Récupérer les informations de connexion
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier les informations de connexion
    $query = "SELECT matricule, nom, prenom, nom_poste 
              FROM salarier 
              WHERE email = :email AND mot_de_passe = :mot_de_passe";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['email' => $email, 'mot_de_passe' => $mot_de_passe]);
    $employe = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($employe) {
        // Enregistrer les informations de l'employé dans la session
        $_SESSION['matricule'] = $employe['matricule'];
        $_SESSION['nom'] = $employe['nom'];
        $_SESSION['prenom'] = $employe['prenom'];
        $_SESSION['poste'] = $employe['nom_poste'];
        
        // Rediriger vers la page de navigation
        header("Location: page2.php");
        exit();
    } else {
        // Rediriger vers la page de connexion avec un message d'erreur
        header("Location: index.php?error=1");
        exit();
    }
} else {
    // Si on accède directement à ce script sans soumission, rediriger vers le formulaire de connexion
    header("Location: index.php");
    exit();
}
?>
