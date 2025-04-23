<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Formation</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="login-container">
        <h2>Demande de Formation</h2>
        <form action="session1.php" method="POST">
            <div class="input-group">
                <label for="situation">Situation :</label>
                <textarea id="situation" name="situation" required></textarea>
            </div>
            <div class="input-group">
                <label for="objectifs">Objectifs :</label>
                <textarea id="objectifs" name="objectifs" required></textarea>
            </div>
            <div class="input-group">
                <label for="actions">Actions :</label>
                <textarea id="actions" name="actions" required></textarea>
            </div>
            <div class="input-group">
                <label for="indicateur">Indicateur :</label>
                <textarea id="indicateur" name="indicateur" required></textarea>
            </div>
            <div class="input-group">
                <label for="intitule">Intitulé :</label>
                <input type="text" id="intitule" name="intitule" required>
            </div>
            <div class="input-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="input-group">
                <label for="contenu">Contenu :</label>
                <textarea id="contenu" name="contenu" required></textarea>
            </div>
            <div class="input-group">
                <label for="responsable">Responsable Hiérachique Direct :</label>
                <input type="text" id="responsable" name="responsable" required>
            </div>
            <button type="submit" class="btn">Soumettre</button>
        </form>
    </div>
</body>
</html>
