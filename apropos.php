<?php
$page_title = "À propos - Obaxion";
$page_description = "Découvrez Obaxion, votre partenaire de confiance en intégration de solutions informatiques";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#3b82f6',
                        accent: '#06b6d4'
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm fixed w-full z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="index.php" class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mr-3">
                                <span class="text-white font-bold text-lg">O</span>
                            </div>
                            <span class="text-2xl font-bold bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">OBAXION</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index.php" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Accueil</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium flex items-center">
                            Services
                            <i class="fas fa-chevron-down ml-2 text-xs group-hover:rotate-180 transition duration-200"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute top-full left-0 mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2">
                                <a href="cybersecurite.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-shield-alt text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Cybersécurité</div>
                                        <div class="text-xs text-gray-500">Protection & audit sécurité</div>
                                    </div>
                                </a>
                                
                                <a href="infrastructure.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-network-wired text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Infrastructure & Réseau</div>
                                        <div class="text-xs text-gray-500">Câblage & téléphonie IP</div>
                                    </div>
                                </a>
                                
                                <a href="digitalisation.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-rocket text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">AMOA & Digitalisation</div>
                                        <div class="text-xs text-gray-500">Transformation digitale</div>
                                    </div>
                                </a>
                                
                                <a href="soc-surveillance.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-eye text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">SOC & Surveillance</div>
                                        <div class="text-xs text-gray-500">Monitoring 24/7/365</div>
                                    </div>
                                </a>
                                
                                <a href="index.php#services" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-graduation-cap text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Formation & Sensibilisation</div>
                                        <div class="text-xs text-gray-500">Cybersécurité & RGPD</div>
                                    </div>
                                </a>
                                
                                <a href="index.php#services" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-user-tie text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Expertise RH</div>
                                        <div class="text-xs text-gray-500">Recrutement IT spécialisé</div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Call to Action at bottom -->
                            <div class="border-t border-gray-100 p-4">
                                <a href="index.php#contact" class="flex items-center justify-center w-full px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                                    <i class="fas fa-calendar-check mr-2 text-sm"></i>
                                    Consultation gratuite
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="apropos.php" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium bg-gray-50 text-gray-900">À propos</a>
                    <a href="index.php#contact" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="index.php#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-calendar-check mr-2 text-sm"></i>
                            Consultation gratuite
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
                <a href="index.php#contact" class="bg-white hover:bg-gray-100 text-blue-700 px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    💬 Parlons de votre projet
                </a>
                <a href="index.php#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    📞 Planifier un appel
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">OBAXION</h3>
                    <p class="text-gray-400 mb-4">
                        Gardiens de votre transformation digitale depuis plus de 10 ans.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cybersecurite.php" class="hover:text-white transition duration-300">Cybersécurité</a></li>
                        <li><a href="infrastructure.php" class="hover:text-white transition duration-300">Infrastructure</a></li>
                        <li><a href="digitalisation.php" class="hover:text-white transition duration-300">Digitalisation</a></li>
                        <li><a href="soc-surveillance.php" class="hover:text-white transition duration-300">SOC & Surveillance</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Entreprise</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="apropos.php" class="hover:text-white transition duration-300">À propos</a></li>
                        <li><a href="index.php#contact" class="hover:text-white transition duration-300">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Carrières</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>123 Rue de l'Innovation</li>
                        <li>75001 Paris, France</li>
                        <li>+33 1 23 45 67 89</li>
                        <li>contact@obaxion.com</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Obaxion. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
