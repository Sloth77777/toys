let slideIndex = 0;

function plusSlides(n) {
    const carousel = document.getElementById('carousel1');
    const slides = carousel.querySelectorAll('.post'); // Получаем все слайды внутри карусели

    console.log(slides.length);  // Проверьте, что все слайды правильно загружены

    slideIndex += n;

    // Проверка на границы
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    } else if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    // Скрываем все слайды
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Показываем текущий слайд
    slides[slideIndex].style.display = "block";
}

// Инициализация первого слайда
document.addEventListener("DOMContentLoaded", function() {
    console.log("JS загружен!");
    plusSlides(0);  // Показываем первый слайд при загрузке
});
