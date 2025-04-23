<?php
session_start();
$conn = new mysqli("localhost", "root", "", "automatisation");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$matricule = $_SESSION['matricule'] ?? null;

if ($matricule) {
    // Requête pour récupérer les infos de l'employé
    $sql_employe = "SELECT nom, prenom FROM employe WHERE matricule = ?";
    $stmt_employe = $conn->prepare($sql_employe);
    $stmt_employe->bind_param("s", $matricule);
    $stmt_employe->execute();
    $result_employe = $stmt_employe->get_result();
    $employe = $result_employe->fetch_assoc();

    // Requête pour récupérer la dernière demande de formation
    $sql_demande = "SELECT intitule, date_demande FROM demande_formation WHERE matricule_emp = ? ORDER BY date_demande DESC LIMIT 1";
    $stmt_demande = $conn->prepare($sql_demande);
    $stmt_demande->bind_param("s", $matricule);
    $stmt_demande->execute();
    $result_demande = $stmt_demande->get_result();
    $demande = $result_demande->fetch_assoc();
} else {
    echo "Erreur : utilisateur non connecté.";
}
?>
