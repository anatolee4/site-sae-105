<?php
session_start();

// Initialisation du panier s'il n'existe pas
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Gestion des actions POST (Ajout et Suppression)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Cas 1 : Ajout d'un produit depuis produit.php
    if (isset($_POST['nom']) && isset($_POST['prix'])) {
        $nouveauProduit = [
            'nom'    => $_POST['nom'],
            'prix'   => floatval($_POST['prix']),
            'image'  => $_POST['image'] ?? 'img/produit1.png',
            'taille' => $_POST['taille'] ?? '1/144 High Grade'
        ];
        $_SESSION['panier'][] = $nouveauProduit;
    }
    
    // Cas 2 : Suppression d'un produit du panier
    if (isset($_POST['supprimer'])) {
        $index = intval($_POST['supprimer']);
        if (isset($_SESSION['panier'][$index])) {
            unset($_SESSION['panier'][$index]);
            // Réindexation du tableau pour éviter les erreurs de clés
            $_SESSION['panier'] = array_values($_SESSION['panier']);
        }
    }
}

// Calcul du montant total du panier
$total = 0;
foreach ($_SESSION['panier'] as $item) {
    $total += $item['prix'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - Votre Panier</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/panier.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <h2>VOTRE PANIER</h2>
        
        <?php if (empty($_SESSION['panier'])): ?>
            <div class="panier-vide">
                <p>Votre panier est actuellement vide.</p>
                <a href="catalogue.php" class="btn-continuer">DÉCOUVRIR LE CATALOGUE</a>
            </div>
        <?php else: ?>
            <div class="panier-liste">
                <?php foreach ($_SESSION['panier'] as $index => $produit): ?>
                    <div class="panier-item">
                        <div class="item-image">
                            <img src="<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
                        </div>
                        
                        <div class="item-details">
                            <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                            <p class="item-taille">ÉCHELLE : <?php echo htmlspecialchars($produit['taille']); ?></p>
                            <p class="item-prix"><?php echo number_format($produit['prix'], 2, ',', ' '); ?> €</p>
                        </div>
                        
                        <div class="item-actions">
                            <form method="POST" action="panier.php">
                                <input type="hidden" name="supprimer" value="<?php echo $index; ?>">
                                <button type="submit" class="btn-supprimer">Supprimer</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="panier-total">
                <h3>TOTAL : <?php echo number_format($total, 2, ',', ' '); ?> €</h3>
                <button class="btn-payer" onclick="alert('Redirection vers le paiement sécurisé...')">COMMANDER MAINTENANT</button>
                <div style="margin-top: 1.5rem;">
                    <a href="catalogue.php" style="color: #ccc; text-decoration: none; font-size: 0.9rem;">Continuer mes achats</a>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>