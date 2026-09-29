document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btnAlert');
    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.getElementById('mobile-menu');

    if (btn) {
        btn.addEventListener('click', () => {
            alert('Js telah diaktifkan menyala on mode on');
        });
    }

    if (menuButton instanceof HTMLButtonElement && mobileMenu) {
        const closeMenu = () => {
            mobileMenu.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
        };

        menuButton.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

            mobileMenu.classList.toggle('hidden', isExpanded);
            menuButton.setAttribute('aria-expanded', String(!isExpanded));
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeMenu();
            }
        });
    }
});