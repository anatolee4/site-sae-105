<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - Accueil</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <style>
        .banner-home {
            width: 100%;
            height: 65vh; /* Laisse apparaître le bas de la page */
            background: url('img/banner.jpg') no-repeat center center/cover;
        }
    </style>
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="banner-home"></div>

        <section id="nouvelle-collection" style="padding: 4rem 2rem;">
            <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem;">NOUVELLE COLLECTION</h2>
            <div class="produits-grid">
                <?php
                $top4 = [
                    ["Titan Écarlate", 149.99, "img/produit4.png", "img/produit4_hover.png"],
                    ["Paladin Doré", 169.99, "img/produit8.png", "img/produit8_hover.png"],
                    ["Ombre Nocturne", 144.99, "img/produit12.png", "img/produit12_hover.png"],
                    ["Nébuleuse Pourpre", 155.00, "img/produit13.png", "img/produit13_hover.png"]
                ];

                foreach ($top4 as $p) {
                    echo "
                    <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p[0])."&Prix=$p[1]&Image=$p[2]'\">
                        <div class='image-container'>
                            <img src='{$p[2]}' class='img-main' alt='{$p[0]}'>
                            <img src='{$p[3]}' class='img-hover' alt='{$p[0]} Détail'>
                        </div>
                        <h3>{$p[0]}</h3>
                        <p class='prix'>".number_format($p[1], 2, ',', ' ')." €</p>
                    </div>";
                }
                ?>
            </div>
            <a href="nouvelle-collection.php" class="btn-voir-plus">VOIR TOUTE LA COLLECTION</a>
        </section>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>