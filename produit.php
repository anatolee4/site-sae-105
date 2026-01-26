<?php
$nom = $_REQUEST['Nom'] ?? 'Produit';
$prixBase = floatval($_REQUEST['Prix'] ?? 0);
$image = $_REQUEST['Image'] ?? 'img/produit1.png';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - <?php echo htmlspecialchars($nom); ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/produit.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding: 150px 2rem 5rem 2rem;">
        <div class="produit-details" style="display: flex; gap: 60px; max-width: 1200px; margin: auto; flex-wrap: wrap;">
            <div class="image-section" style="flex: 1; min-width: 300px;">
                <img src="<?php echo $image; ?>" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            </div>
            
            <div class="info-section" style="flex: 1; min-width: 300px;">
                <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 1rem;"><?php echo htmlspecialchars($nom); ?></h1>
                <h2 id="display-prix" style="color: #e74c3c; font-size: 2rem; margin-bottom: 2rem;"><?php echo number_format($prixBase, 2, ',', ' '); ?> €</h2>
                
                <p style="margin-bottom: 2rem; line-height: 1.8;">Ce kit MechaLab exclusif offre une expérience de montage inégalée. Conçu pour les passionnés, il ne nécessite aucune colle et propose une articulation de haute précision.</p>

                <form action="panier.php" method="POST">
                    <input type="hidden" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($image); ?>">
                    <input type="hidden" name="prix" id="input-prix" value="<?php echo $prixBase; ?>">
                    
                    <div style="margin-bottom: 2rem;">
                        <label style="font-weight: bold; display: block; margin-bottom: 10px;">Choisir l'échelle :</label>
                        <select name="taille" id="select-taille" onchange="updatePrice()" style="width: 100%; padding: 15px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                            <option value="1/144" data-coef="1">1/144 - Standard</option>
                            <option value="1/100" data-coef="1.5">1/100 - Master Grade (+50%)</option>
                            <option value="1/60" data-coef="2.5">1/60 - Perfect Grade (+150%)</option>
                        </select>
                    </div>
                    
                    <button type="submit" style="background: #2c3e50; color: white; padding: 20px; border: none; width: 100%; cursor: pointer; font-weight: bold; font-size: 1.1rem; border-radius: 5px; transition: background 0.3s;">
                        AJOUTER AU PANIER
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script>
    function updatePrice() {
        const base = <?php echo $prixBase; ?>;
        const select = document.getElementById('select-taille');
        const coef = parseFloat(select.options[select.selectedIndex].getAttribute('data-coef'));
        const newPrice = (base * coef).toFixed(2);
        
        document.getElementById('display-prix').innerText = newPrice.replace('.', ',') + " €";
        document.getElementById('input-prix').value = newPrice;
    }
    </script>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>