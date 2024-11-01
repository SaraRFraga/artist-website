Vue.component('hola-mundo', {
    props: ['mensaje'],
    template: `
        <div class="hola-mundo">
            <h1>{{ mensaje }}</h1>
        </div>
    `,
});



Vue.component('header-artist', {
    template: `
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
    `,
});

Vue.component('galery-carousel', {
    template: `
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
    `,
});

Vue.component('about-me', {
    template: `
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
    `,
});



new Vue({
    el: '#app'
});