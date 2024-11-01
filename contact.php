<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Artist Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-contact.css">
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
        <body>

              <main id="content-index" class="main-contact">
                <div class="container">
                    <div class="about-title">
                        <h1 id="artist-title-letter">Contacto</h1>
                    </div>
                    <div class="artist-info contact-info">
                        <ul class="text-center">
                          <li class="mail"><a href="mailto:tu_correo@ejemplo.com" class="contact-email">artistla.artist@ejemplo.com</a></li>
                          <li class="whatsapp">+34 685 342 545</li>
                          <li class="instagram"><a href="instagram.com" class="contact-email">@ArtistEnInstagram</a></li>
                        </ul>
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
        <script src="gallery.js"></script>
        </body>