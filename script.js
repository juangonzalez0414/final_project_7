// ==== Carrusel ====
const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let index = 0;

// Obtenemos el ancho real del contenedor del carrusel
let slideWidth = slides.parentElement.clientWidth;

function showSlide(i) {
  index = (i + images.length) % images.length;
  slides.style.transform = `translateX(${-index * slideWidth}px)`;
}

// Botones de navegación
prev.addEventListener('click', () => showSlide(index - 1));
next.addEventListener('click', () => showSlide(index + 1));

// ==== Carrusel automático ====
let autoSlide = setInterval(() => showSlide(index + 1), 5000);

// Pausar carrusel cuando el mouse esté encima
slides.addEventListener("mouseenter", () => {
  clearInterval(autoSlide);
});

// Reanudar carrusel cuando el mouse salga
slides.addEventListener("mouseleave", () => {
  autoSlide = setInterval(() => showSlide(index + 1), 5000);
});

// ==== Control con teclado ====
document.addEventListener("keydown", (e) => {
  if (e.key === "ArrowRight") {
    showSlide(index + 1);
  }

  if (e.key === "ArrowLeft") {
    showSlide(index - 1);
  }
});

// ==== Ajuste al cambiar tamaño de pantalla ====
window.addEventListener("resize", () => {
  slideWidth = slides.parentElement.clientWidth;
  slides.style.transform = `translateX(${-index * slideWidth}px)`;
});

// ==== Scroll suave en la navegación ====
document.querySelectorAll('nav ul li a').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href').substring(1);
    const targetSection = document.getElementById(targetId);

    window.scrollTo({
      top: targetSection.offsetTop - 60,
      behavior: 'smooth'
    });
  });
});