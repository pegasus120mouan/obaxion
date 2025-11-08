<?php
$page_title = "Infrastructure & Réseau - Obaxion";
$page_description = "Conception et déploiement d'infrastructures réseau robustes et évolutives";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <?php include 'header.php'; ?>
</head>
<body class="font-sans">
    <?php include 'nav.php'; ?>

    <!-- Hero Section -->
    <section class="text-white pt-20 relative overflow-hidden" style="background-image: url('img/banner/infrastructure1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-blue-600/30 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 border border-blue-500/50" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8); backdrop-filter: blur(10px);">
                        🌐 Infrastructure & Réseau
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-8" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                    Infrastructures <span class="text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Robustes & Évolutives</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); background: rgba(0,0,0,0.3); padding: 20px; border-radius: 15px; backdrop-filter: blur(5px);">
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
                <a href="index#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Demander une étude
                </a>
                <a href="index#contact" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    💬 Parler à un expert
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
</body>
</html>
