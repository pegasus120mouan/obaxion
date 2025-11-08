<?php
$page_title = "AMOA & Digitalisation - Obaxion";
$page_description = "Accompagnement stratégique pour une transformation digitale réussie";
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
                    
                    <a href="index.php#apropos" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">À propos</a>
                    <a href="index.php#contact" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-calendar-check mr-2 text-sm"></i>
                            Consultation gratuite
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-50 via-white to-blue-50 pt-20 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-200/30 to-purple-200/30 rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-200/30 to-blue-200/30 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center bg-white/80 backdrop-blur-sm text-gray-700 px-5 py-2.5 rounded-full text-sm font-semibold mb-8 border border-gray-200/50 shadow-sm">
                        <div class="w-2.5 h-2.5 bg-gradient-to-r from-green-400 to-green-500 rounded-full mr-3 animate-pulse"></div>
                        <span class="bg-gradient-to-r from-gray-700 to-gray-900 bg-clip-text text-transparent">Transformation Digitale & AMOA</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-[1.1]">
                        <span class="text-gray-900">Excellence en</span><br>
                        <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 bg-clip-text text-transparent">Digitalisation</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-lg">
                        Nous transformons vos défis métier en avantages compétitifs grâce à notre expertise AMOA et nos solutions technologiques innovantes.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="#solutions" class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-2xl font-semibold text-lg transition duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                            <i class="fas fa-chart-line mr-3"></i>
                            Explorer nos solutions
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center bg-white/90 backdrop-blur-sm text-gray-700 border border-gray-200 hover:border-gray-300 px-8 py-4 rounded-2xl font-semibold text-lg transition duration-300 hover:shadow-lg">
                            <i class="fas fa-phone mr-3"></i>
                            Consultation gratuite
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="flex items-center space-x-8 text-sm text-gray-600">
                        <div class="flex items-center">
                            <i class="fas fa-shield-check text-green-500 mr-2"></i>
                            <span>Certifié ISO 27001</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-award text-blue-500 mr-2"></i>
                            <span>10+ ans d'expertise</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-purple-500 mr-2"></i>
                            <span>200+ clients satisfaits</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <!-- Main Stats Card -->
                    <div class="bg-white/90 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/20">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Performance Prouvée</h3>
                            <p class="text-gray-600">Résultats mesurés sur nos derniers projets</p>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl border border-blue-200/50">
                                <div class="text-3xl font-bold text-blue-600 mb-1">250%</div>
                                <div class="text-sm text-gray-700 font-medium">ROI moyen</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl border border-green-200/50">
                                <div class="text-3xl font-bold text-green-600 mb-1">-60%</div>
                                <div class="text-sm text-gray-700 font-medium">Temps processus</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl border border-purple-200/50">
                                <div class="text-3xl font-bold text-purple-600 mb-1">98%</div>
                                <div class="text-sm text-gray-700 font-medium">Taux adoption</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl border border-orange-200/50">
                                <div class="text-3xl font-bold text-orange-600 mb-1">6 mois</div>
                                <div class="text-sm text-gray-700 font-medium">Délai moyen</div>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl border border-gray-200/50">
                            <div class="flex items-center justify-center space-x-1 mb-2">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-2 text-sm font-semibold text-gray-700">4.9/5</span>
                            </div>
                            <p class="text-xs text-gray-600 text-center">Note moyenne client sur 200+ projets</p>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl opacity-20 animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl opacity-20 animate-pulse" style="animation-delay: 1s"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-50 to-purple-50 text-gray-700 px-6 py-3 rounded-full text-sm font-semibold mb-8 border border-blue-200/50 shadow-sm">
                    <div class="w-2.5 h-2.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mr-3"></div>
                    Nos Domaines d'Excellence
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-8">Solutions <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Professionnelles</span></h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Une expertise AMOA reconnue qui transforme vos défis organisationnels en succès digitaux mesurables et durables.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Accompagnement AMOA -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-blue-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-compass text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">🎯 Accompagnement AMOA</h3>
                                <p class="text-gray-600 text-sm font-medium">Pilotage stratégique et opérationnel</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Assistance à maîtrise d'ouvrage pour transformer vos besoins métier en solutions digitales performantes et évolutives.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Définition des besoins métier</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Cahier des charges fonctionnel</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Pilotage de projet agile</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Recette et validation</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href=\"#contact\" class=\"inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-xl font-semibold transition duration-200 transform hover:scale-105 shadow-lg\">
                                En savoir plus
                                <i class=\"fas fa-arrow-right ml-2 text-sm\"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SOC & Surveillance -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-purple-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-eye text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">👁️ SOC & Surveillance</h3>
                                <p class="text-gray-600 text-sm font-medium">Centre opérationnel de sécurité</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Centre opérationnel de sécurité pour une surveillance continue et proactive de vos infrastructures critiques.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Monitoring 24/7/365</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Détection d'incidents</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Réponse aux menaces</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Rapports d'analyse</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="soc-surveillance.php" class="inline-flex items-center px-6 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-xl font-semibold transition duration-200 transform hover:scale-105 shadow-lg">
                                En savoir plus
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Développement d'Applications -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-green-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">💻 Développement d'Applications</h3>
                                <p class="text-gray-600 text-sm font-medium">Solutions sur-mesure innovantes</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Création d'applications web et mobiles adaptées à vos processus métier spécifiques avec les dernières technologies.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-green-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Applications web responsive</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-green-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Applications mobiles natives</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-green-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">APIs et microservices</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-green-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Intégration systèmes existants</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href=\"#contact\" class=\"inline-flex items-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white rounded-xl font-semibold transition duration-200 transform hover:scale-105 shadow-lg\">
                                En savoir plus
                                <i class=\"fas fa-arrow-right ml-2 text-sm\"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Transformation Agile -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-orange-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-rocket text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">🚀 Transformation Agile</h3>
                                <p class="text-gray-600 text-sm font-medium">Méthodes modernes et efficaces</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Adoption de méthodes agiles pour accélérer votre transformation digitale et optimiser vos processus.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Méthodologie Scrum/Kanban</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">DevOps et CI/CD</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Formation des équipes</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Coaching organisationnel</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href=\"#contact\" class=\"inline-flex items-center px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-xl font-semibold transition duration-200 transform hover:scale-105 shadow-lg\">
                                En savoir plus
                                <i class=\"fas fa-arrow-right ml-2 text-sm\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Stack Technologique d'Excellence</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Technologies de pointe sélectionnées pour leur robustesse, sécurité et évolutivité
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-blue-600 mb-2">React</div>
                    <div class="text-sm text-gray-500">Interface Utilisateur</div>
                </div>
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-green-600 mb-2">Node.js</div>
                    <div class="text-sm text-gray-500">Backend API</div>
                </div>
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-purple-600 mb-2">Laravel</div>
                    <div class="text-sm text-gray-500">Framework PHP</div>
                </div>
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-orange-600 mb-2">Flutter</div>
                    <div class="text-sm text-gray-500">Mobile Cross-Platform</div>
                </div>
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-blue-800 mb-2">Docker</div>
                    <div class="text-sm text-gray-500">Containerisation</div>
                </div>
                <div class="bg-white p-6 rounded-xl text-center hover:shadow-lg transition duration-300 border border-gray-200">
                    <div class="text-2xl font-bold text-red-600 mb-2">AWS</div>
                    <div class="text-sm text-gray-500">Cloud Infrastructure</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages & Études de Cas -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-green-100 text-green-700 px-6 py-2 rounded-full text-sm font-semibold mb-6">
                    🏆 Succès Clients
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ils Nous Font Confiance</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Découvrez comment nous avons transformé les défis de nos clients en succès digitaux
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 border border-blue-200">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                            B
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Banque Régionale</h4>
                            <p class="text-gray-600 text-sm">Secteur Financier</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Obaxion a digitalisé notre processus de crédit en 6 mois. Réduction de 70% du temps de traitement et amélioration significative de l'expérience client."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            <strong>ROI:</strong> +250% en 12 mois
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 border border-green-200">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                            L
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">LogiTech Solutions</h4>
                            <p class="text-gray-600 text-sm">Logistique & Transport</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Transformation complète de notre chaîne logistique avec une plateforme sur-mesure. Visibilité temps réel et optimisation des coûts de 40%."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            <strong>Économies:</strong> 2M€/an
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 border border-purple-200">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                            M
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">MedCare Group</h4>
                            <p class="text-gray-600 text-sm">Santé & Médical</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Dossier patient électronique sécurisé conforme RGPD. Interface intuitive adoptée par 100% des praticiens en 3 semaines."
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            <strong>Adoption:</strong> 100% équipes
                        </div>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus Section -->
    <section class="py-20 bg-gradient-to-br from-accent to-cyan-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Notre Méthodologie</h2>
                <p class="text-xl text-cyan-100 max-w-3xl mx-auto">
                    Une approche structurée en 5 phases pour garantir le succès de votre transformation
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-accent w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">01</div>
                        <h3 class="text-lg font-bold mb-2">🔍 Analyse</h3>
                        <p class="text-cyan-100 text-sm">Audit des processus existants</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-accent w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">02</div>
                        <h3 class="text-lg font-bold mb-2">📋 Stratégie</h3>
                        <p class="text-cyan-100 text-sm">Définition de la roadmap</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-accent w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">03</div>
                        <h3 class="text-lg font-bold mb-2">⚙️ Développement</h3>
                        <p class="text-cyan-100 text-sm">Création des solutions</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-accent w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">04</div>
                        <h3 class="text-lg font-bold mb-2">🚀 Déploiement</h3>
                        <p class="text-cyan-100 text-sm">Mise en production</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-accent w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">05</div>
                        <h3 class="text-lg font-bold mb-2">📈 Optimisation</h3>
                        <p class="text-cyan-100 text-sm">Amélioration continue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Accélérez Votre Transformation Digitale</h2>
            <p class="text-xl text-gray-600 mb-8">
                Discutons de votre projet de digitalisation avec nos experts AMOA
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index.php#contact" class="bg-accent hover:bg-cyan-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Planifier un atelier
                </a>
                <a href="index.php#contact" class="border-2 border-accent text-accent hover:bg-accent hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    💬 Parler à un consultant
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
                        Gardiens de votre transformation digitale et accompagnement AMOA.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cybersecurite.php" class="hover:text-white transition duration-300">Cybersécurité</a></li>
                        <li><a href="infrastructure.php" class="hover:text-white transition duration-300">Infrastructure</a></li>
                        <li><a href="digitalisation.php" class="hover:text-white transition duration-300">Digitalisation</a></li>
                        <li><a href="index.php#services" class="hover:text-white transition duration-300">Formation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Entreprise</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="index.php#apropos" class="hover:text-white transition duration-300">À propos</a></li>
                        <li><a href="index.php#contact" class="hover:text-white transition duration-300">Contact</a></li>
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
