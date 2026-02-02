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
        <div class="banner-home" style="width: 100%; height: 60vh; background: url('img/banner.jpg') no-repeat center center/cover; "></div>

        <section style="padding: 4rem 2rem;">
            <h2 style="text-align: center; margin-bottom: 3rem; color: #1a1a1a; letter-spacing: 2px;">
                <span>NOUVELLE COLLECTION</span>
            </h2>
            
            <div class="produits-grid">
                <?php
                $top4 = [
                    ["Titan Écarlate", 149.99, "img/produit1.png", "img/produit1_hover.png"],
                    ["Paladin Doré", 169.99, "img/produit1.png", "img/produit1_hover.png"],
                    ["Ombre Nocturne", 144.99, "img/produit1.png", "img/produit1_hover.png"],
                    ["Nébuleuse Pourpre", 155.00, "img/produit1.png", "img/produit1_hover.png"]
                ];

                foreach ($top4 as $p) {
                    echo "
                    <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p[0])."&Prix=$p[1]&Image=$p[2]'\">
                        <div class='image-container'>
                            <img src='{$p[2]}' class='img-main'>
                            <img src='{$p[3]}' class='img-hover'>
                        </div>
                        <h3 style='color:#1a1a1a;'>{$p[0]}</h3>
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