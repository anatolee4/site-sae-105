<?php include_once('include/fonctions.php'); ?>
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
        <div class="video-hero" style="width: 100%; height: 60vh; position: relative; overflow: hidden; background: #000;">
            <video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                <source src="videos/presentation.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); pointer-events: none;"></div>
        </div>

        <section style="padding: 4rem 2rem;">
            <h2 style="text-align: center; margin-bottom: 3rem; color: #1a1a1a; letter-spacing: 2px; ">NOUVELLE COLLECTION</h2>
            <div class="produits-grid">
                <?php
                $nouveautes = chargerProduits('nouveaute');
                foreach (array_slice($nouveautes, 0, 4) as $p) {
                    echo "
                    <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p['nom'])."'\">
                        <div class='image-container'>
                            <img src='{$p['img1']}' class='img-main'>
                            <img src='{$p['img2']}' class='img-hover'>
                        </div>
                        <h3>" . htmlspecialchars($p['nom']) . "</h3>
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