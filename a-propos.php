<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - À Propos</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    

    
    <main style="padding-top: 120px;">
     <div class="carousel-container">
    <div class="carousel-slide">
        <img src="img/banner.jpg" alt="Produit 1">
        <img src="img/banner2.jpg" alt="Détails 3">
        <img src="img/banner3.jpg" alt="Produit 16">
    </div>

    <button id="prevBtn">❮</button>
    <button id="nextBtn">❯</button>
</div>

        <section style="padding: 3rem 2rem; max-width: 900px; margin: auto;">
            <h1 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: #1a1a1a; letter-spacing: 2px;">NOTRE CONCEPT</h1>
            
            <p style="font-size: 1.2rem; line-height: 2; margin-bottom: 3rem; text-align: justify; color: #555;">
                MechaLab est né de la volonté de fusionner l'art millénaire du modélisme avec l'innovation technologique moderne. Nos kits, pensés et dessinés en France, proposent des designs uniques qui s'affranchissent des codes traditionnels. Chaque pièce est injectée avec une précision micrométrique pour garantir un plaisir de montage pur, sans colle, où chaque clic est une satisfaction.
            </p>

            <div style="border-left: 5px solid #ff1900; padding-left: 2rem; margin-top: 4rem;">
                <h3 style="margin-bottom: 1rem; color: #1a1a1a;">L'EXCELLENCE À LA FRANÇAISE</h3>
                <p style="color: #666; line-height: 1.6;">
                    De la conception 3D initiale au contrôle qualité final, chaque étape est rigoureusement suivie pour offrir une expérience utilisateur inégalée dans l'univers du Mecha.
                </p>
            </div>
        </section>
        <script src="script.js"></script>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>