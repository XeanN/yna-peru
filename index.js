document.addEventListener('DOMContentLoaded', function() {
    // Ejemplo de un carrusel de imágenes simple
    let images = ['imagen1.jpg', 'imagen2.jpg', 'imagen3.jpg'];
    let currentIndex = 0;
    let heroSection = document.querySelector('.hero');

    setInterval(() => {
        heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length;
    }, 3000);
});
