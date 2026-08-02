/* ============================================
   PORTFOLIO WEBSITE - NUMAN IFTIKHAR
   JavaScript Functionality
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

    // --- Preloader (Instant Hide) ---
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.classList.add('hidden');
    }

    // --- Static Header Title (No Typing Loop) ---
    const typedElement = document.getElementById('typedText');
    if (typedElement) {
        typedElement.textContent = 'DevOps, MLOps & AI Platform Engineer';
    }

    // --- Optimized Scroll Handler ---
    const navbar = document.getElementById('navbar');
    const backToTop = document.getElementById('backToTop');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-links a');
    const scrollProgress = document.getElementById('scrollProgress');

    let isScrolling = false;
    function handleScroll() {
        const scrollY = window.scrollY;

        if (navbar) {
            if (scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

        if (backToTop) {
            if (scrollY > 400) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }

        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            if (scrollY >= sectionTop) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });

        if (scrollProgress) {
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const pct = docHeight > 0 ? (scrollY / docHeight) * 100 : 0;
            scrollProgress.style.width = pct + '%';
        }

        isScrolling = false;
    }

    window.addEventListener('scroll', () => {
        if (!isScrolling) {
            window.requestAnimationFrame(handleScroll);
            isScrolling = true;
        }
    }, { passive: true });

    // --- Instant Reveal (No Animation) ---
    const revealTargets = document.querySelectorAll('.service-card, .cert-card, .timeline-item, .contact-card, .education-card, .stat-card, .info-card, .project-card, .why-card, .testimonial-card, .process-step, .blog-card, .skill-card, .roadmap-card, .section-header');
    revealTargets.forEach(el => el.classList.add('reveal', 'active'));

    // --- Mobile Menu ---
    const hamburger = document.getElementById('hamburger');
    const navLinksContainer = document.getElementById('navLinks');

    if (hamburger && navLinksContainer) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinksContainer.classList.toggle('open');
        });

        navLinksContainer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinksContainer.classList.remove('open');
            });
        });
    }

    // --- Smooth Scroll ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // --- Direct Counter Output (No Count-up Step Loop) ---
    const counters = document.querySelectorAll('.stat-number');
    counters.forEach(counter => {
        const target = counter.getAttribute('data-count');
        if (target) {
            counter.textContent = target;
            counter.classList.add('counted');
        }
    });

    // --- Contact Form ---
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            const mailtoLink = `mailto:me@numaniftikhar.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Name: ${name}\nEmail: ${email}\n\n${message}`)}`;
            window.location.href = mailtoLink;

            const btn = contactForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check"></i> Opening Email Client...';
            btn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.style.background = '';
                contactForm.reset();
            }, 3000);
        });
    }

    // --- Architecture Diagram Modal ---
    const archModal = document.createElement('div');
    archModal.className = 'arch-modal';
    archModal.innerHTML = '<button class="arch-modal-close"><i class="fas fa-times"></i></button><img src="" alt="Architecture Diagram">';
    document.body.appendChild(archModal);

    const archModalImg = archModal.querySelector('img');
    const archModalClose = archModal.querySelector('.arch-modal-close');

    document.querySelectorAll('.project-architecture').forEach(arch => {
        arch.addEventListener('click', () => {
            const imgSrc = arch.querySelector('img').src;
            archModalImg.src = imgSrc;
            archModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    if (archModalClose) {
        archModalClose.addEventListener('click', (e) => {
            e.stopPropagation();
            archModal.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    archModal.addEventListener('click', () => {
        archModal.classList.remove('active');
        document.body.style.overflow = '';
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && archModal.classList.contains('active')) {
            archModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

});

});
