<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Artist Art</title>
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

        <main id="content-events">

            <section id="events" class="events-section">
                <h2 class="events-tittle">Próximos Eventos</h2>
                <div id="event-container" class="event-container">
                    <div id="event-bg" class="event-bg">
                        <div id="event-image-bg" class="rounded-lg one">
                            <div id="event-blackout">
                                <h3 class="event-tittle">Exposición en Galería Moderna</h3>
                                <p>15 de Julio, 2023</p>
                                <p>Madrid</p>
                            </div>
                        </div>
                    </div>
                    <div id="event-bg" class="event-bg ">
                        <div id="event-image-bg" class="rounded-lg two">
                            <div id="event-blackout">
                                <h3 class="event-tittle">Taller de Arte Minimalista</h3>
                                <p>22 de Agosto, 2023</p>
                                <p>Barcelona</p>
                            </div>
                        </div>
                    </div>
                    <div id="event-bg" class="event-bg ">
                        <div id="event-image-bg" class="rounded-lg three">
                            <div id="event-blackout">
                                <h3 class="event-tittle">Charla: El Arte en la Era Digital</h3>
                                <p>10 de Septiembre, 2023</p>
                                <p>Valencia</p>
                            </div>
                        </div>
                    </div>
                    <div id="event-bg" class="event-bg">
                        <div id="event-image-bg" class="rounded-lg four">
                            <div id="event-blackout">
                                <h3 class="event-tittle">Exposición en Galería Del Bosque</h3>
                                <p>17 de Agosto, 2023</p>
                                <p>País Vasco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="past-events" class="events-section">
                <h2 class="events-tittle">Eventos Pasados</h2>
                    <div id="past-event-container" class="past-event-container">
                    <div class="past-event-grid">
                        <div id="event-image-bg" class="past-event-image-bg"> 
                            <div class="past-event-item">
                                <div id="event-blackout-past">
                                <h3 class="event-tittle">Retrospectiva "Una Década de Color"</h3>
                                <p>5 de Marzo, 2023</p>
                                <p>Museo de Arte Contemporáneo, Valencia</p>
                                </div>
                            </div>
                        </div>
                        <div id="event-image-bg" class="past-event-image-bg">
                          <div class="past-event-item">
                                <div id="event-blackout-past">
                                    <h3 class="event-tittle">Charla: "El Arte en la Nueva Era Digital"</h3>
                                    <p>20 de Enero, 2023</p>
                                    <p>Universidad de Bellas Artes, Sevilla</p>
                                </div>
                            </div>
                        </div>
                        <div id="event-image-bg" class="past-event-image-bg">
                            <div class="past-event-item">
                                <div id="event-blackout-past">
                                    <h3 class="event-tittle">Exposición Colectiva "Nuevas Voces"</h3>
                                    <p>10 de Noviembre, 2022</p>
                                    <p>Galería Vanguardia, Bilbao</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>                  
            </section>

            <section id="event-contact" class="events-section">
                <div class="event-contact-contact">
                    <h2 class="events-tittle">¿Interesado en organizar un evento?</h2>
                    <form>
                        <p>Para cualquier consulta sobre eventos, <a href="contact.html">escríbenos para estar en contacto.</a></p>
                    </form>
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
    <script src="events.js"></script>
</body>
</html>