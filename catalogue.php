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
    
    <main style="padding-top: 100px;">
        <h2 style="text-align: center; margin-bottom: 30px;">NOTRE CATALOGUE</h2>
        <div class="produits-grid">
            <?php
            $produits = [
                ["Chevalier Lumière", 89.99, "img/produit1.png"],
                ["Garde Royal", 119.99, "img/produit2.png"],
                ["Sentinelle Azur", 95.99, "img/produit3.png"],
                ["Titan Écarlate", 149.99, "img/produit4.png"],
                ["Lancier Blanc", 79.99, "img/produit5.png"],
                ["Commandant Noir", 159.99, "img/produit6.png"],
                ["Archer Vert", 99.99, "img/produit7.png"],
                ["Paladin Doré", 169.99, "img/produit8.png"],
                ["Guerrier Argent", 109.99, "img/produit9.png"],
                ["Mirage Fantôme", 129.99, "img/produit10.png"],
                ["Éclat Solaire", 134.99, "img/produit11.png"],
                ["Ombre Nocturne", 144.99, "img/produit12.png"]
            ];

            foreach ($produits as $p) {
                echo '
                <div class="produit-card" onclick="location.href=\'produit.php?Nom='.urlencode($p[0]).'&Prix='.$p[1].'&Image='.$p[2].'\'">
                    <img src="'.$p[2].'" alt="'.$p[0].'">
                    <div class="size-overlay">
                        <strong>Tailles disponibles :</strong>
                        <p>1/144 Standard</p>
                        <p>1/100 Master Grade</p>
                        <p>1/60 Perfect Grade</p>
                    </div>
                    <h3>'.$p[0].'</h3>
                    <p class="prix">'.number_format($p[1], 2, ',', ' ').' €</p>
                </div>';
            }
            ?>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>