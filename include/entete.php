<header>
    <div class="burger-menu" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="logo-central">
        <a href="index.php">
            <img src="img/logo.png" alt="MechaLab Logo">
        </a>
    </div>

    <div class="panier-link">
        <a href="panier.php">🛒 Panier</a>
    </div>
</header>

<script>
function toggleMenu() {
    document.querySelector('nav').classList.toggle('active');
}
</script>