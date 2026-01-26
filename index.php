<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - Accueil</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="banner">
            <img src="img/banner.jpg" alt="Bienvenue chez MechaLab" style="width: 100%; height: auto; display: block;">
        </div>

        <section id="nouvelle-collection" style="padding: 2rem;">
            <h2 style="text-align: center; margin-bottom: 2rem; font-size: 2.5rem; color: #2c3e50;">Nouvelle Collection</h2>
            
            <div class="produits-grid">
                <div class="produit-card" onclick="window.location.href='produit.php?Nom=Titan%20Écarlate&Prix=149.99&Image=img/produit4.png'">
                    <img src="img/produit4.png" alt="Titan Écarlate">
                    <h3>Titan Écarlate</h3>
                    <p class="prix">149,99 €</p>
                </div>
                </div>
        </section>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>