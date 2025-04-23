<?php
session_start();

$erreur = "";
if (isset($_SESSION['erreur_connexion'])) {
    $erreur = $_SESSION['erreur_connexion'];
    unset($_SESSION['erreur_connexion']);
}
?>

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
        }

        .error-banner {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-bottom: 2px solid #f5c6cb;
            font-family: Arial, sans-serif;
        }

        .login-container {
    background-color: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    width: 350px; /* ← on va changer ça */
}

        .input-group {
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }

        form {
            width: 100%;
            max-width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: white;
        }
    </style>
</script>

</head>
<body>

<?php if (isset($_GET['erreur'])) : ?>
    <div class="error-message" style="position: absolute; top: 20px;">
        Veuillez entrer un email ou un mot de passe correct.
    </div>
<?php endif; ?>


    <div class="login-container">
        <h2>Connexion</h2>
        <form action="session1.php" method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder=" Entrer votre Email " required value="">
            </div>

            <div class="input-group">
                <input type="password" name="mot_de_passe" placeholder=" Entrer votre Mot de passe" required value="">
            </div>

            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>

    <script>
        window.addEventListener("DOMContentLoaded", function () {
            const params = new URLSearchParams(window.location.search);
            if (params.has('erreur')) {
                const emailInput = document.querySelector('input[name="email"]');
                const passwordInput = document.querySelector('input[name="mot_de_passe"]');

                if (emailInput) emailInput.value = "";
                if (passwordInput) passwordInput.value = "";
            }
        });
         // Cacher automatiquement le message d'erreur après 5 secondes
    setTimeout(() => {
        const errorBox = document.querySelector('.error-message');
        if (errorBox) {
            errorBox.style.transition = "opacity 1s ease";
            errorBox.style.opacity = "0";
            setTimeout(() => errorBox.remove(), 1000); // Supprime le message après l'animation
        }
    }, 5000); // 5000ms = 5 secondes
    </script>
</body>
</html>
