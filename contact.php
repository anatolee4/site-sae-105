<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaLab - Contact</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding-top: 120px; max-width: 1200px; margin: auto;">
        <h2 style="text-align: center; margin-bottom: 3rem; text-transform: uppercase; letter-spacing: 2px;">Contactez-nous</h2>
        
        <div class="contact-container">
            <div class="contact-form-container">
                <form action="#" method="POST" class="mecha-form">
                    <div class="form-group">
                        <label for="nom">Nom complet</label>
                        <input type="text" id="nom" name="nom" placeholder="Ex: Jean Dupont" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" placeholder="nom@exemple.com" required>
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <select id="sujet" name="sujet">
                            <option value="sav">Service Après-Vente</option>
                            <option value="partenariat">Partenariat</option>
                            <option value="autre">Autre demande</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Envoyer le message</button>
                </form>
            </div>
            
            <div class="contact-info">
                <div class="info-item">
                    <h3>Direct</h3>
                    <p>Téléphone : +33 4 78 90 12 34</p>
                    <p>Email : <a href="mailto:contact@mechalab.fr">contact@mechalab.fr</a></p>
                </div>
                
                <div class="info-item">
                    <h3>Horaires</h3>
                    <p>Lundi - Vendredi : 10h - 19h</p>
                    <p>Samedi : 10h - 18h</p>
                </div>

                <div class="info-item">
                    <h3>Réseaux Sociaux</h3>
                    <div class="social-links-grid">
                        <a href="#">FB</a>
                        <a href="#">IG</a>
                        <a href="#">X</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('include/pied-de-page.php'); ?>
</body>
</html>
