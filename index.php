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
    <?php include('include/fonctions.php'); ?>
    <main>
        <div class="banner-home" style="width: 100%; height: 60vh; background: url('img/banner.jpg') no-repeat center center/cover;"></div>
        <section style="padding: 4rem 2rem;">
            <h2 style="text-align: center; margin-bottom: 3rem; color: #1a1a1a; letter-spacing: 2px;">NOUVELLE COLLECTION</h2>
            <div class="produits-grid">
                <?php
                $produits = chargerProduits('nouveaute');
                foreach ($produits as $p) {
                    echo "
                    <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p['nom'])."&Prix={$p['prix']}&Image={$p['image']}'\">
                        <div class='image-container'>
                            <img src='{$p['image']}' class='img-main'>
                            <img src='{$p['hover']}' class='img-hover'>
                        </div>
                        <h3>{$p['nom']}</h3>
                        <p class='prix'>".number_format($p['prix'], 2, ',', ' ')." €</p>
                    </div>";
                }
                ?>
            </div>
            <a href="catalogue.php" class="btn-voir-plus">VOIR TOUT LE CATALOGUE</a>
        </section>
    </main>
    <?php include('include/pied-de-page.php'); ?>
</body>
</html>