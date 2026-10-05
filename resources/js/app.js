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

        const closeSubmenus = (exceptItem = null) => {
            mobileMenu.querySelectorAll('.site-nav__item.is-open').forEach((item) => {
                if (item === exceptItem) {
                    return;
                }

                item.classList.remove('is-open');
                delete item.dataset.openByClick;
                item.querySelector('[data-submenu-trigger]')?.setAttribute('aria-expanded', 'false');
            });
        };

        menuButton.addEventListener('click', () => {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                closeSubmenus();
            }

            mobileMenu.classList.toggle('is-open', !isExpanded);
            menuButton.setAttribute('aria-expanded', String(!isExpanded));
        });

        mobileMenu.querySelectorAll('[data-submenu-trigger]').forEach((submenuTrigger) => {
            if (!(submenuTrigger instanceof HTMLAnchorElement)) {
                return;
            }

            const submenuItem = submenuTrigger.closest('.site-nav__item');

            if (!submenuItem) {
                return;
            }

            submenuTrigger.addEventListener('click', (event) => {
                const isPinnedOpen = submenuItem.dataset.openByClick === 'true';

                if (window.matchMedia('(max-width: 900px)').matches && !isPinnedOpen) {
                    event.preventDefault();
                    closeSubmenus(submenuItem);
                    submenuItem.dataset.openByClick = 'true';
                    submenuItem.classList.add('is-open');
                    submenuTrigger.setAttribute('aria-expanded', 'true');

                    return;
                }

                delete submenuItem.dataset.openByClick;
            });

            submenuItem.addEventListener('pointerenter', (event) => {
                if (event.pointerType === 'touch') {
                    return;
                }

                submenuItem.classList.add('is-open');
                submenuTrigger.setAttribute('aria-expanded', 'true');
            });

            submenuItem.addEventListener('pointerleave', (event) => {
                if (event.pointerType === 'touch' || submenuItem.matches(':focus-within')) {
                    return;
                }

                if (submenuItem.dataset.openByClick === 'true') {
                    return;
                }

                submenuItem.classList.remove('is-open');
                submenuTrigger.setAttribute('aria-expanded', 'false');
            });

            submenuItem.addEventListener('focusin', () => {
                submenuItem.classList.add('is-open');
                submenuTrigger.setAttribute('aria-expanded', 'true');
            });

            submenuItem.addEventListener('focusout', (event) => {
                if (event.relatedTarget instanceof Node && submenuItem.contains(event.relatedTarget)) {
                    return;
                }

                if (submenuItem.matches(':hover')) {
                    return;
                }

                if (submenuItem.dataset.openByClick === 'true') {
                    return;
                }

                submenuItem.classList.remove('is-open');
                submenuTrigger.setAttribute('aria-expanded', 'false');
            });
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', (event) => {
                if (event.defaultPrevented) {
                    return;
                }

                closeMenu();
                closeSubmenus();
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeMenu();
                closeSubmenus();
            }
        });
    }

    const productGrid = document.querySelector('[data-product-card-grid]');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (productGrid) {
        const productCards = Array.from(productGrid.querySelectorAll('[data-product-card]'));
        const productDetails = document.querySelectorAll('[data-product-details]');
        const productButtons = productGrid.querySelectorAll('[data-product-select]');
        const desktopLayout = window.matchMedia('(min-width: 640px)');
        const panelHideTimers = new Map();
        let selectedProductCard;

        const arrangeCards = (selectedCard) => {
            const previousPositions = new Map(
                productCards.map((card) => [card, card.getBoundingClientRect()]),
            );
            const otherCards = productCards.filter((card) => card !== selectedCard);
            const cardOrder = desktopLayout.matches
                ? [otherCards[0], selectedCard, otherCards[1]]
                : [selectedCard, ...otherCards];

            productGrid.replaceChildren(...cardOrder);

            if (!prefersReducedMotion) {
                requestAnimationFrame(() => {
                    productCards.forEach((card) => {
                        const previousPosition = previousPositions.get(card);

                        if (!previousPosition) {
                            return;
                        }

                        const currentPosition = card.getBoundingClientRect();
                        const offsetX = previousPosition.left - currentPosition.left;
                        const offsetY = previousPosition.top - currentPosition.top;

                        if (offsetX !== 0 || offsetY !== 0) {
                            card.animate([
                                { translate: `${offsetX}px ${offsetY}px` },
                                { translate: '0px 0px' },
                            ], {
                                duration: 460,
                                easing: 'cubic-bezier(0.2, 0.75, 0.25, 1)',
                            });
                        }
                    });
                });
            }
        };

        const selectProduct = (productId) => {
            const selectedCard = productCards.find((card) => card.dataset.productCard === productId);

            if (!selectedCard) {
                return;
            }

            if (selectedCard === selectedProductCard) {
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
                const existingTimer = panelHideTimers.get(panel);

                if (existingTimer) {
                    window.clearTimeout(existingTimer);
                    panelHideTimers.delete(panel);
                }

                panel.classList.remove('is-leaving');

                if (panel.dataset.productDetails === productId) {
                    panel.hidden = false;

                    return;
                }

                if (panel.hidden || prefersReducedMotion) {
                    panel.hidden = true;

                    return;
                }

                panel.classList.add('is-leaving');
                const timer = window.setTimeout(() => {
                    if (selectedProductCard?.dataset.productCard !== panel.dataset.productDetails) {
                        panel.hidden = true;
                        panel.classList.remove('is-leaving');
                    }

                    panelHideTimers.delete(panel);
                }, 180);

                panelHideTimers.set(panel, timer);
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

        const requestedProductPanel = Array.from(productDetails).find((panel) => panel.id === window.location.hash.slice(1));

        selectProduct(requestedProductPanel?.dataset.productDetails ?? productCards[0]?.dataset.productCard);

        if (requestedProductPanel) {
            window.requestAnimationFrame(() => requestedProductPanel.scrollIntoView());
        }

        window.addEventListener('hashchange', () => {
            const targetPanel = Array.from(productDetails).find((panel) => panel.id === window.location.hash.slice(1));

            if (!targetPanel?.dataset.productDetails) {
                return;
            }

            selectProduct(targetPanel.dataset.productDetails);
            window.requestAnimationFrame(() => targetPanel.scrollIntoView());
        });
    }

    const faqItems = document.querySelectorAll('.home-faq__list details');

    faqItems.forEach((faqItem) => {
        const summary = faqItem.querySelector('summary');
        const answer = faqItem.querySelector('[data-faq-answer]');

        if (!(summary instanceof HTMLElement) || !(answer instanceof HTMLElement)) {
            return;
        }

        const faqAnimations = new WeakMap();
        faqItem.dataset.faqOpen = String(faqItem.open);
        summary.setAttribute('aria-controls', answer.id);
        summary.setAttribute('aria-expanded', String(faqItem.open));

        summary.addEventListener('click', (event) => {
            event.preventDefault();

            const shouldOpen = faqItem.dataset.faqOpen !== 'true';
            const currentHeight = answer.getBoundingClientRect().height;
            const currentOpacity = Number.parseFloat(getComputedStyle(answer).opacity);
            const startOpacity = currentHeight === 0
                ? 0
                : Number.isFinite(currentOpacity) ? currentOpacity : 1;

            faqAnimations.get(answer)?.cancel();
            faqItem.dataset.faqOpen = String(shouldOpen);
            summary.setAttribute('aria-expanded', String(shouldOpen));

            if (prefersReducedMotion) {
                faqItem.open = shouldOpen;

                return;
            }

            if (shouldOpen) {
                faqItem.open = true;
            }

            const targetHeight = shouldOpen ? answer.scrollHeight : 0;
            const animation = answer.animate([
                {
                    height: `${currentHeight}px`,
                    opacity: startOpacity,
                    transform: shouldOpen ? 'translateY(5px)' : 'translateY(0)',
                },
                {
                    height: `${targetHeight}px`,
                    opacity: shouldOpen ? 1 : 0,
                    transform: 'translateY(0)',
                },
            ], {
                duration: 320,
                easing: 'cubic-bezier(0.2, 0.75, 0.25, 1)',
            });

            faqAnimations.set(answer, animation);
            animation.onfinish = () => {
                if (faqItem.dataset.faqOpen !== String(shouldOpen)) {
                    return;
                }

                if (!shouldOpen) {
                    faqItem.open = false;
                }

                faqAnimations.delete(answer);
            };
        });
    });

    const revealElements = document.querySelectorAll('[data-reveal]');

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