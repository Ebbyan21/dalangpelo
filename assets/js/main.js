/* =========================================
   MAIN JS — Dalang Pelo
========================================= */
document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        const handleScroll = () => {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 80);
        };
        window.addEventListener('load', handleScroll);
        window.addEventListener('scroll', handleScroll, { passive: true });
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse?.classList.contains('show')) {
                document.querySelector('.navbar-toggler')?.click();
            }

            const offset = navbar ? navbar.offsetHeight + 8 : 70;
            window.scrollTo({
                top: target.getBoundingClientRect().top + window.scrollY - offset,
                behavior: 'smooth'
            });
        });
    });

    // Fade-up on scroll
    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.service-card, .game-card, .brand-item, .credential-card').forEach(el => {
        el.classList.add('fade-up');
        observer.observe(el);
    });

    // Toggle deskripsi karakter — klik/tap
    const toggleCard = (card) => {
        const isActive = card.classList.contains('active');
        document.querySelectorAll('.game-card').forEach(c => {
            c.classList.remove('active');
            c.setAttribute('aria-expanded', 'false');
        });
        if (!isActive) {
            card.classList.add('active');
            card.setAttribute('aria-expanded', 'true');
        }
    };

    document.querySelectorAll('.game-card').forEach(card => {
        card.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleCard(card);
        });

        // Keyboard accessibility: Enter / Space
        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                e.stopPropagation();
                toggleCard(card);
            }
        });
    });

    // Klik di luar card → tutup semua
    document.addEventListener('click', () => {
        document.querySelectorAll('.game-card').forEach(c => {
            c.classList.remove('active');
            c.setAttribute('aria-expanded', 'false');
        });
    });

    // Chars arrow + drag scroll
    const sliderWrapper = document.querySelector('.chars-scroll-wrapper');
    const arrowLeft     = document.querySelector('.chars-arrow-left');
    const arrowRight    = document.querySelector('.chars-arrow-right');

    if (sliderWrapper && arrowLeft && arrowRight) {
        const scrollAmount = 320;

        const updateArrows = () => {
            arrowLeft.disabled  = sliderWrapper.scrollLeft <= 0;
            arrowRight.disabled = sliderWrapper.scrollLeft + sliderWrapper.clientWidth >= sliderWrapper.scrollWidth - 1;
        };

        arrowLeft.addEventListener('click', (e) => {
            e.stopPropagation();
            sliderWrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        arrowRight.addEventListener('click', (e) => {
            e.stopPropagation();
            sliderWrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        sliderWrapper.addEventListener('scroll', updateArrows, { passive: true });
        updateArrows();

        // Drag scroll
        let isDown = false;
        let startX, scrollLeft;

        sliderWrapper.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - sliderWrapper.offsetLeft;
            scrollLeft = sliderWrapper.scrollLeft;
        });

        sliderWrapper.addEventListener('mouseleave', () => { isDown = false; });
        sliderWrapper.addEventListener('mouseup',    () => { isDown = false; });
        sliderWrapper.addEventListener('mousemove',  (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x    = e.pageX - sliderWrapper.offsetLeft;
            const walk = (x - startX) * 1.5;
            sliderWrapper.scrollLeft = scrollLeft - walk;
        });
    }

    console.log("🚀 Dalang Pelo - Siap beraksi!");
});