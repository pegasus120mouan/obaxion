<?php
$page_title = "Cybersécurité - Obaxion";
$page_description = "Solutions complètes de cybersécurité pour protéger vos données et infrastructures critiques";
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
                            <div class="w-10 h-10 bg-gradient-to-br from-red-600 to-red-800 rounded-xl flex items-center justify-center mr-3">
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
                                <a href="cybersecurite.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-700 rounded-xl transition duration-200 group/item bg-red-50 border border-red-200">
                                    <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-shield-alt text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-red-700">Cybersécurité</div>
                                        <div class="text-xs text-red-600">Protection & audit sécurité</div>
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
                                <a href="index.php#contact" class="flex items-center justify-center w-full px-4 py-2 bg-gradient-to-r from-red-600 to-red-800 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                                    <i class="fas fa-shield-alt mr-2 text-sm"></i>
                                    Audit sécurité gratuit
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="index.php#apropos" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">À propos</a>
                    <a href="index.php#contact" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="index.php#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-red-600 to-red-800 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-shield-alt mr-2 text-sm"></i>
                            Audit sécurité gratuit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-red-600 to-red-800 text-white pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        🛡️ Cybersécurité Avancée
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-8">
                    Protégez vos <span class="text-red-200">Données Critiques</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-red-100">
                    Solutions complètes de sécurité avancée pour protéger vos infrastructures contre les cybermenaces modernes
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#solutions" class="bg-white text-red-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                        🚀 Découvrir nos solutions
                    </a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300">
                        💬 Demander un audit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Nos Solutions de Cybersécurité</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Une approche complète pour sécuriser votre écosystème numérique
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Audit & Évaluation -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-red-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-search text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Audit & Évaluation des Risques</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Analyse complète de votre infrastructure pour identifier les vulnérabilités et évaluer les risques de sécurité.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Tests d'intrusion (Pentest)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Audit de conformité (ISO 27001, RGPD)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Analyse des vulnérabilités</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Évaluation des risques métier</li>
                    </ul>
                </div>

                <!-- Détection d'Incidents -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-orange-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-orange-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-radar text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Détection d'Incidents (EDR/XDR)</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Solutions avancées de détection et réponse aux menaces en temps réel sur tous vos endpoints.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Surveillance comportementale IA</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Détection des menaces avancées (APT)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Réponse automatisée aux incidents</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Forensic et investigation</li>
                    </ul>
                </div>

                <!-- Prévention -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-blue-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Prévention des Cyberattaques</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Mise en place de barrières de sécurité multicouches pour prévenir les intrusions et attaques.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Pare-feu nouvelle génération (NGFW)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Protection anti-malware avancée</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Filtrage web et email</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Authentification multi-facteurs (MFA)</li>
                    </ul>
                </div>

                <!-- Sécurisation Réseau -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-green-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-network-wired text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Sécurisation Réseau 24/7</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Surveillance continue et sécurisation de votre infrastructure réseau avec notre SOC dédié.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Monitoring réseau en temps réel</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Segmentation réseau (Zero Trust)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>VPN sécurisé et accès distant</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Gestion des incidents 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus Section -->
    <section class="py-20 bg-gradient-to-br from-red-600 to-red-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Notre Approche Sécurisée</h2>
                <p class="text-xl text-red-100 max-w-3xl mx-auto">
                    Méthodologie éprouvée en 4 étapes pour sécuriser votre infrastructure
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">01</div>
                        <h3 class="text-xl font-bold mb-3">🔍 Audit Initial</h3>
                        <p class="text-red-100 text-sm">Évaluation complète de votre infrastructure actuelle</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">02</div>
                        <h3 class="text-xl font-bold mb-3">📋 Plan d'Action</h3>
                        <p class="text-red-100 text-sm">Stratégie personnalisée selon vos risques identifiés</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">03</div>
                        <h3 class="text-xl font-bold mb-3">🛡️ Déploiement</h3>
                        <p class="text-red-100 text-sm">Mise en place des solutions de sécurité adaptées</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">04</div>
                        <h3 class="text-xl font-bold mb-3">📊 Surveillance</h3>
                        <p class="text-red-100 text-sm">Monitoring continu et amélioration permanente</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Sécurisez Votre Entreprise Dès Aujourd'hui</h2>
            <p class="text-xl text-gray-600 mb-8">
                Contactez nos experts en cybersécurité pour un audit gratuit de votre infrastructure
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index.php#contact" class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Demander un audit gratuit
                </a>
                <a href="index.php#contact" class="border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    💬 Parler à un expert
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
                        Gardiens de votre transformation digitale et de votre cybersécurité.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cybersecurite.php" class="hover:text-white transition duration-300">Cybersécurité</a></li>
                        <li><a href="index.php#services" class="hover:text-white transition duration-300">Infrastructure</a></li>
                        <li><a href="index.php#services" class="hover:text-white transition duration-300">SOC</a></li>
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
