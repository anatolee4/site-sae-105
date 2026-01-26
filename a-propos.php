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
    
    <main style="max-width: 1000px; margin: 2rem auto; padding: 2rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">À Propos de MechaLab</h2>
        
        <section>
            <p>Découvrez notre concept exclusif de modèles Mecha aux designs originaux. Chaque kit MechaLab est soigneusement conçu pour offrir une expérience de montage unique, alliant la tradition du modélisme à l'esprit créatif français.</p>
            <p>Nos modèles se distinguent par leurs designs audacieux, avec des détails exceptionnels et une qualité de fabrication incomparable.</p>
        </section>

        <section style="margin-top: 3rem; text-align: center;">
            <h3>L'Art du Montage</h3>
            <figure style="margin-top: 1.5rem;">
                <video controls style="width: 100%; max-width: 800px; border-radius: 10px;">
                    <source src="videos/presentation.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
                <figcaption style="margin-top: 1rem; font-style: italic;">Découvrez nos techniques exclusives de montage et de personnalisation.</figcaption>
            </figure>
        </section>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>