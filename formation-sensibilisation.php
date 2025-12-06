<?php
$page_title = "Formation & Sensibilisation - Obaxion";
$page_description = "Programmes de formation et sensibilisation en cybersécurité pour renforcer la sécurité humaine de votre organisation";
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
    <section class="text-white pt-20 relative overflow-hidden" style="background-image: url('img/banner/formation.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-green-600/30 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 border border-green-500/50" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8); backdrop-filter: blur(10px);">
                        🎓 Formation & Sensibilisation
                    </span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-8" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                    Renforcez votre <span class="text-green-400" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Sécurité Humaine</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); background: rgba(0,0,0,0.3); padding: 20px; border-radius: 15px; backdrop-filter: blur(5px);">
                    Programmes de formation et sensibilisation pour développer une culture de cybersécurité au sein de votre organisation
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#programmes" class="bg-white text-green-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                        🚀 Découvrir nos programmes
                    </a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-green-600 px-10 py-4 rounded-xl font-bold text-lg transition duration-300">
                        💬 Demander un devis
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Programmes Section -->
    <section id="programmes" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Nos Programmes de Formation</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des formations adaptées à tous les niveaux pour créer une culture de sécurité durable
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Sensibilisation Générale -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-green-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Sensibilisation Générale</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Formation de base pour tous les collaborateurs sur les bonnes pratiques de cybersécurité au quotidien.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Reconnaissance des emails de phishing</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Gestion sécurisée des mots de passe</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Navigation web sécurisée</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i>Protection des données personnelles</li>
                    </ul>
                </div>

                <!-- Formation Technique -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-blue-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-cogs text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Formation Technique Avancée</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Formations spécialisées pour les équipes IT et les responsables sécurité sur les technologies avancées.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Analyse des menaces et incidents</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Sécurisation des infrastructures</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Tests d'intrusion éthiques</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-blue-500 mr-3"></i>Forensic numérique</li>
                    </ul>
                </div>

                <!-- Conformité RGPD -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-purple-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-balance-scale text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Conformité & RGPD</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Formation sur les réglementations en vigueur et les obligations légales en matière de protection des données.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Réglementation RGPD</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Gestion des violations de données</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Droits des personnes concernées</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-purple-500 mr-3"></i>Documentation et registres</li>
                    </ul>
                </div>

                <!-- Simulation d'Attaques -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-red-500">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-500 text-white w-16 h-16 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-bug text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Simulations d'Attaques</h3>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Exercices pratiques et simulations d'attaques pour tester et améliorer les réflexes de sécurité.
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Campagnes de phishing simulé</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Tests de réaction aux incidents</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Exercices de crise cyber</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-red-500 mr-3"></i>Évaluation des comportements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Méthodes Section -->
    <section class="py-20 bg-gradient-to-br from-green-600 to-green-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Notre Approche Pédagogique</h2>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Méthodes d'apprentissage innovantes et adaptées à votre contexte professionnel
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">01</div>
                        <h3 class="text-xl font-bold mb-3">🎯 Évaluation</h3>
                        <p class="text-green-100 text-sm">Analyse des besoins et du niveau de maturité sécurité</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">02</div>
                        <h3 class="text-xl font-bold mb-3">📚 Formation</h3>
                        <p class="text-green-100 text-sm">Sessions interactives adaptées aux profils et métiers</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">03</div>
                        <h3 class="text-xl font-bold mb-3">🎮 Pratique</h3>
                        <p class="text-green-100 text-sm">Exercices pratiques et mises en situation réelles</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
                        <div class="bg-white text-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">04</div>
                        <h3 class="text-xl font-bold mb-3">📊 Suivi</h3>
                        <p class="text-green-100 text-sm">Évaluation continue et amélioration des compétences</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Avantages Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Pourquoi Choisir Nos Formations ?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des avantages concrets pour votre organisation et vos collaborateurs
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-certificate text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Certifications Reconnues</h3>
                    <p class="text-gray-600">Formations certifiantes reconnues par les organismes professionnels</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users-cog text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Formateurs Experts</h3>
                    <p class="text-gray-600">Équipe de formateurs certifiés avec une expérience terrain</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Suivi Personnalisé</h3>
                    <p class="text-gray-600">Accompagnement sur mesure et suivi des progrès individuels</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Développez Vos Compétences en Cybersécurité</h2>
            <p class="text-xl text-gray-600 mb-8">
                Contactez-nous pour élaborer un programme de formation adapté à vos besoins
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="index#contact" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105">
                    📞 Demander un programme sur mesure
                </a>
                <a href="index#contact" class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition duration-300">
                    💬 Parler à un formateur
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
</body>
</html>
