// public/js/dashboard.js

document.addEventListener('DOMContentLoaded', function () {
    // Verifica que el script está funcionando
    console.log('Script cargado correctamente');
    alert('¡Hola desde dashboard.js!');

    // Maneja el toggle del menú en dispositivos móviles
    const mobileScreen = window.matchMedia("(max-width: 990px)");

    // Maneja el clic en los elementos con clase .dashboard-nav-dropdown-toggle
    document.querySelectorAll('.dashboard-nav-dropdown-toggle').forEach(function (element) {
        element.addEventListener('click', function () {
            this.closest(".dashboard-nav-dropdown")
                .classList.toggle("show")
                .querySelectorAll(".dashboard-nav-dropdown")
                .forEach(function (dropdown) {
                    dropdown.classList.remove("show");
                });

            this.parentElement
                .siblings()
                .forEach(function (sibling) {
                    sibling.classList.remove("show");
                });
        });
    });

    // Maneja el toggle del menú en dispositivos móviles
    const menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            if (mobileScreen.matches) {
                document.querySelector(".dashboard-nav").classList.toggle("mobile-show");
            } else {
                document.querySelector(".dashboard").classList.toggle("dashboard-compact");
            }
        });
    } else {
        console.error('Element .menu-toggle no encontrado');
    }
});
