<section id="nouvelle-collection" style="padding: 4rem 2rem;">
    <h2 style="text-align: center; margin-bottom: 2rem;">NOUVELLE COLLECTION</h2>
    <div class="produits-grid">
        <?php
        $top4 = [
            ["Titan Écarlate", 149.99, "img/produit4.png"],
            ["Paladin Doré", 169.99, "img/produit8.png"],
            ["Ombre Nocturne", 144.99, "img/produit12.png"],
            ["Nébuleuse Pourpre", 155.00, "img/produit13.png"]
        ];

        foreach ($top4 as $p) {
            echo '
            <div class="produit-card" onclick="location.href=\'produit.php?Nom='.urlencode($p[0]).'&Prix='.$p[1].'&Image='.$p[2].'\'">
                <img src="'.$p[2].'">
                <div class="size-overlay">
                    <strong>Tailles disponibles</strong>
                    <p>1/144 | 1/100 | 1/60</p>
                </div>
                <h3>'.$p[0].'</h3>
                <p class="prix">'.number_format($p[1], 2, ',', ' ').' €</p>
            </div>';
        }
        ?>
    </div>
    <a href="nouvelle-collection.php" class="btn-voir-plus">VOIR TOUTE LA COLLECTION</a>
</section>