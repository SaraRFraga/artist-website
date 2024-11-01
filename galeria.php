<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Artist Art</title>
    <link rel="stylesheet" href="styles.css">
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
            <section id="gallery" class="gallery">
                <h1>Galería de Arte</h1>

                <div class="gallery-barr">
                    <div>
                        <button class="gallery-link">Más recientes</button>
                        <button class="gallery-link">Más populares</button>
                    </div>
                    <div>
                        <select class="gallery-select">
                            <option>Todas las categorías</option>
                            <option>Abstracto</option>
                            <option>Minimalista</option>
                            <option>Geométrico</option>
                        </select>
                        <select class="gallery-select">
                            <option>Todos los años</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="collection"><!-- falta hacerlo responsive con media queries -->
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=1" alt="Obra 1" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Abstracción en Azul</h3>
                                <p class="piece-p">2023</p>
                                <p class="piece-p">Colección: Sueños Líquidos</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=2" alt="Obra 2" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Geometría Sublime</h3>
                                <p class="piece-p">2022</p>
                                <p class="piece-p">Colección: Formas Etéreas</p>
                            </div>

                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=3" alt="Obra 3" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Esencia Minimalista</h3>
                                <p class="piece-p">2023</p>
                                <p class="piece-p">Colección: Silencio Visual</p>
                            </div>
                            
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=4" alt="Obra 4" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Composición en Rojo</h3>
                                <p class="piece-p">2021</p>
                                <p class="piece-p">Colección: Pasión Cromática</p>
                            </div>

                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=5" alt="Obra 5" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Formas Orgánicas</h3>
                                <p class="piece-p">2022</p>
                                <p class="piece-p">Colección: Naturaleza Abstracta</p>
                            </div>

                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="detail.php">
                            <img src="https://picsum.photos/600/400?random=6" alt="Obra 6" class="gallery-piece">
                            <div class="gallery-item-overlay">
                                <h3 class="piece-tittle">Luz y Sombra</h3>
                                <p class="piece-p">2023</p>
                                <p class="piece-p">Colección: Claroscuro Moderno</p>
                            </div>

                        </a>
                    </div>
                </div>

                <div id="load-more-section" class="flex">
                    <button class="load-more-btn">Cargar más obras</button>
                </div>
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
    <script src="gallery.js"></script>
</body>
</html>