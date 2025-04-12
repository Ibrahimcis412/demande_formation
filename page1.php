<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style1.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url('image_bleu.jpeg');
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
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="session1.php" method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder=" Entrer votre Email " required>
            </div>
            <!-- <div class="input-group">
                <input type="text" name="matricule" placeholder=" Entrer votre matricule " required>
            </div> -->
            <div class="input-group">
                <input type="password" name="mot_de_passe" placeholder=" Entrer votre Mot de passe" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
</body>
</html>
