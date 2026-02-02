<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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
            $nouveautes = [
                ["Titan Écarlate", 149.99, "img/produit1.png", "img/produit1_hover.png"],
                ["Paladin Doré", 169.99, "img/produit1.png", "img/produit1_hover.png"],
                ["Ombre Nocturne", 144.99, "img/produit1.png", "img/produit1_hover.png"],
                ["Nébuleuse Pourpre", 155.00, "img/produit1.png", "img/produit1_hover.png"],
                ["Chasseur de Givre", 115.00, "img/produit1.png", "img/produit1_hover.png"],
                ["Spectre de Fer", 139.99, "img/produit1.png", "img/produit1_hover.png"]
            ];

            foreach ($nouveautes as $p) {
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
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>