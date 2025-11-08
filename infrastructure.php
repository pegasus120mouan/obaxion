<?php
$page_title = "Infrastructure & Réseau - Obaxion";
$page_description = "Conception et déploiement d'infrastructures réseau robustes et évolutives";
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
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center mr-3">
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
                                
                                <a href="infrastructure.php" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item bg-blue-50 border border-blue-200">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-network-wired text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-blue-700">Infrastructure & Réseau</div>
                                        <div class="text-xs text-blue-600">Câblage & téléphonie IP</div>
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
                                <a href="index.php#contact" class="flex items-center justify-center w-full px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                                    <i class="fas fa-network-wired mr-2 text-sm"></i>
                                    Devis infrastructure gratuit
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="index.php#apropos" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">À propos</a>
                    <a href="index.php#contact" class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition duration-200 font-medium">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="index.php#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-network-wired mr-2 text-sm"></i>
                            Devis gratuit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        🌐 Infrastructure & Réseau
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-8">
                    Infrastructures <span class="text-blue-200">Robustes & Évolutives</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-blue-100">
                    Conception et déploiement d'infrastructures réseau de nouvelle génération pour votre entreprise
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#solutions" class="bg-white text-blue-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                        🚀 Nos solutions réseau
                    </a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300">
                        💬 Demander un devis
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Nos Solutions Infrastructure</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des infrastructures modernes et sécurisées pour accompagner votre croissance
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Câblage Structuré -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-blue-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-ethernet text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Câblage Structuré</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Installation de réseaux câblés haute performance selon les normes internationales.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Câblage Cat6A/Cat7 certifié</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Fibre optique multimode/monomode</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Baies de brassage et armoires</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Tests et certification Fluke</li>
                    </ul>
                </div>

                <!-- Vidéosurveillance IP -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-green-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-video text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Vidéosurveillance IP</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Systèmes de surveillance intelligents avec analyse vidéo avancée et stockage sécurisé.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Caméras 4K avec IA intégrée</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Analyse comportementale</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Stockage redondant (NVR/Cloud)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Accès mobile sécurisé</li>
                    </ul>
                </div>

                <!-- Téléphonie IP -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-purple-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-phone text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Téléphonie IP</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Solutions de communication unifiée pour optimiser vos échanges professionnels.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>IPBX virtualisé ou physique</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Softphones et applications mobiles</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Intégration CRM/ERP</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Enregistrement et supervision</li>
                    </ul>
                </div>

                <!-- Solutions Collaboratives -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-orange-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-orange-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Solutions Collaboratives</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Espaces de travail connectés et outils de collaboration moderne pour vos équipes.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Salles de réunion intelligentes</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Visioconférence HD</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Écrans interactifs tactiles</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-orange-500 mr-3"></i>Partage de contenu sans fil</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Technologies Partenaires</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Nous travaillons avec les leaders technologiques pour vous garantir les meilleures solutions
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-md transition duration-300">
                    <div class="text-2xl font-bold text-blue-600 mb-2">Cisco</div>
                    <div class="text-xs text-gray-500">Networking Solutions</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-md transition duration-300">
                    <div class="text-2xl font-bold text-green-600 mb-2">Hikvision</div>
                    <div class="text-xs text-gray-500">Video Surveillance</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-md transition duration-300">
                    <div class="text-2xl font-bold text-purple-600 mb-2">Avaya</div>
                    <div class="text-xs text-gray-500">Unified Communications</div>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center hover:shadow-md transition duration-300">
                    <div class="text-2xl font-bold text-orange-600 mb-2">Microsoft</div>
                    <div class="text-xs text-gray-500">Teams & Collaboration</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Modernisez Votre Infrastructure</h2>
            <p class="text-xl text-gray-600 mb-8">
                Contactez nos experts pour une étude personnalisée de vos besoins réseau
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index.php#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Demander une étude
                </a>
                <a href="index.php#contact" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
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
                        Gardiens de votre transformation digitale et de votre infrastructure réseau.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cybersecurite.php" class="hover:text-white transition duration-300">Cybersécurité</a></li>
                        <li><a href="infrastructure.php" class="hover:text-white transition duration-300">Infrastructure</a></li>
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
