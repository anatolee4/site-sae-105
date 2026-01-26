<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - Catalogue</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding: 150px 2rem 5rem 2rem; max-width: 900px; margin: auto;">
        <h1 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: #2c3e50;">NOTRE CONCEPT</h1>
        
        <p style="font-size: 1.2rem; line-height: 2; margin-bottom: 3rem; text-align: justify;">
            MechaLab est né de la volonté de fusionner l'art millénaire du modélisme avec l'innovation technologique moderne. Nos kits, pensés et dessinés en France, proposent des designs uniques qui s'affranchissent des codes traditionnels. Chaque pièce est injectée avec une précision micrométrique pour garantir un plaisir de montage pur, sans colle, où chaque clic est une satisfaction.
        </p>

        <div style="background: #f9f9f9; padding: 2rem; border-radius: 15px;">
            <h3 style="margin-bottom: 1.5rem; text-align: center;">DÉMONSTRATION DE MONTAGE</h3>
            <video controls style="width: 100%; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                <source src="videos/presentation.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>