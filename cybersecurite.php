<?php
$page_title = "Cybersécurité - Obaxion";
$page_description = "Solutions complètes de cybersécurité pour protéger vos données et infrastructures critiques";
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
    <section class="text-white pt-20 relative overflow-hidden" style="background-image: url('img/banner/soc1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-red-600/30 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 border border-red-500/50" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8); backdrop-filter: blur(10px);">
                        🛡️ Cybersécurité Avancée
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-8" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                    Protégez vos <span class="text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Données Critiques</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); background: rgba(0,0,0,0.3); padding: 20px; border-radius: 15px; backdrop-filter: blur(5px);">
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
                <a href="index#contact" class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Demander un audit gratuit
                </a>
                <a href="index#contact" class="border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    💬 Parler à un expert
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
</body>
</html>
