document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.querySelector('.sidebar'); // ← declaración correcta
    const hamburgerMenu = document.getElementById('hamburgerMenu');

    if (menuToggle && sidebar && hamburgerMenu) {
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-open');
            hamburgerMenu.style.display =
                hamburgerMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (event) => {
            const isClickInside = menuToggle.contains(event.target) || hamburgerMenu.contains(event.target);
            if (!isClickInside) {
                hamburgerMenu.style.display = 'none';
            }
        });
    } else {
        console.error("No se encontraron algunos elementos necesarios para el menú");
    }
});
