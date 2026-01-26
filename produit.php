<?php
$nom = $_REQUEST['Nom'] ?? 'Produit';
$prixBase = floatval($_REQUEST['Prix'] ?? 0);
$image = $_REQUEST['Image'] ?? 'img/produit1.png';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MechaLab - <?php echo $nom; ?></title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <style>
        .carousel-container { position: relative; width: 100%; max-width: 500px; }
        .carousel-slide { display: none; width: 100%; border-radius: 15px; }
        .carousel-btn { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0,0,0,0.5); color: white; border: none; padding: 10px; cursor: pointer; }
        .next { right: 0; } .prev { left: 0; }
        
        .section-details { max-width: 1200px; margin: 40px auto; padding: 20px; }
        .reviews { margin-top: 50px; background: #f9f9f9; padding: 30px; border-radius: 15px; }
        .review-item { border-bottom: 1px solid #ddd; padding: 15px 0; }
    </style>
</head>
<body>
    <?php include('include/entete.php'); ?>
    <?php include('include/menu.php'); ?>
    
    <main style="padding-top: 100px;">
        <div class="section-details" style="display: flex; gap: 50px; flex-wrap: wrap;">
            <div class="carousel-container">
                <img class="carousel-slide" src="<?php echo $image; ?>" style="display:block;">
                <img class="carousel-slide" src="img/details1.png">
                <img class="carousel-slide" src="img/details2.png">
                <button class="carousel-btn prev" onclick="changeSlide(-1)">❮</button>
                <button class="carousel-btn next" onclick="changeSlide(1)">❯</button>
            </div>

            <div style="flex: 1; min-width: 300px;">
                <h1><?php echo $nom; ?></h1>
                <h2 id="display-prix" style="color: #e74c3c; margin: 20px 0;"><?php echo number_format($prixBase, 2); ?> €</h2>
                
                <form action="panier.php" method="POST">
                    <input type="hidden" name="prix" id="input-prix" value="<?php echo $prixBase; ?>">
                    <select id="select-taille" onchange="updatePrice()" style="width: 100%; padding: 12px; margin-bottom: 20px;">
                        <option value="1/144" data-coef="1">1/144 Standard</option>
                        <option value="1/100" data-coef="1.5">1/100 Master Grade</option>
                        <option value="1/60" data-coef="2.5">1/60 Perfect Grade</option>
                    </select>
                    <button type="submit" style="background:#2c3e50; color:white; width:100%; padding:15px; border:none; cursor:pointer; border-radius:5px;">AJOUTER AU PANIER</button>
                </form>
            </div>
        </div>

        <div class="section-details">
            <div class="reviews">
                <h3>Avis clients (12)</h3>
                <div class="review-item">
                    <strong>Jean-Michel</strong> <span style="color:#f1c40f;">★★★★★</span>
                    <p>Qualité exceptionnelle, le montage est un vrai plaisir.</p>
                </div>
            </div>
        </div>

        <div class="section-details">
            <h3>Vous aimerez aussi...</h3>
            <div class="produits-grid">
                <div class="produit-card" onclick="location.href='produit.php?Nom=Archer%20Vert&Prix=99.99&Image=img/produit7.png'">
                    <img src="img/produit7.png">
                    <h3>Archer Vert</h3>
                </div>
                <div class="produit-card" onclick="location.href='produit.php?Nom=Commandant%20Noir&Prix=159.99&Image=img/produit6.png'">
                    <img src="img/produit6.png">
                    <h3>Commandant Noir</h3>
                </div>
            </div>
        </div>
    </main>

    <script>
        let slideIndex = 0;
        function changeSlide(n) {
            let slides = document.getElementsByClassName("carousel-slide");
            slides[slideIndex].style.display = "none";
            slideIndex = (slideIndex + n + slides.length) % slides.length;
            slides[slideIndex].style.display = "block";
        }

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