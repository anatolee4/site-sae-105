<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - À Propos</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main>
        <div class="video-hero" style="width: 100%; height: 70vh; position: relative; overflow: hidden; background: #000;">
            <video autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                <source src="videos/presentation.mov" type="video/quicktime">
                <source src="videos/presentation.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
            
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); pointer-events: none;"></div>
        </div>

        <section style="padding: 5rem 2rem; max-width: 900px; margin: auto;">
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
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>