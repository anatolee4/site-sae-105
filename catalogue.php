<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - Catalogue</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding: 2rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Notre Catalogue</h2>
        <div class="produits-grid">
            <div class="produit-card" onclick="window.location.href='produit.php?Nom=Chevalier%20Lumière&Prix=89.99&Image=img/produit1.png'">
                <img src="img/produit1.png" alt="Chevalier Lumière">
                <h3>Chevalier Lumière</h3>
                <p class="prix">89,99 €</p>
            </div>

            <div class="produit-card" onclick="window.location.href='produit.php?Nom=Garde%20Royal&Prix=119.99&Image=img/produit2.png'">
                <img src="img/produit2.png" alt="Garde Royal">
                <h3>Garde Royal</h3>
                <p class="prix">119,99 €</p>
            </div>

            <div class="produit-card" onclick="window.location.href='produit.php?Nom=Sentinelle%20Azur&Prix=95.99&Image=img/produit3.png'">
                <img src="img/produit3.png" alt="Sentinelle Azur">
                <h3>Sentinelle Azur</h3>
                <p class="prix">95,99 €</p>
            </div>
            
            </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>