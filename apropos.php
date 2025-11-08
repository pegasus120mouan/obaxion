<?php
$page_title = "À propos - Obaxion";
$page_description = "Découvrez Obaxion, votre partenaire de confiance en intégration de solutions informatiques";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <?php include 'header.php'; ?>
    <style>
        .floating-logo {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(-50%) translateX(0); }
            50% { transform: translateY(-50%) translateX(-5px); }
        }
        
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }
        
        @media (max-width: 768px) {
            .floating-logo {
                right: 1rem;
                top: 40%;
            }
            .floating-logo img {
                width: 3rem;
                height: 3rem;
            }
            .floating-logo .tooltip {
                display: none;
            }
        }
    </style>
</head>
<body class="font-sans">
    <?php include 'nav.php'; ?>

    <!-- Logo Flottant -->
    <div class="floating-logo fixed top-1/2 right-8 transform -translate-y-1/2 z-40 group">
        <div class="bg-white/95 backdrop-blur-md shadow-2xl rounded-2xl p-6 border border-secondary/20 transition-all duration-300 hover:scale-110 hover:shadow-3xl">
            <img src="img/logo.png" alt="Obaxion Logo" class="w-24 h-24 object-contain transition-transform duration-300 group-hover:rotate-12">
            <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-r from-secondary to-accent rounded-full animate-pulse"></div>
        </div>
        <!-- Tooltip -->
        <div class="tooltip absolute right-full mr-4 top-1/2 transform -translate-y-1/2 bg-primary text-white px-3 py-2 rounded-lg text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
            OBAXION - Votre partenaire digital
            <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-4 border-transparent border-l-primary"></div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 text-white pt-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-white/10 to-transparent rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-white/10 to-transparent rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-semibold mb-8 border border-white/20">
                    <div class="w-2.5 h-2.5 bg-gradient-to-r from-green-400 to-green-500 rounded-full mr-3 animate-pulse"></div>
                    <span>À propos d'Obaxion</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                    <span class="text-white">Gardiens de votre</span><br>
                    <span class="bg-gradient-to-r from-cyan-200 via-white to-purple-200 bg-clip-text text-transparent">Transformation Digitale</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 text-blue-100 max-w-4xl mx-auto leading-relaxed">
                    Depuis plus de 10 ans, nous accompagnons les entreprises dans leur évolution technologique avec expertise, innovation et engagement.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#histoire" class="inline-flex items-center justify-center bg-white text-blue-700 px-10 py-4 rounded-2xl font-bold text-lg transition duration-300 transform hover:scale-105 shadow-xl">
                        <i class="fas fa-history mr-3"></i>
                        Notre histoire
                    </a>
                    <a href="#equipe" class="inline-flex items-center justify-center bg-white/10 backdrop-blur-sm text-white border border-white/30 hover:bg-white/20 px-10 py-4 rounded-2xl font-bold text-lg transition duration-300">
                        <i class="fas fa-users mr-3"></i>
                        Rencontrer l'équipe
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Histoire -->
    <section id="histoire" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center bg-blue-50 text-blue-700 px-6 py-3 rounded-full text-sm font-semibold mb-8 border border-blue-200">
                        <div class="w-2.5 h-2.5 bg-blue-500 rounded-full mr-3"></div>
                        Notre Histoire
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                        Une Vision, <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Une Mission</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Fondée en 2014, Obaxion est née de la vision de créer un pont entre les besoins métier des entreprises et les solutions technologiques les plus avancées.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-lightbulb text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Innovation Continue</h3>
                                <p class="text-gray-600">Nous restons à la pointe des technologies pour offrir les meilleures solutions à nos clients.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-handshake text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Partenariat de Confiance</h3>
                                <p class="text-gray-600">Nous construisons des relations durables basées sur la transparence et l'excellence.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-shield-check text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Sécurité by Design</h3>
                                <p class="text-gray-600">La sécurité est au cœur de toutes nos solutions et recommandations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-8">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                                <div class="text-3xl font-bold text-blue-600 mb-2">10+</div>
                                <div class="text-sm text-gray-600">Années d'expérience</div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                                <div class="text-3xl font-bold text-purple-600 mb-2">200+</div>
                                <div class="text-sm text-gray-600">Projets réalisés</div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                                <div class="text-3xl font-bold text-green-600 mb-2">150+</div>
                                <div class="text-sm text-gray-600">Clients satisfaits</div>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                                <div class="text-3xl font-bold text-orange-600 mb-2">24/7</div>
                                <div class="text-sm text-gray-600">Support disponible</div>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-6 bg-white rounded-2xl shadow-sm">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Certifications & Partenariats</h3>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div class="p-3 bg-gray-50 rounded-xl">
                                    <i class="fas fa-certificate text-blue-600 mb-2"></i>
                                    <div class="text-xs font-semibold">ISO 27001</div>
                                </div>
                                <div class="p-3 bg-gray-50 rounded-xl">
                                    <i class="fab fa-microsoft text-blue-600 mb-2"></i>
                                    <div class="text-xs font-semibold">Microsoft Partner</div>
                                </div>
                                <div class="p-3 bg-gray-50 rounded-xl">
                                    <i class="fas fa-shield-alt text-red-600 mb-2"></i>
                                    <div class="text-xs font-semibold">Fortinet</div>
                                </div>
                                <div class="p-3 bg-gray-50 rounded-xl">
                                    <i class="fab fa-aws text-orange-600 mb-2"></i>
                                    <div class="text-xs font-semibold">AWS Partner</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Valeurs -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-white text-gray-700 px-6 py-3 rounded-full text-sm font-semibold mb-8 border border-gray-200 shadow-sm">
                    <div class="w-2.5 h-2.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mr-3"></div>
                    Nos Valeurs
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-8">Ce qui nous <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Anime</span></h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Nos valeurs fondamentales guident chacune de nos actions et définissent notre approche unique du conseil en technologies.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-blue-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous visons l'excellence dans chaque projet, en dépassant les attentes de nos clients avec des solutions de qualité supérieure.
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-purple-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Collaboration</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs défis et co-créer les meilleures solutions.
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-green-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Durabilité</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous concevons des solutions durables et évolutives qui accompagnent la croissance de nos clients sur le long terme.
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-orange-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous restons à l'avant-garde des technologies pour proposer des solutions innovantes et compétitives.
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-red-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sécurité</h3>
                    <p class="text-gray-600 leading-relaxed">
                        La sécurité est notre priorité absolue dans toutes nos recommandations et implémentations technologiques.
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-cyan-500">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Engagement</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous nous engageons pleinement dans chaque mission avec passion, dédication et responsabilité.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à Transformer Votre Entreprise ?</h2>
            <p class="text-xl text-blue-100 mb-8">
                Discutons de vos projets et découvrons ensemble comment Obaxion peut vous accompagner
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index#contact" class="bg-white hover:bg-gray-100 text-blue-700 px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    💬 Parlons de votre projet
                </a>
                <a href="index#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    📞 Planifier un appel
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
</body>
</html>
