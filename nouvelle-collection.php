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
    
    <main style="padding-top: 100px;">
        <h2 style="text-align: center; margin-bottom: 40px;">TOUTES NOS NOUVEAUTÉS</h2>
        
        <div class="produits-grid">
            <?php
            $nouveautes = [
                ["Titan Écarlate", 149.99, "img/produit4.png"],
                ["Paladin Doré", 169.99, "img/produit8.png"],
                ["Ombre Nocturne", 144.99, "img/produit12.png"],
                ["Nébuleuse Pourpre", 155.00, "img/produit13.png"],
                ["Chasseur de Givre", 115.00, "img/produit14.png"],
                ["Spectre de Fer", 139.99, "img/produit15.png"],
                ["Mirage Fantôme", 129.99, "img/produit10.png"],
                ["Éclat Solaire", 134.99, "img/produit11.png"]
            ];

            foreach ($nouveautes as $p) {
                echo '
                <div class="produit-card" onclick="location.href=\'produit.php?Nom='.urlencode($p[0]).'&Prix='.$p[1].'&Image='.$p[2].'\'">
                    <img src="'.$p[2].'" alt="'.$p[0].'">
                    <div class="size-overlay">
                        <strong>Tailles : 1/144, 1/100, 1/60</strong>
                        <p>Cliquez pour configurer</p>
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