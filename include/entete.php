<header>
    <div class="burger-icon" onclick="toggleMenu()">☰</div>

    <div class="logo-central">
        <a href="index.php">
            <img src="img/logo.png" alt="MechaLab" style="height: 150px;">
        </a>
    </div>

    <div class="panier-link">
        <a href="panier.php">
            <img src="img/cart-icon.png" alt="Panier" class="panier-img">
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