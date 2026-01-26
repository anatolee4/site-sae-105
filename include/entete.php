<header>
    <div class="burger-icon" onclick="toggleMenu()">☰</div>
    <div class="logo-central">
        <a href="index.php"><img src="img/logo.png" alt="MechaLab" style="height: 50px;"></a>
    </div>
    <div class="panier-link">
        <a href="panier.php" style="background: #e74c3c; color: white; padding: 8px 15px; border-radius: 20px; text-decoration: none;">🛒 Panier</a>
    </div>
</header>
<div id="menu-overlay" onclick="toggleMenu()"></div>

<script>
function toggleMenu() {
    const nav = document.querySelector('nav');
    const overlay = document.getElementById('menu-overlay');
    nav.classList.toggle('active');
    overlay.style.display = nav.classList.contains('active') ? 'block' : 'none';
}
</script>