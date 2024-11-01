<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de mi - Artist Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style-about.css">
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

        <main id="content-index">
            <div class="container">
                <div class="artist-title about">
                    <h1 id="artist-title-letter">Sobre la Artista</h1>
                </div>
                <div class="artist-info">
                    <div class="artist-image">
                        <img src="/placeholder.svg?height=256&width=256" alt="Retrato de la artista" width="256" height="256">
                    </div>
                    <div class="artist-description">
                        <p>
                            Soy una apasionada pintora con más de 15 años de experiencia en el mundo del arte. Mi trabajo se centra en capturar la belleza de la naturaleza y las emociones humanas a través de vibrantes colores y trazos expresivos.
                        </p>
                        <p>
                            Desde muy joven, me fascinó el poder del arte para transmitir sentimientos y contar historias. Esta pasión me llevó a estudiar Bellas Artes en la Universidad de [Nombre], donde perfeccioné mis técnicas y desarrollé mi estilo único.
                        </p>
                        <p>
                            A lo largo de mi carrera, he tenido el privilegio de exponer mis obras en galerías de renombre tanto a nivel nacional como internacional. Cada pieza que creo es una ventana a mi alma y una invitación para que el espectador explore su propio mundo interior.
                        </p>
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
    <script src="gallery.js"></script>
</body>
</html>