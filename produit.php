<?php
$nom = $_REQUEST['Nom'] ?? 'Modèle Mecha';
$prixBase = floatval($_REQUEST['Prix'] ?? 0);
$image = $_REQUEST['Image'] ?? 'img/produit1.png';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - <?php echo $nom; ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <style>
        .product-container { max-width: 1200px; margin: 100px auto 40px; padding: 20px; display: flex; gap: 30px; }
        
        /* Galerie Verticale */
        .gallery-vertical { display: flex; flex-direction: column; gap: 10px; }
        .gallery-vertical img { width: 80px; height: 80px; object-fit: cover; cursor: pointer; border-radius: 5px; opacity: 0.6; transition: 0.3s; }
        .gallery-vertical img:hover { opacity: 1; border: 2px solid #3498db; }
        
        .main-image-container { flex: 2; }
        .main-image-container img { width: 100%; border-radius: 15px; }
        
        .info-panel { flex: 2; }
        .availability { color: #27ae60; font-weight: bold; margin: 10px 0; }
        
        .tabs { margin-top: 40px; border-top: 1px solid #eee; padding-top: 20px; }
        .tech-sheet { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .tech-sheet td { padding: 10px; border-bottom: 1px solid #eee; }
        .tech-sheet td:first-child { font-weight: bold; color: #7f8c8d; }
    </style>
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="product-container">
            <div class="gallery-vertical">
                <img src="<?php echo $image; ?>" onclick="updateMainImage(this.src)">
                <img src="img/details1.png" onclick="updateMainImage(this.src)">
                <img src="img/details2.png" onclick="updateMainImage(this.src)">
                <img src="img/details3.png" onclick="updateMainImage(this.src)">
            </div>

            <div class="main-image-container">
                <img id="main-view" src="<?php echo $image; ?>">
            </div>

            <div class="info-panel">
                <h1><?php echo $nom; ?></h1>
                <p class="availability">● En stock (Livraison sous 48h)</p>
                <h2 id="display-prix"><?php echo number_format($prixBase, 2); ?> €</h2>
                
                <form action="panier.php" method="POST" style="margin-top: 20px;">
                    <select id="select-taille" onchange="updatePrice()" style="width: 100%; padding: 10px; margin-bottom: 15px;">
                        <option value="1/144" data-coef="1">1/144 Standard</option>
                        <option value="1/100" data-coef="1.5">1/100 Master Grade</option>
                        <option value="1/60" data-coef="2.5">1/60 Perfect Grade</option>
                    </select>
                    <button type="submit" style="background:#2c3e50; color:white; width:100%; padding:15px; border:none; cursor:pointer; border-radius:5px; font-weight:bold;">AJOUTER AU PANIER</button>
                </form>
            </div>
        </div>

        <div style="max-width: 1200px; margin: auto; padding: 20px;">
            <div class="tabs">
                <h3>Description</h3>
                <p style="color:#555; line-height:1.6; margin: 15px 0;">Ce modèle MechaLab représente l'apogée de l'ingénierie robotique miniature. Conçu pour une pose dynamique, il possède plus de 40 points d'articulation et un squelette interne renforcé.</p>
                
                <h3>Fiche Technique</h3>
                <table class="tech-sheet">
                    <tr><td>Matériau</td><td>Plastique ABS & Polyrésine</td></tr>
                    <tr><td>Nombre de pièces</td><td>~350 pièces</td></tr>
                    <tr><td>Difficulté</td><td>Avancé (4/5)</td></tr>
                    <tr><td>Temps de montage</td><td>6-8 heures</td></tr>
                </table>
            </div>

            <div style="margin-top: 50px; background:#f4f7f6; padding: 30px; border-radius: 15px;">
                <h3>Avis de la communauté Mecha</h3>
                <div style="margin-top:20px;">
                    <p><strong>Marc R.</strong> ⭐⭐⭐⭐⭐ - "Impressionnant, les détails du torse sont dingues."</p><br>
                    <p><strong>Sébastien L.</strong> ⭐⭐⭐⭐⭐ - "Livraison rapide et kit parfait."</p><br>
                    <p><strong>Julie V.</strong> ⭐⭐⭐⭐ - "Un peu complexe pour un débutant, mais magnifique."</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        function updateMainImage(src) { document.getElementById('main-view').src = src; }
        
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