<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - Accueil</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="banner-home"></div>

        <section id="nouvelle-collection" style="padding: 4rem 2rem;">
            <h2 style="text-align: center; margin-bottom: 2rem;">NOUVELLE COLLECTION</h2>
            <div class="produits-grid">
                <div class="produit-card" onclick="location.href='produit.php?Nom=Titan%20Écarlate&Prix=149.99&Image=img/produit4.png'">
                    <img src="img/produit4.png">
                    <h3>Titan Écarlate</h3>
                    <p class="prix">149,99 €</p>
                </div>
                <div class="produit-card" onclick="location.href='produit.php?Nom=Ombre%20Nocturne&Prix=144.99&Image=img/produit12.png'">
                    <img src="img/produit12.png">
                    <h3>Ombre Nocturne</h3>
                    <p class="prix">144,99 €</p>
                </div>
                <div class="produit-card" onclick="location.href='produit.php?Nom=Paladin%20Doré&Prix=169.99&Image=img/produit8.png'">
                    <img src="img/produit8.png">
                    <h3>Paladin Doré</h3>
                    <p class="prix">169,99 €</p>
                </div>
            </div>
            <a href="nouvelle-collection.php" class="btn-voir-plus">VOIR PLUS</a>
        </section>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>