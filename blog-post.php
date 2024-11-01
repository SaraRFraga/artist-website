<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Arte de la Abstracción - Artist Art Blog</title>
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

        <main id="content-blog-post" class="whole-blog-detail">
            <article class="blog-detail-post">
                <h2 class="blog-detail-title">El Arte de la Abstracción</h2>
                <p class="blog-detail-date">Publicado el 15 de Junio, 2023</p>
                <img src="https://picsum.photos/800/400?random=1" alt="Arte abstracto" class="blog-detail-image">
                <div class="blog-detail-description">
                    <p class="blog-detail-description-paragraph">El arte abstracto es una forma de expresión que desafía las convenciones tradicionales de la representación visual. En lugar de retratar objetos reconocibles del mundo real, los artistas abstractos utilizan color, forma, línea y textura para crear composiciones que evocan emociones y estimulan la imaginación del espectador.</p>
                    <p class="blog-detail-description-paragraph">Uno de los principios fundamentales del arte abstracto es la libertad de interpretación. Cada espectador puede encontrar un significado único en una obra abstracta, basado en sus propias experiencias y percepciones. Esta interacción personal entre la obra y el observador es lo que hace que el arte abstracto sea tan poderoso y duradero.</p>
                    <p class="blog-detail-description-paragraph">Para crear arte abstracto efectivo, es importante considerar los siguientes elementos:</p>
                    <ul class="blog-detail-description-characteristic-list">
                        <li>Composición: La disposición de los elementos en el lienzo es crucial para guiar el ojo del espectador y crear un sentido de equilibrio o tensión.</li>
                        <li>Color: El uso del color puede evocar emociones específicas y crear profundidad en una obra abstracta.</li>
                        <li>Textura: La textura añade una dimensión táctil a la obra, incluso cuando solo se puede apreciar visualmente.</li>
                        <li>Movimiento: El uso de líneas y formas puede crear una sensación de movimiento dentro de la obra estática.</li>
                    </ul>
                    <p class="blog-detail-description-paragraph">Al explorar estos principios en tu propia obra, puedes comenzar a desarrollar un estilo abstracto único que refleje tu visión artística personal. Recuerda, en el arte abstracto no hay reglas estrictas - la clave es experimentar y encontrar lo que resuena contigo y con tu audiencia.</p>
                </div>
            </article>
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