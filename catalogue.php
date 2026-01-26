<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunpla France - Catalogue</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <h2>Notre Catalogue</h2>
        <div class="produits-grid">
            <div class="produit-card">
                <img src="img/produit1.png" alt="Chevalier Lumière">
                <h3>Chevalier Lumière</h3>
                <p class="prix">89,99 €</p>
                <a href="produit.php?Nom=Chevalier%20Lumière&Prix=89.99&Image=img/produit1.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit2.png" alt="Garde Royal">
                <h3>Garde Royal</h3>
                <p class="prix">119,99 €</p>
                <a href="produit.php?Nom=Garde%20Royal&Prix=119.99&Image=img/produit2.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit3.png" alt="Sentinelle Azur">
                <h3>Sentinelle Azur</h3>
                <p class="prix">95,99 €</p>
                <a href="produit.php?Nom=Sentinelle%20Azur&Prix=95.99&Image=img/produit3.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit4.png" alt="Titan Écarlate">
                <h3>Titan Écarlate</h3>
                <p class="prix">149,99 €</p>
                <a href="produit.php?Nom=Titan%20Écarlate&Prix=149.99&Image=img/produit4.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit5.png" alt="Lancier Blanc">
                <h3>Lancier Blanc</h3>
                <p class="prix">79,99 €</p>
                <a href="produit.php?Nom=Lancier%20Blanc&Prix=79.99&Image=img/produit5.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit6.png" alt="Commandant Noir">
                <h3>Commandant Noir</h3>
                <p class="prix">159,99 €</p>
                <a href="produit.php?Nom=Commandant%20Noir&Prix=159.99&Image=img/produit6.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit7.png" alt="Archer Vert">
                <h3>Archer Vert</h3>
                <p class="prix">99,99 €</p>
                <a href="produit.php?Nom=Archer%20Vert&Prix=99.99&Image=img/produit7.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit8.png" alt="Paladin Doré">
                <h3>Paladin Doré</h3>
                <p class="prix">169,99 €</p>
                <a href="produit.php?Nom=Paladin%20Doré&Prix=169.99&Image=img/produit8.png" class="btn-details">Voir détails</a>
            </div>

            <div class="produit-card">
                <img src="img/produit9.png" alt="Guerrier Argent">
                <h3>Guerrier Argent</h3>
                <p class="prix">109,99 €</p>
                <a href="produit.php?Nom=Guerrier%20Argent&Prix=109.99&Image=img/produit9.png" class="btn-details">Voir détails</a>
            </div>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>