<?php include_once('include/fonctions.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - Nouvelle Collection</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding-top: 100px; margin-bottom: 40px;">
        <h2 style="text-align: center; margin-bottom: 40px;">NOUVELLE COLLECTION</h2>
        <div class="produits-grid">
            <?php
            $nouveautes = chargerProduits('nouveaute');

            foreach ($nouveautes as $p) {
                echo "
                <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p['nom'])."'\">
                    <div class='image-container'>
                        <img src='{$p['img1']}' class='img-main' alt='{$p['nom']}'>
                        <img src='{$p['img2']}' class='img-hover' alt='{$p['nom']} Détail'>
                    </div>
                    <h3>" . htmlspecialchars($p['nom']) . "</h3>
                    <p class='prix'>".number_format($p['prix'], 2, ',', ' ')." €</p>
                </div>";
            }
            ?>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>