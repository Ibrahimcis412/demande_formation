<?php
// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=automatisation', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

// Requête SQL pour récupérer toutes les demandes de formation
$query = "
    SELECT 
        df.identifiant AS Id,  // Utiliser "identifiant" au lieu de "id"
        df.intitule_demande AS Intitule, 
        s.nom_salarie AS Demandeur, 
        p.id_poste AS Etape, 
        p.nom_poste AS Niveau
    FROM 
        demande_formation df
    JOIN 
        salarier s ON df.id_salarie = s.id_salarie
    JOIN 
        poste p ON s.id_poste = p.id_poste
";

// Exécution de la requête
$stmt = $pdo->query($query);

// Affichage des résultats sous forme de tableau HTML
echo "<h1>Liste des Demandes de Formation</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Intitulé</th>
            <th>Demandeur</th>
            <th>Etape</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>";

// Parcours des résultats
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['Id'] . "</td>";
    echo "<td>" . $row['Intitule'] . "</td>";
    echo "<td>" . $row['Demandeur'] . "</td>";
    echo "<td>" . $row['Etape'] . "</td>";
    echo "<td>" . $row['Niveau'] . "</td>";
    echo "<td><a href='page4.php?id_demande=" . $row['Id'] . "'>Voir</a></td>";
    echo "</tr>";
}

echo "</table>";
?>
