<?php
$nom = $_GET['Nom'] ?? "Modèle Mecha";
$prixBase = floatval($_GET['Prix'] ?? 0);
$image = $_GET['Image'] ?? "img/produit1.png";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - <?php echo $nom; ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <style>
        .product-page { max-width: 1200px; margin: 100px auto; display: flex; gap: 40px; padding: 20px; }
        .gallery-v { display: flex; flex-direction: column; gap: 15px; }
        .gallery-v img { width: 90px; height: 90px; object-fit: cover; border-radius: 8px; cursor: pointer; border: 2px solid transparent; transition: 0.3s; }
        .gallery-v img:hover { border-color: #3498db; }
        .main-img-box { flex: 2; }
        .main-img-box img { width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .info-box { flex: 1.5; }
        .info-box h1 { font-size: 2.5rem; color: #2c3e50; }
        .price-tag { font-size: 2rem; color: #e74c3c; margin: 20px 0; font-weight: bold; }
        .options select { width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ddd; }
        .buy-btn { background: #2c3e50; color: white; border: none; padding: 20px; width: 100%; border-radius: 8px; font-weight: bold; cursor: pointer; transition: 0.3s; }
        .buy-btn:hover { background: #3498db; }
        .reviews { margin-top: 50px; background: #f9f9f9; padding: 30px; border-radius: 15px; }
    </style>
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>

    <main class="product-page">
        <div class="gallery-v">
            <img src="<?php echo $image; ?>" onclick="document.getElementById('large').src=this.src">
            <img src="img/details1.png" onclick="document.getElementById('large').src=this.src">
            <img src="img/details2.png" onclick="document.getElementById('large').src=this.src">
        </div>

        <div class="main-img-box">
            <img id="large" src="<?php echo $image; ?>" alt="<?php echo $nom; ?>">
        </div>

        <div class="info-box">
            <h1><?php echo $nom; ?></h1>
            <p style="color: #27ae60; font-weight: bold;">● Disponible immédiatement</p>
            <div class="price-tag" id="display-prix"><?php echo number_format($prixBase, 2); ?> €</div>
            
            <div class="options">
                <label>Choisir l'échelle (affecte le prix) :</label>
                <select id="select-taille" onchange="updatePrice()">
                    <option value="1/144" data-coef="1">1/144 Standard</option>
                    <option value="1/100" data-coef="1.5">1/100 Master Grade (+50%)</option>
                    <option value="1/60" data-coef="2.5">1/60 Perfect Grade (+150%)</option>
                </select>
                <button class="buy-btn">AJOUTER AU PANIER</button>
            </div>

            <div class="reviews">
                <h3>Avis Clients</h3>
                <p><strong>Sébastien K.</strong> ⭐⭐⭐⭐⭐<br>"Détails incroyables sur ce modèle !"</p>
                <hr style="margin: 10px 0;">
                <p><strong>Marie L.</strong> ⭐⭐⭐⭐<br>"Montage complexe mais gratifiant."</p>
            </div>
        </div>
    </main>

    <section style="max-width: 1200px; margin: 0 auto 50px; padding: 0 20px;">
        <h3>Ces produits pourraient vous intéresser</h3>
        <div class="produits-grid">
            <div class="produit-card" onclick="location.href='produit.php?Nom=Archer%20Vert&Prix=99.99&Image=img/produit7.png'">
                <div class="image-container">
                    <img src="img/produit7.png" class="img-main">
                    <img src="img/produit7_hover.png" class="img-hover">
                </div>
                <h3>Archer Vert</h3>
            </div>
        </div>
    </section>

    <script>
    function updatePrice() {
        const base = <?php echo $prixBase; ?>;
        const select = document.getElementById('select-taille');
        const coef = parseFloat(select.options[select.selectedIndex].getAttribute('data-coef'));
        const newPrice = (base * coef).toFixed(2);
        document.getElementById('display-prix').innerText = newPrice.replace('.', ',') + " €";
    }
    </script>
    <?php include('include/pied-de-page.php'); ?>
</body>
</html>