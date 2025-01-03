Object.keys(carousels).forEach(id => showSlides(id, carousels[id]));

const carousels_2 = {
    carousel: 1,
};
document.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll('.text-container');

    containers.forEach(container => {
        const readMore = container.querySelector('.read-more');
        const text = container.querySelector('.text');

        readMore.addEventListener('click', () => {
            container.classList.toggle('expanded');
            readMore.textContent = container.classList.contains('expanded')
                ? 'Згорнути'
                : 'Читати далі';
        });
    });
});
