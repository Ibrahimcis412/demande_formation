<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=automatisation', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

$etapes = [
    'ingenieur developpeur' => 9,
    'chef de service' => 8,
    'chef de division' => 7,
    'directeur systeme information' => 6,
    'ressource humaine' => 5,
    'directeur ressource humaine' => 4,
    'controle gestion' => 3,
    'directeur administratif financiere' => 2,
    'directeur general' => 1
];

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    echo "L'email de l'utilisateur n'est pas défini dans la session.";
    exit;
}

$sql = "
    SELECT 
        df.id_demande AS id, 
        df.intitule, 
        CONCAT(emp.nom, ' ', emp.prenom) AS demandeur, 
        df.etape_validation, 
        srv.nom_service AS niveau
    FROM demande_formation df
    JOIN employe emp ON df.matricule_emp = emp.matricule
    JOIN service srv ON emp.id_service = srv.id_service
    WHERE emp.email = :email
";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérifier s’il y a des résultats
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $niveau = strtolower($row['niveau'] ?? ''); // Éviter NULL
        $etape = $etapes[$niveau] ?? 'N/A';

        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id'] ?? '') . "</td>";
        echo "<td>" . htmlspecialchars($row['intitule'] ?? '') . "</td>";
        echo "<td>" . htmlspecialchars($row['demandeur'] ?? '') . "</td>";
        echo "<td>" . $etape . "</td>";
        echo "<td>" . htmlspecialchars($row['niveau'] ?? '') . "</td>";
        echo "<td><a href='page4.php?id_demande=" . htmlspecialchars($row['id'] ?? '') . "'>Voir</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center; color: red;'>Vous n'avez pas effectué de demande de formation.</td></tr>";
}
?>
