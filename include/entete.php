<header>
    <div class="burger-icon" onclick="toggleMenu()">
        <span id="burger-symbol">☰</span>
    </div>

    <div class="logo-central">
        <a href="index.php"><img src="img/logo.png" alt="MechaLab"></a>
    </div>

    <div class="panier-link">
        <a href="panier.php">
            <img src="img/cart-icon.png" alt="Panier" style="width:18px; filter: invert(1);"> 
            <span>Panier</span>
        </a>
    </div>
</header>

<div id="menu-overlay" onclick="toggleMenu()"></div>

<script>
function toggleMenu() {
    const nav = document.querySelector('nav');
    const overlay = document.getElementById('menu-overlay');
    const symbol = document.getElementById('burger-symbol');
    
    nav.classList.toggle('active');
    
    if (nav.classList.contains('active')) {
        overlay.style.display = 'block';
        symbol.innerHTML = '✕';
    } else {
        overlay.style.display = 'none';
        symbol.innerHTML = '☰';
    }
}

// Correctif : Fermer le menu au clic sur un lien
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', () => {
        const nav = document.querySelector('nav');
        if(nav.classList.contains('active')) toggleMenu();
    });
});
</script>