<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étapes</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>
    <!-- Barre du haut contenant le bouton retour -->
    <div class="top-bar">
        <a href="page2.php" class="btn-retour">← Retour à l'accueil</a>
    </div>

    <!-- Fil d'Ariane -->
    <nav class="breadcrumb">
        <span>🏠 / Liste des Étapes</span>
    </nav>

    <!-- Conteneur principal -->
    <div class="container">
        <h2>Liste des Étapes</h2>

        <!-- Bouton Nouvelle Étape -->
        <button class="btn btn-nouvelle-etape" onclick="window.location.href='page9.php'">✔ Nouvelle étape</button>

        <!-- Tableau des étapes -->
        <table>
            <thead>
                <tr>
                    <th>Numéro d'Ordre ⬍</th>
                    <th>Direction ⬍</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><a href="#">1</a></td><td>Directeur Général (DG)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">2</a></td><td>Direction Administrative et Financière (DAF)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">3</a></td><td>Direction Financière (DF)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">4</a></td><td>Contrôle de Gestion</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">5</a></td><td>Direction Ressources Humaines (DRH)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">6</a></td><td>Ressources Humaines (RH)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">7</a></td><td>Direction Système d'Information (DSI)</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">8</a></td><td>Chef de Division</td><td><button class="edit-btn">✏️</button></td></tr>
                <tr><td><a href="#">9</a></td><td>Chef de Service</td><td><button class="edit-btn">✏️</button></td></tr>
            </tbody>
        </table>
    </div>
</body>
</html>
