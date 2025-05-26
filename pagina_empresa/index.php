<?php
// Variables de configuración del sitio
$siteName = "RFPP";
$siteDescription = "Potenciamos tu mundo digital con soluciones inteligentes";
$contactEmail = "rfppoficial@gmail.com";
$contactPhone = "+56 9 8909 7459";
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?> - <?php echo $siteDescription; ?></title>
    <meta name="description" content="<?php echo $siteName; ?> - Desarrollo de aplicaciones móviles, sitios web y software a medida. Soluciones digitales elegantes y escalables.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="statics/images/favicon_180x180_transparent.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">
    
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav-container">
            <a href="#inicio" class="logo">
                <i class="fas fa-code"></i> <?php echo $siteName; ?>
            </a>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#inicio" class="nav-link" data-section="inicio"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="#nosotros" class="nav-link" data-section="nosotros"><i class="fas fa-users"></i> Nosotros</a></li>
                <li><a href="#servicios" class="nav-link" data-section="servicios"><i class="fas fa-cogs"></i> Servicios</a></li>
                <li><a href="#testimonios" class="nav-link" data-section="testimonios"><i class="fas fa-quote-left"></i> Testimonios</a></li>
                <li><a href="#contacto" class="nav-link" data-section="contacto"><i class="fas fa-envelope"></i> Contacto</a></li>
            </ul>
            
            <div class="mobile-menu-toggle" id="mobile-toggle">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </nav>
    </header>

    <!-- SECCIÓN INICIO (HERO) -->
    <section id="inicio" class="hero">
        <div class="hero-container">
            <div class="hero-content fade-in">
                <h1><?php echo $siteName; ?> — <?php echo $siteDescription; ?></h1>
                <p>Creamos aplicaciones móviles, sitios web y plataformas digitales robustas que combinan tecnología de vanguardia con diseño funcional.</p>
                <div class="hero-buttons">
                    <a href="#servicios" class="btn btn-primary">
                        <i class="fas fa-rocket"></i> Explorar Servicios
                    </a>
                    <a href="#contacto" class="btn btn-secondary">
                        <i class="fas fa-paper-plane"></i> Contáctanos
                    </a>
                </div>
            </div>
            <div class="hero-visual fade-in">
                <div class="logo-large floating">
                    <i class="fas fa-code"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN NOSOTROS -->
    <section id="nosotros" class="section">
        <h2 class="section-title scroll-reveal">¿Quiénes somos?</h2>
        <div class="about-content">
            <div class="about-text scroll-reveal">
                <p>En <?php echo $siteName; ?>, somos una firma de desarrollo digital especializada en crear soluciones tecnológicas a medida. Nuestro equipo combina experiencia en programación, diseño UX/UI, infraestructura web y estrategia digital para transformar ideas en productos funcionales y escalables.</p>
                
                <h3><i class="fas fa-bullseye"></i> Misión</h3>
                <p>Desarrollar soluciones digitales que simplifiquen procesos, impulsen negocios y mejoren la experiencia del usuario.</p>
                
                <h3><i class="fas fa-eye"></i> Visión</h3>
                <p>Ser líderes en innovación tecnológica en América Latina, construyendo software con impacto real y humano.</p>
                
                <h3><i class="fas fa-heart"></i> Valores</h3>
                <ul class="values-list">
                    <li>Innovación continua</li>
                    <li>Calidad sin concesiones</li>
                    <li>Transparencia en cada etapa</li>
                    <li>Enfoque centrado en el cliente</li>
                </ul>
            </div>
            <div class="about-visual scroll-reveal">
                <div class="team-illustration">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN SERVICIOS -->
    <section id="servicios" class="section">
        <h2 class="section-title scroll-reveal">Lo que hacemos</h2>
        <p class="text-center scroll-reveal" style="color: var(--color-gray); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Nos especializamos en tres pilares del desarrollo digital. Cada uno enfocado en ofrecer rendimiento, diseño y escalabilidad.
        </p>
        
        <div class="services-grid">
            <?php
            $servicios = [
                [
                    'icon' => 'fas fa-mobile-alt',
                    'title' => 'Desarrollo de Aplicaciones Móviles',
                    'description' => 'Creamos apps para iOS y Android, híbridas o nativas, pensadas para crecer desde el primer usuario. Usamos tecnologías como Flutter, React Native y Swift para asegurar fluidez, velocidad y una gran experiencia de usuario.',
                    'features' => ['Apps de comercio', 'Apps de servicios', 'Apps institucionales']
                ],
                [
                    'icon' => 'fas fa-globe',
                    'title' => 'Diseño y Desarrollo de Sitios Web',
                    'description' => 'Diseñamos sitios responsive, rápidos y visualmente impactantes. Desde landing pages hasta sitios corporativos y tiendas online. Integramos SEO, accesibilidad y velocidad desde el inicio.',
                    'features' => ['WordPress, Webflow, HTML/CSS', 'WooCommerce y Shopify', 'Portales autoadministrables']
                ],
                [
                    'icon' => 'fas fa-server',
                    'title' => 'Software Web a Medida',
                    'description' => 'Creamos plataformas robustas y escalables. CRM, sistemas internos, dashboards, SaaS y aplicaciones con backend personalizado. Usamos tecnologías como Node.js, Django, Laravel y MongoDB.',
                    'features' => ['Integraciones con APIs', 'Sistemas multiusuario', 'Paneles de administración']
                ]
            ];
            
            foreach ($servicios as $servicio): ?>
            <div class="service-card scroll-reveal">
                <div class="service-icon">
                    <i class="<?php echo $servicio['icon']; ?>"></i>
                </div>
                <h3><?php echo $servicio['title']; ?></h3>
                <p><?php echo $servicio['description']; ?></p>
                <ul style="text-align: left; color: var(--color-gray-dark); margin: 1rem 0;">
                    <?php foreach ($servicio['features'] as $feature): ?>
                    <li><i class="fas fa-check" style="color: var(--color-gold);"></i> <?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- SECCIÓN TESTIMONIOS -->
    <section id="testimonios" class="section">
        <h2 class="section-title scroll-reveal">Testimonio de los trabajadores</h2>
        <p class="text-center scroll-reveal" style="color: var(--color-gray); margin-bottom: 3rem;">
            Nuestra mayor validación: sus resultados.
        </p>
        
        <?php
        $testimonios = [
            [
                'texto' => 'Con RFPP, lanzamos nuestra app en menos de 5 meses. Excelente comunicación y resultados que superaron nuestras expectativas.',
                'autor' => 'Rafael Peña P., Fundador de la Empresa, Jefe y Programador'
            ],
            [
                'texto' => 'El sitio web que desarrollaron transformó nuestra presencia online. Son precisos, creativos y confiables en cada entrega.',
                'autor' => 'Joaquín Durán, Especialista Publicitario y de Marketing'
            ]
        ];
        
        foreach ($testimonios as $testimonio): ?>
        <div class="testimonial scroll-reveal">
            <p>"<?php echo $testimonio['texto']; ?>"</p>
            <div class="testimonial-author">— <?php echo $testimonio['autor']; ?></div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- SECCIÓN CONTACTO -->
    <section id="contacto" class="section">
        <h2 class="section-title scroll-reveal">¿Listo para empezar?</h2>
        <p class="text-center scroll-reveal" style="color: var(--color-gray); margin-bottom: 3rem;">
            Conecta con nosotros y descubre cómo podemos ayudarte a transformar tus ideas en realidad digital.
        </p>
        
        <div class="contact-content">
            <div class="contact-info scroll-reveal">
                <h3>Información de contacto</h3>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><?php echo $contactEmail; ?></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span><?php echo $contactPhone; ?></span>
                </div>
                
                <div class="social-links">
                    <a href="https://www.instagram.com/rfppoficial/" class="social-link" title="Instagram - @rfppoficial" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@rfppoficial" class="social-link" title="TikTok - @rfppoficial" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/rafael.rfpp" class="social-link" title="Facebook - Rafael RFPP" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
                    <i class="fas fa-code" style="color: var(--color-gold); font-size: 1.5rem;"></i>
                    <h3 style="margin: 0;"><?php echo $siteName; ?></h3>
                </div>
                <p>Creando tecnología que deja huella. Soluciones digitales elegantes y escalables para el mundo moderno.</p>
            </div>
            
            <div class="footer-section">
                <h3>Enlaces rápidos</h3>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contacto</h3>
                <p><?php echo $contactEmail; ?></p>
                <p><?php echo $contactPhone; ?></p>
                <div class="social-links">
                    <a href="https://www.instagram.com/rfppoficial/" class="social-link" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@rfppoficial" class="social-link" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/rafael.rfpp" class="social-link" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo $currentYear; ?> <?php echo $siteName; ?>. Todos los derechos reservados. | Desarrollo ético con impacto real.</p>
        </div>
    </footer>

    <!-- JavaScript para funcionalidad -->
    <script>
        // Menú móvil
        const mobileToggle = document.getElementById('mobile-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });

        // Cerrar menú al hacer clic en un enlace
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
            });
        });

        // Header con scroll
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Indicador de sección activa en el menú
        function updateActiveNavLink() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let currentSection = '';
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                if (sectionTop <= 100) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-section') === currentSection) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLink);
        window.addEventListener('load', updateActiveNavLink);

        // Animaciones de scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling para navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Efecto de escritura en el título principal
        window.addEventListener('load', () => {
            const heroTitle = document.querySelector('.hero h1');
            if (heroTitle) {
                const text = heroTitle.textContent;
                heroTitle.textContent = '';
                heroTitle.style.borderRight = '2px solid var(--color-gold)';
                
                let i = 0;
                const typeWriter = () => {
                    if (i < text.length) {
                        heroTitle.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 50);
                    } else {
                        setTimeout(() => {
                            heroTitle.style.borderRight = 'none';
                        }, 1000);
                    }
                };
                
                setTimeout(typeWriter, 1000);
            }
        });

        // Partículas flotantes en el hero
        function createParticles() {
            const hero = document.querySelector('.hero');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 2px;
                    height: 2px;
                    background: var(--color-gold);
                    border-radius: 50%;
                    opacity: 0.3;
                    animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
                    animation-delay: ${Math.random() * 2}s;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                `;
                hero.appendChild(particle);
            }
        }

        // Crear partículas después de que cargue la página
        window.addEventListener('load', createParticles);
    </script>

    <style>
        /* Indicador de sección activa */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--color-gold);
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link.active::after {
            width: 80%;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 80%;
                opacity: 1;
            }
        }

        /* Mejoras para el menú móvil - Animación X */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: var(--spacing-sm);
            gap: 5px;
            width: 40px;
            height: 40px;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .mobile-menu-toggle:hover {
            background-color: rgba(212, 175, 55, 0.1);
        }

        .hamburger-line {
            width: 25px;
            height: 3px;
            background: var(--color-white);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-radius: 3px;
            transform-origin: center;
            position: relative;
        }

        /* Estado activo - Transformación a X */
        .mobile-menu-toggle.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(0, 8px);
            background: var(--color-gold);
        }

        .mobile-menu-toggle.active .hamburger-line:nth-child(2) {
            opacity: 0;
            transform: scale(0);
        }

        .mobile-menu-toggle.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(0, -8px);
            background: var(--color-gold);
        }

        /* Animación del contenedor del menú móvil */
        .mobile-menu-toggle.active {
            background-color: rgba(212, 175, 55, 0.15);
            transform: scale(1.1);
        }

        /* Mejoras adicionales para el menú desplegable */
        .nav-menu {
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* Animación de entrada para elementos del menú */
        @media (max-width: 991px) {
            .nav-menu.active .nav-link {
                animation: slideInFromRight 0.5s ease forwards;
                opacity: 0;
            }

            .nav-menu.active .nav-link:nth-child(1) { animation-delay: 0.1s; }
            .nav-menu.active .nav-link:nth-child(2) { animation-delay: 0.2s; }
            .nav-menu.active .nav-link:nth-child(3) { animation-delay: 0.3s; }
            .nav-menu.active .nav-link:nth-child(4) { animation-delay: 0.4s; }
            .nav-menu.active .nav-link:nth-child(5) { animation-delay: 0.5s; }
        }

        @keyframes slideInFromRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Efecto de pulso para indicar interactividad */
        .mobile-menu-toggle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: rgba(212, 175, 55, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .mobile-menu-toggle:active::before {
            transform: translate(-50%, -50%) scale(1.5);
        }

        .nav-link i,
        .nav-link:hover i,
        .nav-link:focus i,
        .nav-link:active i {
            text-shadow: none !important;
            filter: none !important;
            animation: none !important;
            transform: none !important;
            box-shadow: none !important;
            background: none !important;
            border: none !important;
        }

        /* Eliminar efectos CSS3 adicionales */
        .nav-link *,
        .nav-link:hover *,
        .nav-link:focus *,
        .nav-link:active * {
            filter: none !important;
            backdrop-filter: none !important;
            text-shadow: none !important;
            box-shadow: none !important;
            transition: color 0.3s ease !important;
        }

        /* Agregar este CSS más específico para eliminar cualquier brillo */
        .nav-link,
        .nav-link:hover,
        .nav-link:focus,
        .nav-link:active {
            text-shadow: none !important;
            box-shadow: none !important;
            filter: none !important;
            background: none !important;
            border: none !important;
            outline: none !important;
            text-decoration: none !important;
        }

        /* Específicamente para los iconos */
        .nav-link i {
            filter: none !important;
            text-shadow: none !important;
            animation: none !important;
            transform: none !important;
        }

        /* Para móvil */
        @media (max-width: 768px) {
            .nav-link::after {
                bottom: -2px;
                height: 1px;
            }

            .mobile-menu-toggle {
                display: flex;
            }
        }

        /* Mejora adicional: efecto de overlay cuando el menú está abierto */
        .nav-menu.active::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
            animation: fadeInOverlay 0.3s ease;
        }

        @keyframes fadeInOverlay {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</body>
</html>
