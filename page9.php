<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Directions</title>
    <link rel="stylesheet" href="style9.css">

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
        <span>🏠 / Liste des Directions</span>
    </nav>

    <!-- Conteneur principal -->
    <div class="container">
        <h2>Liste des Directions</h2>

        <!-- Bouton Nouvelle Direction -->
        <button class="btn btn-nouvelle-direction" onclick="window.location.href='page10.html'">✔ Nouvelle direction</button>

        <!-- Tableau des directions -->
        <table>
            <thead>
                <tr>
                    <th>Numéro ⬍</th>
                    <th>Intitulé ⬍</th>
                    <th>Actions</th>
                </tr>
                <!-- Champ de recherche -->
                <tr>
                    <td></td>
                    <td><input type="text" placeholder="Rechercher une direction..."></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4</td>
                    <td>Direction Réseaux</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Direction Système d'information</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Direction Marketing</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Direction Contrôle de Gestion</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Direction Technique</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Direction Communication</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Direction Ressources Humaines</td>
                    <td><button class="edit-btn">✏️</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Direction Générale</td>
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