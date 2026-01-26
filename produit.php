<?php
$nom = isset($_REQUEST['Nom']) ? $_REQUEST['Nom'] : 'Produit';
$prix = isset($_REQUEST['Prix']) ? $_REQUEST['Prix'] : '0';
$image = isset($_REQUEST['Image']) ? $_REQUEST['Image'] : 'img/produit1.png';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunpla France - <?php echo htmlspecialchars($nom); ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/produit.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="produit-details">
            <div class="produit-image">
                <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($nom); ?>">
            </div>
            
            <div class="produit-info">
                <h2><?php echo htmlspecialchars($nom); ?></h2>
                <p class="description">
                    Ce modèle Gunpla exclusif représente le summum de la qualité et du design français. Avec ses articulations précises, ses détails minutieux et son système de montage innovant, ce kit offre une expérience de construction exceptionnelle. Les pièces en plastique haute qualité garantissent un assemblage parfait sans nécessiter de colle. Parfait pour les collectionneurs et les passionnés de maquettes.
                </p>
                <p class="description">
                    Échelle 1/144, environ 180 pièces. Comprend des autocollants et une feuille de décalcomanies pour personnaliser votre modèle. Niveau de difficulté intermédiaire. Temps de montage estimé : 3-4 heures.
                </p>
                
                <form action="panier.php" method="POST" class="form-achat">
                    <input type="hidden" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($image); ?>">
                    
                    <div class="form-group">
                        <label>Produit :</label>
                        <span class="produit-nom"><?php echo htmlspecialchars($nom); ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label>Prix :</label>
                        <span class="produit-prix"><?php echo htmlspecialchars($prix); ?> €</span>
                        <input type="hidden" name="prix" value="<?php echo htmlspecialchars($prix); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="taille">Échelle :</label>
                        <select name="taille" id="taille" required>
                            <option value="">Choisir une échelle</option>
                            <option value="1/144">1/144 (Standard)</option>
                            <option value="1/100">1/100 (Master Grade)</option>
                            <option value="1/60">1/60 (Perfect Grade)</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn-ajouter">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>