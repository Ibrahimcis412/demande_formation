<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <ul class="menu">
        <li><a href="page4.php">LISTES ▼</a></li>
        <li><a href="page3.php">DEMANDE DE FORMATION ▼</a></li>
        <li><a href="type_evaluation.php">LES ÉVALUATIONS ▼</a></li>
        <li class="dropdown">
            <a href="#" id="toggle-formation">MES FORMATIONS ▼</a>
            <ul class="dropdown-menu" id="formation-menu">
                <li><a href="#" id="etape" class="menu-item">Liste des Étapes</a></li>
                <li><a href="#" id="direction" class="menu-item">Liste des Directions</a></li>
                <li><a href="#" id="employe" class="menu-item">Liste des Employés</a></li>
            </ul>
        </li>
        <li><a href="validation_demande.html">VALIDER UNE FORMATION ▼</a></li>
        <li><a href="page12.php">PROFIL PERSONNEL ▼</a></li>
        <a href="page1.php" class="btn">DÉCONNEXION ▼</a>
    </ul>
</nav>

<!-- Zone d'affichage des formulaires -->
<div id="form-container"></div>

<script>
    const toggleBtn = document.getElementById('toggle-formation');
    const menu = document.getElementById('formation-menu');
    const formContainer = document.getElementById('form-container');
    const navbar = document.getElementById('navbar');
    const menuItems = document.querySelectorAll('.menu-item');

    toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        menu.classList.toggle('show');
    });

    menuItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const selectedItem = e.target.id;
            loadForm(selectedItem);
        });
    });

    function loadForm(item) {
        let formUrl = '';

        switch(item) {
            case 'etape':
                formUrl = 'page8.php';
                break;
            case 'direction':
                formUrl = 'page9.php';
                break;
            case 'employe':
                formUrl = 'page10.php';
                break;
        }

        if (formUrl) {
            fetch(formUrl)
                .then(response => response.text())
                .then(html => {
                    // Masquer la navbar quand on affiche le formulaire
                    navbar.style.display = 'none';
                    // Afficher le contenu du formulaire
                    formContainer.innerHTML = html;
                })
                .catch(() => {
                    formContainer.innerHTML = '<p>Erreur de chargement du formulaire.</p>';
                });
        }
    }
</script>

</body>
</html>
