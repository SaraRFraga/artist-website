<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Art</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        <main id="content-index" class="invisible">
            <section id="home" class="whole-banner">
                <div class="banner-first-container">
                    <div id="hero-letters" class="banner-second-container">
                        <div id="heroText" class="banner-text">
                            <h2 id="hero-title" class="banner-title">Arte Conceptual</h2>
                            <p class="banner-description">Explorando la esencia a través del color y la forma</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="whole-gallery">
                <h2 class="gallery-title">Galería</h2>
                <div class="gallery-slider-container">
                    <div class="slider">
                        <img src="https://picsum.photos/400/400?random=1" alt="Arte 1" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=2" alt="Arte 2" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=3" alt="Arte 3" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=4" alt="Arte 4" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=5" alt="Arte 5" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=6" alt="Arte 6" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=7" alt="Arte 7" class="slider-image">
                        <img src="https://picsum.photos/400/400?random=8" alt="Arte 8" class="slider-image">
                    </div>
                    <button class="slider-button prev">&lt;</button>
                    <button class="slider-button next">&gt;</button>
                </div>
            </section>

            <section id="about" class="whole-about">
                <div class="about-container">
                    <h2 class="about-title">Sobre Mí</h2>
                    <p class="about-description">
                        Soy una artista minimalista apasionada por la simplicidad y la expresión a través del color. 
                        Mi trabajo explora la esencia de las formas y las emociones, buscando transmitir profundidad 
                        con los elementos más básicos.
                    </p>
                    <p>
                        Inspirada por la naturaleza y la geometría, mis pinturas invitan al espectador a reflexionar 
                        y encontrar su propia interpretación en cada pieza.
                    </p>
                </div>
            </section>

            <section id="video" class="whole-video">
                <div class="video-glass-effect"></div>
                <div class="video-first-container">
                    <div class="video-second-container">
                        <div class="video-third-container">
                            <video id="intro-video" controls>
                                <source src="video/sample-1.webm" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="whole-testimonials">
                <h2 class="testimonials-title">Opiniones de mis obras...</h2>
                <div >
                    <div id="opiniones-index"  class="testimonials-index">
                        <div class="testimonial-text">
                            <p class="testimonials-text-description">"El arte de Artist es verdaderamente inspirador. Cada pieza cuenta una historia única."</p>
                            <p class="testimonial-text-author">- Ana G.</p>
                        </div>
                        <div class="testimonial-text">
                            <p class="testimonials-text-description">"La simplicidad y profundidad de sus obras son cautivadoras. Un talento excepcional."</p>
                            <p class="testimonial-text-author">- Carlos M.</p>
                        </div>
                        <div class="testimonial-text">
                            <p class="testimonials-text-description>">Artist tiene el don de transmitir emociones complejas a través de formas simples. Impresionante."</p>
                            <p class="testimonial-text-author">- Laura P.</p>
                        </div>
                    </div>
                </div>
                <h2 class="testimonial-thanks-letter">... Muchas gracias a todos por compartir sus experiencias.</h2>
            </section>
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
    <script src="index.js"></script>
</body>
</html>