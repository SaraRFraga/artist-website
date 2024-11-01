<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Art - Blog</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-contact.css">
    <link rel="stylesheet" href="style-about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="contenedor-sitio">
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

        <main id="contenido-blog" class="whole-blog">
            <div class="blog-container">
                <div class="blog-image-and-title">
                    <h1 id="artist-title-letter">Blog</h1>
                </div>
            <br><br>
            <div class="blog-list">
                <article class="blog-article">
                    <h3 class="blog-article-title">El Arte de la Abstracción</h3>
                    <p class="blog-article-date">Publicado el 15 de Junio, 2023</p>
                    <p class="blog-article-description">Explorando los principios fundamentales del arte abstracto y cómo aplicarlos en tu propia obra...</p>
                    <a href="blog-post.html" class="blog-article-read-more">Leer más</a>
                </article>

                <hr class="blog-article-separation">

                <article class="blog-article">
                    <h3 class="blog-article-title">Técnicas de Pintura Contemporánea</h3>
                    <p class="blog-article-date">Publicado el 2 de Julio, 2023</p>
                    <p class="blog-article-description">Descubre las últimas tendencias en técnicas de pintura y cómo están revolucionando el mundo del arte...</p>
                    <a href="blog-post.html" class="blog-article-read-more">Leer más</a>
                </article>

                <hr class="blog-article-separation">

                <article class="blog-article">
                    <h3 class="blog-article-title">El Impacto del Arte Digital</h3>
                    <p class="blog-article-date">Publicado el 20 de Julio, 2023</p>
                    <p class="blog-article-description">Analizamos cómo la tecnología está transformando la creación y percepción del arte en la era digital...</p>
                    <a href="blog-post.html" class="blog-article-read-more">Leer más</a>
                </article>
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
    <script src="blog.js"></script>
</body>
</html>