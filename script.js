// ==== Carrusel ====
const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let index = 0;

// Obtenemos el ancho real del contenedor del carrusel para asegurar un centrado perfecto.
const slideWidth = slides.parentElement.clientWidth;

function showSlide(i) {
  index = (i + images.length) % images.length;
  // Usamos el ancho dinámico para calcular el desplazamiento.
  slides.style.transform = `translateX(${-index * slideWidth}px)`;
}

prev.addEventListener('click', () => showSlide(index - 1));
next.addEventListener('click', () => showSlide(index + 1));

// Carrusel automático cada 3 segundos
setInterval(() => showSlide(index + 1), 5000);

// ==== Scroll suave en la navegación ====
document.querySelectorAll('nav ul li a').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    const targetSection = document.getElementById(targetId);

    window.scrollTo({
      top: targetSection.offsetTop - 60, // Compensa header fijo
      behavior: 'smooth'
    });
  });
});
