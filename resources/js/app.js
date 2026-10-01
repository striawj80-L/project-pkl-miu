document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btnAlert');
    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.getElementById('primary-navigation');

    if (btn) {
        btn.addEventListener('click', () => {
            alert('Js telah diaktifkan menyala on mode on');
        });
    }

    if (menuButton instanceof HTMLButtonElement && mobileMenu) {
        const closeMenu = () => {
            mobileMenu.classList.remove('is-open');
            menuButton.setAttribute('aria-expanded', 'false');
        };

        menuButton.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

            mobileMenu.classList.toggle('is-open', !isExpanded);
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

    const productGrid = document.querySelector('[data-product-card-grid]');

    if (productGrid) {
        const productCards = Array.from(productGrid.querySelectorAll('[data-product-card]'));
        const productDetails = document.querySelectorAll('[data-product-details]');
        const productButtons = productGrid.querySelectorAll('[data-product-select]');
        const desktopLayout = window.matchMedia('(min-width: 640px)');
        let selectedProductCard;

        const arrangeCards = (selectedCard) => {
            const otherCards = productCards.filter((card) => card !== selectedCard);
            const cardOrder = desktopLayout.matches
                ? [otherCards[0], selectedCard, otherCards[1]]
                : [selectedCard, ...otherCards];

            productGrid.replaceChildren(...cardOrder);
        };

        const selectProduct = (productId) => {
            const selectedCard = productCards.find((card) => card.dataset.productCard === productId);

            if (!selectedCard) {
                return;
            }

            selectedProductCard = selectedCard;
            arrangeCards(selectedCard);

            productCards.forEach((card) => {
                const isSelected = card === selectedCard;
                const button = card.querySelector('[data-product-select]');

                card.classList.toggle('is-selected', isSelected);
                button?.setAttribute('aria-pressed', String(isSelected));
            });

            productDetails.forEach((panel) => {
                panel.hidden = panel.dataset.productDetails !== productId;
            });
        };

        productButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const productId = button.dataset.productSelect;

                if (productId) {
                    selectProduct(productId);
                }
            });
        });

        desktopLayout.addEventListener('change', () => {
            if (selectedProductCard) {
                arrangeCards(selectedProductCard);
            }
        });

        selectProduct(productCards[0]?.dataset.productCard);
    }

    const revealElements = document.querySelectorAll('[data-reveal]');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (revealElements.length > 0 && 'IntersectionObserver' in window && !prefersReducedMotion) {
        document.documentElement.classList.add('has-scroll-reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -48px 0px',
        });

        revealElements.forEach((element) => {
            element.classList.add('will-reveal');
            revealObserver.observe(element);
        });
    }
});