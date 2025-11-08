// Navigation mobile
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Fermer le menu mobile quand on clique sur un lien
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
});

// Smooth scrolling pour les liens d'ancrage
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80; // Compensation pour la navbar fixe
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in');
        }
    });
}, observerOptions);

// Observer les éléments à animer
document.querySelectorAll('.bg-white.rounded-xl, .bg-gradient-to-br').forEach(el => {
    observer.observe(el);
});

// Gestion du formulaire de contact
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simulation d'envoi de formulaire
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.textContent = 'Envoi en cours...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        submitButton.textContent = 'Message envoyé !';
        submitButton.classList.remove('bg-primary', 'hover:bg-blue-800');
        submitButton.classList.add('bg-green-600');
        
        setTimeout(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
            submitButton.classList.remove('bg-green-600');
            submitButton.classList.add('bg-primary', 'hover:bg-blue-800');
            this.reset();
        }, 2000);
    }, 1500);
});

// Effet parallax léger sur le hero
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('#accueil');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Animation des compteurs dans la section "À propos"
function animateCounters() {
    const counters = document.querySelectorAll('.text-3xl.font-bold.text-primary');
    
    counters.forEach(counter => {
        const target = parseInt(counter.textContent);
        const increment = target / 50;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target + (counter.textContent.includes('+') ? '+' : '');
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current) + (counter.textContent.includes('+') ? '+' : '');
            }
        }, 50);
    });
}

// Observer pour déclencher l'animation des compteurs
const counterObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

const aboutSection = document.querySelector('#apropos');
if (aboutSection) {
    counterObserver.observe(aboutSection);
}

// Ajout de classes CSS pour les animations
const style = document.createElement('style');
style.textContent = `
    .animate-fade-in {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Animation hover pour les cartes de service */
    .service-card {
        transition: all 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    /* Effet de typing pour le titre principal */
    .typing-effect {
        overflow: hidden;
        border-right: 3px solid #06b6d4;
        white-space: nowrap;
        animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
    }
    
    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
    }
    
    @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: #06b6d4 }
    }
`;
document.head.appendChild(style);

// Activation de l'effet typing sur le titre principal
window.addEventListener('load', function() {
    const mainTitle = document.querySelector('#accueil h1');
    if (mainTitle) {
        mainTitle.classList.add('typing-effect');
    }
});

// Gestion de la navbar au scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('nav');
    if (window.scrollY > 100) {
        navbar.classList.add('bg-white/95', 'backdrop-blur-sm');
    } else {
        navbar.classList.remove('bg-white/95', 'backdrop-blur-sm');
    }
});

console.log('Obaxion website loaded successfully!');
