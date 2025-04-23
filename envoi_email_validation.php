<?php
function envoyerMailValidation() {
    // Activer l'affichage des erreurs pour le développement (à désactiver en prod)
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "automatisation");
    if ($conn->connect_error) {
        echo "❌ Erreur de connexion à la base de données.";
        return;
    }

    session_start();

    if (isset($_SESSION['nom_superieur'])) {
        $nom_superieur = $_SESSION['nom_superieur'];

        $sql = "SELECT email FROM employe WHERE nom = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nom_superieur);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $superieur = $result->fetch_assoc();
            $email_superieur = $superieur['email'];

            // Préparation du mail
            $subject = "Demande de formation à valider";
            $message = "Bonjour $nom_superieur,\n\nUn employé a fait une demande de formation qui nécessite votre validation.\n\nVeuillez vous connecter à l'application pour approuver ou refuser la demande.\n\nCordialement,\nL'équipe de formation";
            $headers = "From: no-reply@moovafrica.com";

            // Envoi du mail (test en local avec maildev ou autre)
            if (mail($email_superieur, $subject, $message, $headers)) {
                echo "✅ Mail envoyé avec succès à $email_superieur";
            } else {
                echo "❌ Échec de l'envoi du mail à $email_superieur";
            }
        } else {
            echo "❌ Aucun supérieur trouvé avec ce nom.";
        }
    } else {
        echo "❌ Nom du supérieur manquant dans la session.";
    }

    $conn->close();
}
?>
