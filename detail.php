<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obra - Artist Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style-detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="site-container">
        <header class="whole-header ">
            <button id="menuToggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 id="logo" class="header-logo">Artist Art</h1>
            <nav id="mainNav" class="header-icons"> 
                <ul class="link-list">
                    <li><a href="index.php" class="nav-link">Inicio</a></li>
                    <li><a href="galeria.php" class="nav-link">Galería</a></li>
                    <li><a href="eventos.php" class="nav-link">Eventos</a></li>
                    <li><a href="blog.php" class="nav-link">Blog</a></li>
                    <li><a href="about.php" class="nav-link">Sobre Mí</a></li>
                </ul>
            </nav>
        </header>

        <main id="content-artwork" class="main-detail"><br>
            <a class="back-gallery" href="galeria.php">< Volver a galería</a><br><br>
            <div class="detail-image-and-description">
                <div class="detail-image-and-description-subdivision">
                    <div class="detail-image">
                        <img src="https://picsum.photos/600/800" alt="Obra de arte" class="">
                    </div>
                    <div class="detail-description">
                        <h1 class="detail-description-title">Eventos en movimiento</h1>
                        <p class="detail-description-year">Año: 2023</p>
                        <p class="detail-description-collection">Colección: Mujeres</p>
                        <p class="detail-description-explanation">
                            Esta obra explora la intersección entre el color y la emoción, utilizando trazos audaces y una paleta vibrante para evocar una sensación de movimiento y energía. Inspirada en los paisajes urbanos y la naturaleza, la pieza invita al espectador a sumergirse en un mundo de formas abstractas y tonalidades armoniosas.
                        </p>
                        <p class="detail-description-explanation">
                            A través de capas superpuestas y texturas ricas, la obra crea una profundidad visual que recompensa la observación prolongada. Cada elemento ha sido cuidadosamente compuesto para crear un equilibrio dinámico, reflejando la complejidad y la belleza de nuestro mundo interior y exterior.
                        </p>
                        <div class="detail-description-paint-measures">
                            <p><strong>Técnica:</strong> Acrílico sobre lienzo</p>
                            <p><strong>Dimensiones:</strong> 100cm x 80cm</p>
                            <p><strong>Exposiciones:</strong> Galería Moderna (Madrid, 2023), Bienal de Arte Contemporáneo (Barcelona, 2022)</p>
                        </div>
                        <br><br>
                        <a class="detail-description-add-to-cart load-more-btn" href="">Añadir al carrito</a> <a class="detail-description-buy link-white load-more-btn" href="">Comprar</a>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer-contact">
            <p>&copy; 2023 Artist Art. Todos los derechos reservados.
                <a class="contact-footer" href="https://www.instagram.com/artistart" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="contact-footer" href="https://www.facebook.com/artistart" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                </a>
            </p>
        </footer>
    </div>
    <script src="detail.js"></script>
</body>
</html>