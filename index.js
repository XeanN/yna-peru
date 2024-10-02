document.addEventListener('DOMContentLoaded', function() {
    // Carrusel de imágenes de fondo
    let images = ['imagen1.jpg', 'imagen2.jpg', 'imagen3.jpg'];
    let currentIndex = 0;
    let heroSection = document.querySelector('.hero');

    setInterval(() => {
        heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length;
    }, 3000);
});

function cambiarIdioma(idioma) {
    if (idioma === 'es') {
        // Mostrar contenido en español
        document.getElementById('blog-es').style.display = 'block';
        document.getElementById('blog-en').style.display = 'none';

        // Cambiar textos a español
        document.getElementById('inicio-link').innerText = "Inicio";
        document.getElementById('sobremi-link').innerText = "Sobre mí";
        document.getElementById('blog-link').innerText = "Blog";
        
        document.getElementById('hero-text').innerText = "Una Acción a la Vez";
        
        document.getElementById('sobremi-title').innerText = "Sobre mí";
        document.getElementById('sobremi-text').innerText = "Mi nombre es Yna Cely Monteza Rodriguez...";

        document.getElementById('blog-title').innerText = "Mi orientación en Máncora";
    } else if (idioma === 'en') {
        // Mostrar contenido en inglés
        document.getElementById('blog-es').style.display = 'none';
        document.getElementById('blog-en').style.display = 'block';

        // Cambiar textos a inglés
        document.getElementById('inicio-link').innerText = "Home";
        document.getElementById('sobremi-link').innerText = "About Me";
        document.getElementById('blog-link').innerText = "Blog";
        
        document.getElementById('hero-text').innerText = "One Action at a Time";
        
        document.getElementById('sobremi-title').innerText = "About Me";
        document.getElementById('sobremi-text').innerText = "My name is Yna Cely Monteza Rodriguez...";
        
        document.getElementById('blog-title').innerText = "My Orientation in Máncora";
    }
}
