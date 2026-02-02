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
<style>
    /* Container principal */
.contact-container {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 4rem;
    padding: 0 20px;
    margin-bottom: 5rem;
}

/* Style du Formulaire */
.mecha-form {
    background: #f9f9f9;
    padding: 2.5rem;
    border-radius: 15px;
    border: 1px solid #eee;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #1a1a1a;
    text-transform: uppercase;
    font-size: 0.8rem;
}

.form-group input, 
.form-group textarea, 
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-family: inherit;
    font-size: 1rem;
}

.form-group input:focus, 
.form-group textarea:focus {
    border-color: #ff1900;
    outline: none;
}

/* Bouton Envoyer (Style MechaLab) */
.btn-submit {
    width: 100%;
    padding: 1rem;
    background: #1a1a1a;
    color: white;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit:hover {
    background: #ff1900;
    box-shadow: 0 5px 15px rgba(255, 25, 0, 0.3);
}

/* Infos de droite */
.contact-info .info-item {
    margin-bottom: 2.5rem;
    border-left: 3px solid #ff1900;
    padding-left: 1.5rem;
}

.contact-info h3 {
    text-transform: uppercase;
    font-size: 1.1rem;
    margin-bottom: 0.8rem;
    color: #1a1a1a;
}

.social-links-grid {
    display: flex;
    gap: 15px;
}

.social-links-grid a {
    text-decoration: none;
    color: #1a1a1a;
    font-weight: bold;
    border: 1px solid #1a1a1a;
    padding: 5px 10px;
    border-radius: 5px;
    transition: 0.3s;
}

.social-links-grid a:hover {
    background: #1a1a1a;
    color: white;
}

/* Responsive */
@media (max-width: 850px) {
    .contact-container {
        grid-template-columns: 1fr;
    }
}
</style>