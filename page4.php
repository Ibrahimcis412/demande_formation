<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Demandes</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <!-- <div class="breadcrumb">
        <span>🏠 / Liste des Demandes</span>
    </div> -->

    <div class="container">
        <h2>Liste des Demandes</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Intitulé</th>
                    <th>Demandeur</th>
                    <th>Etape</th>
                    <th>Niveau</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inclure le script PHP pour récupérer les données
                include 'recuperer_donne.php';
                ?>
            </tbody>
        </table>
    </div>
<!-- 
    <footer>
        <p>© Tous droits réservés</p>
    </footer> -->
</body>
</html>