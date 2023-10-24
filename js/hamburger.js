document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.querySelector('#side_button');
    const slideMenu = document.querySelector('#slide_menu');

    hamburgerMenu.addEventListener('click', function () {
        slideMenu.classList.toggle('active');
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('#side_button') && !event.target.closest('#slide_menu')) {
            slideMenu.classList.remove('active');
        }
    });
});