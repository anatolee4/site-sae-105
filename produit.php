<?php
include_once('include/fonctions.php');

$nomRecherche = $_REQUEST['Nom'] ?? '';
$produitComplet = trouverProduitParNom($nomRecherche);


$nom = $produitComplet['nom'] ?? ($_REQUEST['Nom'] ?? 'Modèle Mecha');
$prixBase = $produitComplet['prix'] ?? floatval($_REQUEST['Prix'] ?? 0);
$images = [
    $produitComplet['img1'] ?? ($_REQUEST['Image'] ?? 'img/produit1.png'),
    $produitComplet['img2'] ?? 'img/details1.png',
    $produitComplet['img3'] ?? 'img/details2.png',
    $produitComplet['img4'] ?? 'img/details3.png'
];
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
                <?php foreach($images as $img) : ?>
                    <img src="<?php echo htmlspecialchars($img); ?>" onclick="updateLargeImage(this.src)">
                <?php endforeach; ?>
            </div>

            <div class="image-display">
                <img id="main-view" src="<?php echo htmlspecialchars($images[0]); ?>" alt="<?php echo htmlspecialchars($nom); ?>">
            </div>

            <div class="product-info">
                <h1><?php echo htmlspecialchars($nom); ?></h1>
                <p class="stock">● En stock (Expédition immédiate)</p>
                <div class="price-big" id="current-price"><?php echo number_format($prixBase, 2, ',', ' '); ?> €</div>

                <form action="panier.php" method="POST">
                    <input type="hidden" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($images[0]); ?>">
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
                <p>Ce kit MechaLab exclusif représente le summum du design et de la technologie...</p>
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
                $tousLesProduits = chargerProduits('tout');
                shuffle($tousLesProduits);
                for($i = 0; $i < 4; $i++) {
                    if (isset($tousLesProduits[$i])) {
                        $p = $tousLesProduits[$i];
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
                }
                ?>
            </div>
        </div>
    </main>
    <?php include('include/pied-de-page.php'); ?>

    <script>
        function updateLargeImage(src) { document.getElementById('main-view').src = src; }
        function calculatePrice() {
            const base = <?php echo $prixBase; ?>;
            const selector = document.getElementById('size-selector');
            const coef = parseFloat(selector.options[selector.selectedIndex].getAttribute('data-coef'));
            const finalPrice = (base * coef).toFixed(2);
            document.getElementById('current-price').innerText = finalPrice.replace('.', ',') + " €";
            document.getElementById('hidden-price').value = finalPrice;
        }
    </script>
</body>
</html>