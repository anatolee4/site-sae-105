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
    <?php include('include/fonctions.php'); ?>
    
    <main style="padding-top: 100px; margin-bottom: 40px;">
        <h2 style="text-align: center; margin-bottom: 40px;">NOUVELLE COLLECTION</h2>
        <div class="produits-grid">
            <?php
            // Chargement uniquement des produits marqués 'nouveaute'
            $nouveautes = chargerProduits('nouveaute');

            foreach ($nouveautes as $p) {
                echo "
                <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p['nom'])."&Prix={$p['prix']}&Image={$p['image']}'\">
                    <div class='image-container'>
                        <img src='{$p['image']}' class='img-main' alt='{$p['nom']}'>
                        <img src='{$p['hover']}' class='img-hover' alt='{$p['nom']} Détail'>
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