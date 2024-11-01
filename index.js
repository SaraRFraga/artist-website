// script.js
document.addEventListener('DOMContentLoaded', (event) => {
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');
    // const galleryToggle = document.getElementById('galleryToggle');
    const galleryDropdown = document.getElementById('galleryDropdown');
    const heroText = document.getElementById('heroText');
    const slider = document.querySelector('.slider');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');

    const heroTexts = [
        "Expresión Visual",
        "Colores, Formas",
        "Esencia Artística"
    ];

    let currentHeroText = 0;
    let currentSlide = 0;

    menuToggle.addEventListener('click', () => {
        mainNav.classList.toggle('hidden');
    });

    // galleryToggle.addEventListener('click', () => {
    //     galleryDropdown.classList.toggle('hidden');
    // });

    setInterval(() => {
        currentHeroText = (currentHeroText + 1) % heroTexts.length;
        document.getElementById("hero-title").innerText = heroTexts[currentHeroText];
    }, 5000);

    function moveSlider(direction) {
        const slides = document.querySelectorAll('.slider-image');
        const slidesToShow = window.innerWidth <= 900 ? 1 : window.innerWidth <= 1024 ? 2 : 4;
        currentSlide = (currentSlide + direction + slides.length) % (slides.length - slidesToShow + 1);
        slider.style.transform = `translateX(-${currentSlide * (100 / slidesToShow)}%)`;
    }

    prevButton.addEventListener('click', () => moveSlider(1));
    nextButton.addEventListener('click', () => moveSlider(-1));

    // Responsive behavior
    function handleResponsive() {
        if (window.innerWidth > 900) {
            mainNav.classList.remove('hidden');
        } else {
            mainNav.classList.add('hidden');
        }
        moveSlider(0); // Reset slider position
    }

    window.addEventListener('resize', handleResponsive);
    handleResponsive();
});

document.addEventListener("DOMContentLoaded", () => {
    // primero: recoger el height de la pantalla, para saber cuantos elementos añadir
    let windowHeight = window.innerHeight;
    // funcion 1: recoger cuan lejos están de arriba de la página los elementos
    let homeToTop = document.getElementById("home").getBoundingClientRect().top + window.scrollY;
    let galleryToTop = document.getElementById("gallery").getBoundingClientRect().top + window.scrollY;

    console.log(homeToTop);
    console.log(galleryToTop);
    console.log(windowHeight);

    document.getElementById("content-index").classList.add("showAnimation");
    document.getElementById("content-index").classList.remove("invisible");
});
