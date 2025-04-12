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

// Récupérer les informations de l'employé connecté
$matricule = $_SESSION['matricule'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$poste = $_SESSION['poste'];

// Récupérer les demandes de formation de l'employé
$query = "SELECT intitule FROM demande_formation WHERE matricule = :matricule";
$stmt = $pdo->prepare($query);
$stmt->execute(['matricule' => $matricule]);
$demandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de l'Employé</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <div class="header">
        <h1>Vos Informations</h1>
    </div>

    <div class="form-container">
        <form action="traitement.php" method="POST">
            <div class="input-group">
                <label for="matricule">Matricule :</label>
                <input type="text" id="matricule" name="matricule" value="<?php echo htmlspecialchars($matricule); ?>" readonly>
            </div>
            <div class="input-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>" readonly>
            </div>
            <div class="input-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>" readonly>
            </div>
            <div class="input-group">
                <label for="poste">Poste :</label>
                <input type="text" id="poste" name="poste" value="<?php echo htmlspecialchars($poste); ?>" readonly>
            </div>
            <div class="input-group">
                <label for="demandes">Intitulés des Demandes :</label>
                <ul>
                    <?php foreach ($demandes as $demande): ?>
                        <li><?php echo htmlspecialchars($demande['intitule']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </form>
    </div>
</body>
</html>