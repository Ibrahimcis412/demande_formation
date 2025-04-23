<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <link rel="stylesheet" href="style10.css">

    <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url('image_blanc.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
</head>
<body>
    <!-- Fil d'Ariane -->
    <nav class="breadcrumb">
        <span>🏠 / Liste des Employés</span>
    </nav>

    <!-- Conteneur principal -->
    <div class="container">
        <h2>Liste des Employés</h2>

        <!-- Bouton Nouvel Employé et Filtre -->
        <div class="header-bar">
            <button class="btn btn-new-employee" onclick="window.location.href='#'">✔ new employee</button>
            <label for="filter">Filtre :</label>
            <input type="text" id="filter" placeholder="faire un filtre...">
        </div>

        <!-- Tableau des employés -->
        <table>
            <thead>
                <tr>
                    <th>Nom ⬍</th>
                    <th>Prénom ⬍</th>
                    <th>Fonction ⬍</th>
                    <th>Mail ⬍</th>
                    <th>Direction ⬍</th>
                    <th>Actions</th>
                </tr>
                <!-- Champs de recherche par colonne -->
                <tr>
                    <td><input type="text" placeholder="Rechercher..."></td>
                    <td><input type="text" placeholder="Rechercher..."></td>
                    <td><input type="text" placeholder="Rechercher..."></td>
                    <td><input type="text" placeholder="Rechercher..."></td>
                    <td><input type="text" placeholder="Rechercher..."></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>pedjou</td>
                    <td>mimi</td>
                    <td>INGENIEUR</td>
                    <td>mimi@sdqzs</td>
                    <td>Direction Général</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>test user</td>
                    <td>QDOQ</td>
                    <td>directrice</td>
                    <td>QF</td>
                    <td>Direction Marketing</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>OUATTARA</td>
                    <td>STEPHANE</td>
                    <td>DIRECTEUR</td>
                    <td>OUATTARA@STEPHANE2555</td>
                    <td>Direction Ressources Humaines</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>YEO</td>
                    <td>EMANUALLE</td>
                    <td>INGENIEUR</td>
                    <td>domnkan@523654</td>
                    <td>Direction Système d'information</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>kouame</td>
                    <td>alice</td>
                    <td>Stagiaire</td>
                    <td>herminesilue@.com</td>
                    <td>Direction Système d'information</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>ariane</td>
                    <td>desiree</td>
                    <td>Stagiaire</td>
                    <td>vrftrghh@gmail.com</td>
                    <td>Direction Système d'information</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="page2.php" class="btn-retour">← Retour à l'accueil</a>


    <!-- Pied de page -->
    <!-- <footer>
        <p>© Tous droits réservés</p>
    </footer> -->
</body>
</html>