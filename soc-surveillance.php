<?php
$page_title = "SOC & Surveillance - Obaxion";
$page_description = "Centre opérationnel de sécurité pour une surveillance continue et proactive";
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
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl flex items-center justify-center mr-3">
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
                                
                                <a href="soc-surveillance.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-700 rounded-xl transition duration-200 group/item bg-purple-50 border border-purple-200">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-eye text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-purple-700">SOC & Surveillance</div>
                                        <div class="text-xs text-purple-600">Monitoring 24/7/365</div>
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
                                <a href="index.php#contact" class="flex items-center justify-center w-full px-4 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                                    <i class="fas fa-shield-alt mr-2 text-sm"></i>
                                    Audit sécurité gratuit
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="index.php#apropos" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">À propos</a>
                    <a href="index.php#contact" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-purple-600 to-purple-800 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-shield-alt mr-2 text-sm"></i>
                            Audit sécurité gratuit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-purple-900 via-purple-800 to-indigo-900 text-white pt-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-400/20 to-purple-400/20 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-5 py-2.5 rounded-full text-sm font-semibold mb-8 border border-white/20">
                        <div class="w-2.5 h-2.5 bg-gradient-to-r from-green-400 to-green-500 rounded-full mr-3 animate-pulse"></div>
                        <span>Centre Opérationnel de Sécurité</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-[1.1]">
                        <span class="text-white">Surveillance</span><br>
                        <span class="bg-gradient-to-r from-purple-200 via-pink-200 to-purple-300 bg-clip-text text-transparent">24/7/365</span>
                    </h1>
                    <p class="text-xl text-purple-100 mb-10 leading-relaxed max-w-lg">
                        Protection continue de vos infrastructures critiques avec notre SOC de nouvelle génération et nos experts en cybersécurité.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="#services" class="inline-flex items-center justify-center bg-white text-purple-900 px-8 py-4 rounded-2xl font-semibold text-lg transition duration-300 transform hover:scale-105 shadow-xl">
                            <i class="fas fa-eye mr-3"></i>
                            Découvrir notre SOC
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center bg-white/10 backdrop-blur-sm text-white border border-white/30 hover:bg-white/20 px-8 py-4 rounded-2xl font-semibold text-lg transition duration-300">
                            <i class="fas fa-phone mr-3"></i>
                            Consultation d'urgence
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="flex items-center space-x-8 text-sm text-purple-200">
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-400 mr-2"></i>
                            <span>Réponse < 15 min</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-shield-check text-blue-400 mr-2"></i>
                            <span>Certifié ISO 27001</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-purple-300 mr-2"></i>
                            <span>Équipe 24/7</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <!-- SOC Monitoring Dashboard Mockup -->
                    <div class="bg-gray-900/90 backdrop-blur-xl rounded-3xl p-6 shadow-2xl border border-white/10">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-white">SOC Dashboard - Live</h3>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                                <span class="text-green-400 text-sm font-medium">Actif</span>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-green-500/20 rounded-2xl p-4 border border-green-500/30">
                                <div class="text-2xl font-bold text-green-400 mb-1">99.9%</div>
                                <div class="text-xs text-gray-300">Disponibilité</div>
                            </div>
                            <div class="bg-blue-500/20 rounded-2xl p-4 border border-blue-500/30">
                                <div class="text-2xl font-bold text-blue-400 mb-1">847</div>
                                <div class="text-xs text-gray-300">Événements/jour</div>
                            </div>
                            <div class="bg-orange-500/20 rounded-2xl p-4 border border-orange-500/30">
                                <div class="text-2xl font-bold text-orange-400 mb-1">12 min</div>
                                <div class="text-xs text-gray-300">Temps réponse</div>
                            </div>
                            <div class="bg-purple-500/20 rounded-2xl p-4 border border-purple-500/30">
                                <div class="text-2xl font-bold text-purple-400 mb-1">0</div>
                                <div class="text-xs text-gray-300">Incidents critiques</div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-800/50 rounded-2xl p-4">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm text-gray-300">Dernières alertes</span>
                                <span class="text-xs text-green-400">Tout sécurisé</span>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-xs">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-3"></div>
                                    <span class="text-gray-400">Scan de vulnérabilités terminé</span>
                                    <span class="ml-auto text-gray-500">14:32</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                                    <span class="text-gray-400">Mise à jour sécurité appliquée</span>
                                    <span class="ml-auto text-gray-500">13:15</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                                    <span class="text-gray-400">Tentative d'accès bloquée</span>
                                    <span class="ml-auto text-gray-500">12:48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOC Visual Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center bg-white text-gray-700 px-5 py-2.5 rounded-full text-sm font-semibold mb-8 border border-gray-200 shadow-sm">
                        <div class="w-2.5 h-2.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full mr-3"></div>
                        Centre Opérationnel Moderne
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                        Notre SOC de <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Nouvelle Génération</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Un centre opérationnel de sécurité équipé des dernières technologies de surveillance et d'analyse, avec des experts disponibles 24/7 pour protéger vos infrastructures critiques.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center mr-3">
                                    <i class="fas fa-desktop text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">12</div>
                                    <div class="text-sm text-gray-600">Écrans de surveillance</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-indigo-100 rounded-xl flex items-center justify-center mr-3">
                                    <i class="fas fa-users text-indigo-600"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">8</div>
                                    <div class="text-sm text-gray-600">Analystes experts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-8 text-sm text-gray-600">
                        <div class="flex items-center">
                            <i class="fas fa-shield-check text-green-500 mr-2"></i>
                            <span>Certifié ISO 27001</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            <span>Surveillance 24/7</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <!-- Real SOC Image Container -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <!-- Main SOC Image -->
                        <img 
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                            alt="Centre Opérationnel de Sécurité - SOC Obaxion" 
                            class="w-full h-96 object-cover"
                        />
                        
                        <!-- Overlay with Live Status -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        
                        <!-- Live Status Badge -->
                        <div class="absolute top-6 left-6">
                            <div class="bg-black/80 backdrop-blur-sm rounded-2xl px-4 py-2 border border-white/20">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-400 rounded-full mr-3 animate-pulse"></div>
                                    <span class="text-white font-semibold text-sm">SOC Opérationnel 24/7</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bottom Stats Overlay -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-black/80 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <div class="text-2xl font-bold text-green-400">1,247</div>
                                        <div class="text-xs text-gray-300">Systèmes surveillés</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-blue-400">99.8%</div>
                                        <div class="text-xs text-gray-300">Incidents résolus</div>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-purple-400">< 15min</div>
                                        <div class="text-xs text-gray-300">Temps réponse</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Security Badge -->
                        <div class="absolute top-6 right-6">
                            <div class="bg-purple-600/90 backdrop-blur-sm rounded-xl px-3 py-2 border border-purple-400/30">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-check text-white mr-2 text-sm"></i>
                                    <span class="text-white font-semibold text-xs">ISO 27001</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl opacity-20 animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-2xl opacity-20 animate-pulse" style="animation-delay: 1s"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services SOC Section -->
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-50 to-indigo-50 text-gray-700 px-6 py-3 rounded-full text-sm font-semibold mb-8 border border-purple-200/50">
                    <div class="w-2.5 h-2.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full mr-3"></div>
                    Services de Surveillance
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-8">Protection <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Continue</span></h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Notre SOC de nouvelle génération combine intelligence artificielle et expertise humaine pour une protection optimale de vos actifs numériques.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Monitoring 24/7 -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-purple-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-clock text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">⏰ Monitoring 24/7/365</h3>
                                <p class="text-gray-600 text-sm font-medium">Surveillance continue sans interruption</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Surveillance en temps réel de vos infrastructures avec des alertes instantanées et une réponse immédiate aux incidents.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Surveillance réseau en temps réel</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Alertes automatisées intelligentes</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-purple-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Équipe d'experts disponible 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Détection d'Incidents -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-red-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-search text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">🔍 Détection d'Incidents</h3>
                                <p class="text-gray-600 text-sm font-medium">IA et machine learning avancés</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Détection proactive des menaces avec notre IA propriétaire qui analyse les comportements anormaux et les signatures d'attaques.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-red-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Analyse comportementale IA</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-red-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Corrélation d'événements avancée</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-red-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Base de signatures mise à jour</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Réponse aux Menaces -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-orange-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-shield-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">⚡ Réponse aux Menaces</h3>
                                <p class="text-gray-600 text-sm font-medium">Intervention rapide et efficace</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Réponse automatisée et manuelle aux incidents avec des procédures d'escalade définies et une communication transparente.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Réponse automatisée < 5 min</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Isolation des menaces</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-orange-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Communication temps réel</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rapports d'Analyse -->
                <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition duration-500 border-l-4 border-blue-500 group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-50/50 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <i class="fas fa-chart-line text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-1">📊 Rapports d'Analyse</h3>
                                <p class="text-gray-600 text-sm font-medium">Intelligence et insights détaillés</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-8 leading-relaxed">
                            Rapports détaillés et tableaux de bord personnalisés pour une visibilité complète sur votre posture de sécurité.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Dashboards en temps réel</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Rapports de conformité</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-medium">Analyses de tendances</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-purple-900 to-indigo-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Sécurisez Votre Infrastructure Maintenant</h2>
            <p class="text-xl text-purple-100 mb-8">
                Contactez nos experts SOC pour une évaluation gratuite de votre posture de sécurité
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index.php#contact" class="bg-white hover:bg-gray-100 text-purple-900 px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    🚨 Audit sécurité gratuit
                </a>
                <a href="index.php#contact" class="border-2 border-white text-white hover:bg-white hover:text-purple-900 px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    📞 Intervention d'urgence
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
                        Centre opérationnel de sécurité et surveillance continue pour votre protection digitale.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services SOC</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition duration-300">Monitoring 24/7</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Détection incidents</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Réponse menaces</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Rapports analyse</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Autres Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cybersecurite.php" class="hover:text-white transition duration-300">Cybersécurité</a></li>
                        <li><a href="infrastructure.php" class="hover:text-white transition duration-300">Infrastructure</a></li>
                        <li><a href="digitalisation.php" class="hover:text-white transition duration-300">Digitalisation</a></li>
                        <li><a href="index.php#services" class="hover:text-white transition duration-300">Formation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Urgence</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>SOC: +33 1 23 45 67 89</li>
                        <li>Email: soc@obaxion.com</li>
                        <li>Urgence 24/7</li>
                        <li>Temps réponse < 15 min</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Obaxion SOC. Protection continue garantie.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
