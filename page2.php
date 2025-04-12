<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navigation - Demande de Formation</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body class="formulaire">

    <!-- Diaporama -->
    <div class="slideshow">
        <img src="image3.jpg" alt="Image 3" class="active">
        <img src="image4.jpg" alt="Image 4">
        <img src="image5.jpg" alt="Image 5">
    </div>

    <!-- Menu de Navigation -->
    <nav class="navbar">
        <ul class="menu">
            <li><a href="page4.php">LISTES ▼</a></li>
            <li><a href="page3.php">DEMANDE DE FORMATION ▼</a></li>
            <li><a href="type_eveluation.html">LES ÉVALUATIONS ▼</a></li>
            <li><a href="page7.html">MES FORMATIONS ▼</a></li>
            <li><a href="page11.php">VALIDER UNE FORMATION ▼</a></li>
            <li><a href="page12.php">PROFIL PERSONNELLE ▼</a></li>
            <a href="page1.php" class="btn">DECONNEXION ▼</a>
        </ul>
    </nav>

    <script>
        // JavaScript pour le diaporama
        const images = document.querySelectorAll('.slideshow img');
        let currentIndex = 0;

        function changeImage() {
            // Supprime la classe "active" de l'image actuelle
            images[currentIndex].classList.remove('active');

            // Passe à l'image suivante
            currentIndex = (currentIndex + 1) % images.length;

            // Ajoute la classe "active" à la nouvelle image
            images[currentIndex].classList.add('active');
        }

        // Change l'image toutes les 5 secondes
        setInterval(changeImage, 5000);
    </script>
</body>
</html>