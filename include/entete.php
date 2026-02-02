<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<header>
    <div class="burger-icon" onclick="toggleMenu()">☰</div>

    <div class="logo-central">
        <a href="index.php" class="logo-hover-container">
            <img src="img/logo.png" alt="MechaLab" class="logo-img logo-main">
            <img src="img/logo_alt.png" alt="MechaLab" class="logo-img logo-alt">
        </a>
    </div>

    <div class="panier-link">
        <a href="panier.php" class="panier-icon-link">
            <span class="material-symbols-outlined">shopping_cart</span>
        </a>
    </div>
</header>

<div id="menu-overlay" onclick="toggleMenu()"></div>

<script>
function toggleMenu() {
    const nav = document.querySelector('nav');
    const overlay = document.getElementById('menu-overlay');
    nav.classList.toggle('active');
    overlay.style.display = nav.classList.contains('active') ? 'block' : 'none';
    
    if (nav.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = 'auto';
    }
}
</script>