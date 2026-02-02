<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - Catalogue</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding-top: 100px; margin-bottom: 40px;">
        <h2 style="text-align: center; margin-bottom: 40px;">NOTRE CATALOGUE COMPLET</h2>
        <div class="produits-grid">
            <?php
            $produits = [
                ["Chevalier Lumière", 89.99, "img/produit1.png", "img/produit1_hover.png"],
                ["Garde Royal", 119.99, "img/produit2.png", "img/produit2_hover.png"],
                ["Sentinelle Azur", 95.99, "img/produit3.png", "img/produit3_hover.png"],
                ["Titan Écarlate", 149.99, "img/produit4.png", "img/produit4_hover.png"],
                ["Lancier Blanc", 79.99, "img/produit5.png", "img/produit5_hover.png"],
                ["Commandant Noir", 159.99, "img/produit6.png", "img/produit6_hover.png"],
                ["Archer Vert", 99.99, "img/produit7.png", "img/produit7_hover.png"],
                ["Paladin Doré", 169.99, "img/produit8.png", "img/produit8_hover.png"],
                ["Guerrier Argent", 109.99, "img/produit9.png", "img/produit9_hover.png"],
                ["Mirage Fantôme", 129.99, "img/produit10.png", "img/produit10_hover.png"],
                ["Éclat Solaire", 134.99, "img/produit11.png", "img/produit11_hover.png"],
                ["Ombre Nocturne", 144.99, "img/produit12.png", "img/produit12_hover.png"]
            ];

            foreach ($produits as $p) {
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