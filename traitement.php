<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['matricule'])) {
    header("Location: index.php");
    exit();
}

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

// Vérifier que toutes les données du formulaire sont présentes
if (isset($_POST['situation'], $_POST['objectifs'], $_POST['actions'], $_POST['indicateur'], $_POST['intitule'], $_POST['description'], $_POST['contenu'], $_POST['responsable'])) {
    // Récupérer les données du formulaire
    $situation = $_POST['situation'];
    $objectifs = $_POST['objectifs'];
    $actions = $_POST['actions'];
    $indicateur = $_POST['indicateur'];
    $intitule = $_POST['intitule'];
    $description = $_POST['description'];
    $contenu = $_POST['contenu'];
    $responsable = $_POST['responsable'];
    $matricule = $_SESSION['matricule'];

    // Insérer la demande de formation dans la base de données
    $query = "INSERT INTO demande_formation (matricule, situation, objectifs, actions, indicateur, intitule, description, contenu, responsable) 
              VALUES (:matricule, :situation, :objectifs, :actions, :indicateur, :intitule, :description, :contenu, :responsable)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'matricule' => $matricule,
        'situation' => $situation,
        'objectifs' => $objectifs,
        'actions' => $actions,
        'indicateur' => $indicateur,
        'intitule' => $intitule,
        'description' => $description,
        'contenu' => $contenu,
        'responsable' => $responsable
    ]);

    // Rediriger vers la page de confirmation ou une autre page
    header("Location: page2.php");
    exit();
} else {
    // Rediriger vers la page de demande de formation avec un message d'erreur
    header("Location: page3.php?error=missing_data");
    exit();
}
?>