<?php
// Récupération dynamique des données du produit (Généricité)
$nom = $_REQUEST['Nom'] ?? 'Modèle Mecha'; //
$prixBase = floatval($_REQUEST['Prix'] ?? 0); //
$image = $_REQUEST['Image'] ?? 'img/produit1.png'; //
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - <?php echo htmlspecialchars($nom); ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <link rel="stylesheet" href="css/produit.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>

    <main>
        <div class="product-main">
            <div class="gallery-vertical">
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Vue 1" onclick="updateLargeImage(this.src)">
                <img src="img/details1.png" alt="Vue 2" onclick="updateLargeImage(this.src)">
                <img src="img/details2.png" alt="Vue 3" onclick="updateLargeImage(this.src)">
                <img src="img/details3.png" alt="Vue 4" onclick="updateLargeImage(this.src)">
            </div>

            <div class="image-display">
                <img id="main-view" src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($nom); ?>">
            </div>

            <div class="product-info">
                <h1><?php echo htmlspecialchars($nom); ?></h1>
                <p class="stock">● En stock (Expédition immédiate)</p>
                <div class="price-big" id="current-price"><?php echo number_format($prixBase, 2, ',', ' '); ?> €</div>

                <form action="panier.php" method="POST">
                    <input type="hidden" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($image); ?>">
                    <input type="hidden" name="prix" id="hidden-price" value="<?php echo $prixBase; ?>">

                    <label class="label-select">Choisir l'échelle :</label>
                    <select class="form-select" name="taille" id="size-selector" onchange="calculatePrice()">
                        <option value="1/144" data-coef="1">1/144 High Grade (Standard)</option>
                        <option value="1/100" data-coef="1.5">1/100 Master Grade (+50%)</option>
                        <option value="1/60" data-coef="2.5">1/60 Perfect Grade (+150%)</option>
                    </select>

                    <button type="submit" class="add-to-cart">AJOUTER AU PANIER</button>
                </form>
            </div>
        </div>

        <div class="extra-section">
            <div class="tabs-content">
                <h3>DESCRIPTION DU PRODUIT</h3>
                <p>
                    Ce kit MechaLab exclusif représente le summum du design et de la technologie. Chaque pièce est conçue pour s'emboîter parfaitement sans colle, offrant une articulation fluide et une pose dynamique. Idéal pour les collectionneurs cherchant la perfection.
                </p>
                
                <h3 class="title-margin">AVIS CLIENTS</h3>
                <div class="review-card">
                    <strong>Arnaud B.</strong> <span class="stars">★★★★★</span>
                    <p>"Design incroyable, le montage est un pur plaisir."</p>
                </div>
            </div>
        </div>

        <div class="extra-section">
            <h3 class="suggestions-title">PRODUITS POUVANT VOUS INTÉRESSER</h3>
            <div class="produits-grid">
                <?php
                include_once('include/fonctions.php');
                $tousLesProduits = chargerProduits('tout');
                shuffle($tousLesProduits); // Mélange pour la suggestion
                
                for($i = 0; $i < 4; $i++) {
                    if (isset($tousLesProduits[$i])) {
                        $p = $tousLesProduits[$i];
                        echo "
                        <div class='produit-card' onclick=\"location.href='produit.php?Nom=".urlencode($p['nom'])."&Prix={$p['prix']}&Image=".urlencode($p['image'])."'\">
                            <div class='image-container'>
                                <img src='{$p['image']}' class='img-main'>
                                <img src='{$p['hover']}' class='img-hover'>
                            </div>
                            <h3>" . htmlspecialchars($p['nom']) . "</h3>
                            <p class='prix'>".number_format($p['prix'], 2, ',', ' ')." €</p>
                        </div>";
                    }
                }
                ?>
            </div>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>

    <script>
        // Changement d'image principale
        function updateLargeImage(src) {
            document.getElementById('main-view').src = src;
        }

        // Calcul dynamique du prix avec les coefficients
        function calculatePrice() {
            const base = <?php echo $prixBase; ?>;
            const selector = document.getElementById('size-selector');
            const coef = parseFloat(selector.options[selector.selectedIndex].getAttribute('data-coef'));
            const finalPrice = (base * coef).toFixed(2);
            
            // Mise à jour de l'affichage et du champ caché pour le panier
            document.getElementById('current-price').innerText = finalPrice.replace('.', ',') + " €";
            document.getElementById('hidden-price').value = finalPrice;
        }
    </script>
</body>
</html>