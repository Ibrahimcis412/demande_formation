<?php
session_start();

// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "automatisation");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Vérification de la connexion (login)
if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT matricule, email FROM employe WHERE email = ? AND mot_de_passe = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $mot_de_passe);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $employe = $result->fetch_assoc();
        $_SESSION['utilisateur'] = $email;
        $_SESSION['matricule'] = $employe['matricule'];
        $_SESSION['email'] = $employe['email'];
        header("Location: page2.php");
        exit();
    } else {
        header("Location: page1.php?erreur=1");
        exit();
    }
}

// Insertion d'une demande de formation
if (isset($_POST['situation']) && isset($_POST['objectifs'])) {
    $situation = $_POST['situation'];
    $objectifs = $_POST['objectifs'];
    $actions = $_POST['actions'];
    $indicateur = $_POST['indicateur'];
    $intitule = $_POST['intitule'];
    $description = $_POST['description'];
    $contenu = $_POST['contenu'];
    $responsable = $_POST['responsable']; // toujours récupéré mais non utilisé
    $date = date('Y-m-d H:i:s');
    $matricule_emp = $_SESSION['matricule'];

    // Nouvelle requête sans insertion du responsable hiérarchique
    $sql = "INSERT INTO demande_formation (date_demande, situation, objectifs, actions, indicateur, intitule, description, contenu, matricule_emp)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $date, $situation, $objectifs, $actions, $indicateur, $intitule, $description, $contenu, $matricule_emp);

    if ($stmt->execute()) {
        // $_SESSION['nom_superieur'] = $responsable; // désactivé à la demande du patron

        include 'envoi_email_validation.php';
        envoyerMailValidation();

        header("Location: page2.php?success=1");
        exit();
    } else {
        echo "Erreur lors de l'insertion : " . $conn->error;
    }
}

$conn->close();
?>
