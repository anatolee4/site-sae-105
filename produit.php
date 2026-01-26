<?php
$nom = $_GET['Nom'] ?? "Modèle Mecha";
$prixBase = floatval($_GET['Prix'] ?? 0);
$image = $_GET['Image'] ?? "img/produit1.png";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - <?php echo htmlspecialchars($nom); ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <style>
        .product-main-section { display: flex; gap: 40px; max-width: 1300px; margin: 100px auto 40px; padding: 20px; flex-wrap: wrap; }
        .gallery-v { display: flex; flex-direction: column; gap: 15px; }
        .gallery-v img { width: 100px; height: 100px; object-fit: cover; cursor: pointer; border-radius: 8px; border: 2px solid transparent; transition: 0.3s; }
        .gallery-v img:hover { border-color: #3498db; }
        .main-img-large { flex: 2; min-width: 400px; }
        .main-img-large img { width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .info-panel { flex: 1.5; min-width: 300px; }
        .price-tag { color: #e74c3c; font-size: 2.5rem; margin: 20px 0; font-weight: bold; }
        .review-section { max-width: 1300px; margin: 50px auto; padding: 20px; background: #f9f9f9; border-radius: 20px; }
        .review-card { border-bottom: 1px solid #ddd; padding: 20px 0; }
    </style>
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>

    <main>
        <div class="product-main-section">
            <div class="gallery-v">
                <img src="<?php echo $image; ?>" onclick="document.getElementById('large-view').src=this.src">
                <img src="img/details1.png" onclick="document.getElementById('large-view').src=this.src">
                <img src="img/details2.png" onclick="document.getElementById('large-view').src=this.src">
            </div>

            <div class="main-img-large">
                <img id="large-view" src="<?php echo $image; ?>" alt="<?php echo $nom; ?>">
            </div>

            <div class="info-panel">
                <h1><?php echo htmlspecialchars($nom); ?></h1>
                <p style="color: #27ae60; font-weight: bold; margin-top: 10px;">● En stock - Expédié sous 24h</p>
                <div class="price-tag" id="dynamic-price"><?php echo number_format($prixBase, 2, ',', ' '); ?> €</div>

                <form action="panier.php" method="POST">
                    <label style="font-weight: bold; display: block; margin-bottom: 10px;">Choisir l'échelle :</label>
                    <select id="size-select" name="taille" onchange="updatePrice()" style="width: 100%; padding: 15px; border-radius: 10px; margin-bottom: 25px; font-size: 1rem;">
                        <option value="1/144" data-coef="1">1/144 Standard (Prix base)</option>
                        <option value="1/100" data-coef="1.6">1/100 Master Grade (+60%)</option>
                        <option value="1/60" data-coef="2.8">1/60 Perfect Grade (+180%)</option>
                    </select>
                    <button type="submit" class="btn-voir-plus" style="width:100%; border:none; margin:0;">AJOUTER AU PANIER</button>
                </form>
            </div>
        </div>

        <section class="review-section">
            <h3>Avis des Pilotes MechaLab (<?php echo rand(10, 50); ?>)</h3>
            <div class="review-card"><strong>Lucas M.</strong> ⭐⭐⭐⭐⭐ <p>Détails incroyables sur ce modèle !</p></div>
            <div class="review-card"><strong>Sarah K.</strong> ⭐⭐⭐⭐⭐ <p>Le plastique est de super qualité, montage fluide.</p></div>
        </section>

        <section style="max-width: 1300px; margin: auto; padding: 20px;">
            <h3 style="margin-bottom: 20px;">Produits pouvant vous intéresser</h3>
            <div class="produits-grid">
                <div class="produit-card" onclick="location.href='produit.php?Nom=Archer%20Vert&Prix=99.99&Image=img/produit7.png'">
                    <div class="img-container">
                        <img src="img/produit7.png" class="img-main">
                        <img src="img/produit7_hover.png" class="img-hover">
                    </div>
                    <h3>Archer Vert</h3>
                </div>
            </div>
        </section>
    </main>

    <script>
        function updatePrice() {
            const base = <?php echo $prixBase; ?>;
            const select = document.getElementById('size-select');
            const coef = parseFloat(select.options[select.selectedIndex].getAttribute('data-coef'));
            const newPrice = (base * coef).toFixed(2);
            document.getElementById('dynamic-price').innerText = newPrice.replace('.', ',') + " €";
        }
    </script>
    <?php include('include/pied-de-page.php'); ?>
</body>
</html>