<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Obaxion - Solutions Informatiques Intégrées</title>
    <meta name="description" content="Obaxion, spécialiste en intégration de solutions informatiques : Cybersécurité, Développement, Marketing Digital, SOC et Gestion de Projets">
    <?php include 'header.php'; ?>
</head>
<body class="font-sans">
    <?php include 'nav.php'; ?>

    <!-- Hero Section -->
    <section id="accueil" class="text-white pt-20 relative overflow-hidden" style="background-image: url('img/banner/banner-1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <div class="mb-6">
                    <span class="inline-block bg-accent/30 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 border border-accent/50" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8); backdrop-filter: blur(10px);">
                        🔐 Votre Partenaire Cybersécurité & Digital
                    </span>
                </div>
                <h1 class="text-4xl md:text-7xl font-bold mb-8 leading-tight" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">
                    <span class="text-accent" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">OBAXION</span> : Votre <span class="text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Bouclier</span><br>
                    dans l'<span class="text-accent" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Univers Numérique</span>
                </h1>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto text-white leading-relaxed" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8); background: rgba(0,0,0,0.3); padding: 20px; border-radius: 15px; backdrop-filter: blur(5px);">
                    Experts en cybersécurité et solutions digitales innovantes.<br>
                    <strong class="text-white">Sécurisons et digitalisons votre avenir ensemble.</strong>
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
                    <a href="#services" class="bg-secondary hover:bg-accent text-white px-10 py-4 rounded-xl font-bold text-lg transition duration-300 transform hover:scale-105 shadow-2xl">
                        🚀 Découvrir nos solutions
                    </a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-primary px-10 py-4 rounded-xl font-bold text-lg transition duration-300">
                        💬 Parlons de votre projet
                    </a>
                </div>
                
                <!-- Stats rapides -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-accent mb-2">10+</div>
                        <div class="text-gray-300 text-sm">Années d'expertise</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-accent mb-2">200+</div>
                        <div class="text-gray-300 text-sm">Projets réalisés</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-accent mb-2">24/7</div>
                        <div class="text-gray-300 text-sm">Support & SOC</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-accent mb-2">100%</div>
                        <div class="text-gray-300 text-sm">Satisfaction client</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bottom">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16 fill-white">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    💼 Nos Domaines d'Expertise
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-primary mb-6">Donnez à votre entreprise<br>les moyens d'agir</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des solutions de pointe adaptées aux défis du cyberespace moderne.<br>
                    <strong>Votre sécurité, notre priorité absolue.</strong>
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cybersécurité -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-primary">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-primary to-dark text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-shield-alt text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">🛡️ Cybersécurité</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Protégez vos données et infrastructures critiques avec nos solutions complètes de sécurité avancée
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-primary mr-3"></i>Audit & évaluation des risques</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-primary mr-3"></i>Détection d'incidents (EDR/XDR)</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-primary mr-3"></i>Prévention des cyberattaques</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-primary mr-3"></i>Sécurisation réseau 24/7</li>
                        </ul>
                        <div class="mt-6">
                            <a href="cybersecurite" class="inline-block bg-primary hover:bg-dark text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Infrastructure & Réseau -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-secondary">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-secondary to-accent text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-network-wired text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">🌐 Infrastructure & Réseau</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Conception et déploiement d'infrastructures réseau robustes et évolutives
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Câblage structuré</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Vidéosurveillance IP</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Téléphonie IP</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Solutions collaboratives</li>
                        </ul>
                        <div class="mt-6">
                            <a href="infrastructure" class="inline-block bg-secondary hover:bg-accent text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- AMOA & Digitalisation -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-accent">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-accent to-secondary text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-rocket text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">🚀 AMOA & Digitalisation</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Accompagnement stratégique pour une transformation digitale réussie
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Accompagnement AMOA</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Développement d'applications</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Digitalisation des processus</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Transformation agile</li>
                        </ul>
                        <div class="mt-6">
                            <a href="digitalisation" class="inline-block bg-accent hover:bg-secondary text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SOC & Surveillance -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-dark">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-dark to-primary text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-eye text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">👁️ SOC & Surveillance</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Centre opérationnel de sécurité pour une surveillance continue et proactive
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-dark mr-3"></i>Monitoring 24/7/365</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-dark mr-3"></i>Détection d'incidents</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-dark mr-3"></i>Réponse aux menaces</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-dark mr-3"></i>Rapports d'analyse</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#contact" class="inline-block bg-dark hover:bg-primary text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Formation & Sensibilisation -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-accent">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-accent to-secondary text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-graduation-cap text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">🎓 Formation & Sensibilisation</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Formations certifiantes et sensibilisation pour protéger vos équipes
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Formations cybersécurité</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Certifications IT</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Normes ISO</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-accent mr-3"></i>Sensibilisation sécurité</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#contact" class="inline-block bg-accent hover:bg-secondary text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Expertise RH -->
                <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-500 transform hover:-translate-y-3 border-l-4 border-secondary">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-secondary to-accent text-white w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                            <i class="fas fa-users text-3xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">👥 Expertise RH</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Experts qualifiés pour renforcer vos équipes opérationnelles
                        </p>
                        <ul class="text-left text-gray-600 space-y-3">
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Experts cybersécurité</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Spécialistes IT</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Consultants digitalisation</li>
                            <li class="flex items-center"><i class="fas fa-check-circle text-secondary mr-3"></i>Architectes infrastructures</li>
                        </ul>
                        <div class="mt-6">
                            <a href="#contact" class="inline-block bg-secondary hover:bg-accent text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Processus -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    🔒 Protégeons vos données
                </span>
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Notre Méthodologie Éprouvée</h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                    Une approche structurée en 3 étapes pour garantir la sécurité et l'intégrité de vos actifs numériques
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Étape 1 -->
                <div class="text-center group">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition duration-300 transform hover:-translate-y-2">
                        <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300">
                            01
                        </div>
                        <h3 class="text-2xl font-bold mb-4">🔍 Analyse & Collecte</h3>
                        <p class="text-blue-100 leading-relaxed">
                            Nous identifions vos données sensibles et collectons les informations nécessaires pour sécuriser vos actifs stratégiques.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-blue-200">
                            <div>• Audit complet des systèmes</div>
                            <div>• Cartographie des données</div>
                            <div>• Identification des vulnérabilités</div>
                        </div>
                    </div>
                </div>
                
                <!-- Étape 2 -->
                <div class="text-center group">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition duration-300 transform hover:-translate-y-2">
                        <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300">
                            02
                        </div>
                        <h3 class="text-2xl font-bold mb-4">⚖️ Évaluation & Préconisations</h3>
                        <p class="text-blue-100 leading-relaxed">
                            Nous analysons les vulnérabilités et vous fournissons un rapport détaillé avec des solutions adaptées pour réduire les risques.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-blue-200">
                            <div>• Analyse des risques</div>
                            <div>• Rapport de conformité</div>
                            <div>• Plan d'action personnalisé</div>
                        </div>
                    </div>
                </div>
                
                <!-- Étape 3 -->
                <div class="text-center group">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition duration-300 transform hover:-translate-y-2">
                        <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300">
                            03
                        </div>
                        <h3 class="text-2xl font-bold mb-4">🛡️ Mise en Place Sécurisée</h3>
                        <p class="text-blue-100 leading-relaxed">
                            Nous implémentons des solutions sur-mesure (protection, surveillance, conformité) pour garantir la confidentialité et l'intégrité de vos données.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-blue-200">
                            <div>• Déploiement des solutions</div>
                            <div>• Formation des équipes</div>
                            <div>• Surveillance continue</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#contact" class="inline-block bg-white text-primary px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition duration-300 transform hover:scale-105">
                    🚀 Démarrer votre projet sécurisé
                </a>
            </div>
        </div>
    </section>

    <!-- À propos Section -->
    <section id="apropos" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    🏢 Qui sommes-nous ?
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Gardiens de l'économie numérique</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    <strong>Obaxion</strong> est une entreprise innovante spécialisée dans l'intégration de solutions informatiques de pointe. 
                    Nous garantissons la souveraineté numérique des organisations en offrant des solutions adaptées aux défis du cyberespace moderne.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Notre Mission</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Nous sommes les <strong class="text-primary">gardiens de votre transformation digitale</strong>. 
                        Notre expertise couvre la cybersécurité, l'infrastructure réseau, la digitalisation, 
                        la surveillance SOC et l'accompagnement stratégique.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Avec plus de <strong class="text-primary">10 années d'expérience</strong>, nous protégeons 
                        et accompagnons nos clients dans leur évolution technologique avec des solutions 
                        éprouvées et innovantes.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-red-50 p-4 rounded-xl text-center border-l-4 border-red-500">
                            <div class="text-3xl font-bold text-red-600 mb-2">200+</div>
                            <div class="text-gray-600 text-sm">Projets sécurisés</div>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-xl text-center border-l-4 border-blue-500">
                            <div class="text-3xl font-bold text-blue-600 mb-2">100+</div>
                            <div class="text-gray-600 text-sm">Clients protégés</div>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-xl text-center border-l-4 border-purple-500">
                            <div class="text-3xl font-bold text-purple-600 mb-2">24/7</div>
                            <div class="text-gray-600 text-sm">Surveillance SOC</div>
                        </div>
                        <div class="bg-green-50 p-4 rounded-xl text-center border-l-4 border-green-500">
                            <div class="text-3xl font-bold text-green-600 mb-2">100%</div>
                            <div class="text-gray-600 text-sm">Satisfaction</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-900 to-primary rounded-2xl p-8 text-white shadow-2xl">
                        <h3 class="text-2xl font-bold mb-6 text-accent">🏆 Crédibilité & Prestige</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-accent w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-certificate text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Certifications Internationales</h4>
                                    <p class="text-gray-300 text-sm">ISO 27001, CISSP, CEH, CompTIA Security+</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-accent w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-shield-alt text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Expertise Reconnue</h4>
                                    <p class="text-gray-300 text-sm">Partenaire officiel des leaders technologiques</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-accent w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-award text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Récompenses Sectorielles</h4>
                                    <p class="text-gray-300 text-sm">Prix d'excellence en cybersécurité 2023</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-accent w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1">
                                    <i class="fas fa-users text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-white">Équipe d'Experts</h4>
                                    <p class="text-gray-300 text-sm">Ingénieurs certifiés et consultants seniors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Section Partenaires -->
            <div class="bg-gradient-to-br from-light to-white rounded-3xl p-12 border border-secondary/10 shadow-xl">
                <div class="text-center mb-16">
                    <span class="inline-block bg-secondary/10 text-secondary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        Ecosysteme Technologique
                    </span>
                    <h3 class="text-4xl md:text-5xl font-black text-primary mb-6 relative">
                        <span class="bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
                            Nos Partenaires
                        </span>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-secondary to-accent rounded-full"></div>
                    </h3>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Des alliances privilégiées avec les géants de la technologie pour vous garantir 
                        <strong class="text-secondary">l'excellence et l'innovation</strong> dans chaque solution
                    </p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-secondary/20 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-xl mb-4 group-hover:from-blue-100 group-hover:to-blue-200 transition duration-300">
                            <img src="img/partenaires/microsoft.png" alt="Microsoft Partner Gold" class="h-16 w-auto mx-auto object-contain group-hover:scale-110 transition duration-300">
                        </div>
                        <div class="text-sm text-primary font-bold mb-1">Microsoft</div>
                        <div class="text-xs text-secondary font-medium bg-secondary/10 px-3 py-1 rounded-full inline-block">Partner Gold</div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-secondary/20 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-red-50 to-red-100 p-4 rounded-xl mb-4 group-hover:from-red-100 group-hover:to-red-200 transition duration-300">
                            <img src="img/partenaires/fortinet.png" alt="Fortinet Certified Partner" class="h-16 w-auto mx-auto object-contain group-hover:scale-110 transition duration-300">
                        </div>
                        <div class="text-sm text-primary font-bold mb-1">Fortinet</div>
                        <div class="text-xs text-secondary font-medium bg-secondary/10 px-3 py-1 rounded-full inline-block">Certified Partner</div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-secondary/20 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-100 p-4 rounded-xl mb-4 group-hover:from-blue-100 group-hover:to-cyan-200 transition duration-300">
                            <img src="img/partenaires/cisco.png" alt="Cisco Solution Partner" class="h-16 w-auto mx-auto object-contain group-hover:scale-110 transition duration-300">
                        </div>
                        <div class="text-sm text-primary font-bold mb-1">Cisco</div>
                        <div class="text-xs text-secondary font-medium bg-secondary/10 px-3 py-1 rounded-full inline-block">Solution Partner</div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-secondary/20 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-br from-orange-50 to-yellow-100 p-4 rounded-xl mb-4 group-hover:from-orange-100 group-hover:to-yellow-200 transition duration-300">
                            <img src="img/partenaires/aws.png" alt="AWS Advanced Partner" class="h-16 w-auto mx-auto object-contain group-hover:scale-110 transition duration-300">
                        </div>
                        <div class="text-sm text-primary font-bold mb-1">AWS</div>
                        <div class="text-xs text-secondary font-medium bg-secondary/10 px-3 py-1 rounded-full inline-block">Advanced Partner</div>
                    </div>
                </div>
                
                <!-- Avantages des partenariats -->
                <div class="bg-white/50 backdrop-blur-sm rounded-2xl p-8 border border-secondary/10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="group">
                            <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-secondary/20 transition duration-300">
                                <i class="fas fa-certificate text-secondary text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-primary mb-2">Certifications Officielles</h4>
                            <p class="text-sm text-gray-600">Accès privilégié aux dernières technologies et formations</p>
                        </div>
                        <div class="group">
                            <div class="bg-accent/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition duration-300">
                                <i class="fas fa-rocket text-accent text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-primary mb-2">Innovation Continue</h4>
                            <p class="text-sm text-gray-600">Solutions de pointe et support technique premium</p>
                        </div>
                        <div class="group">
                            <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition duration-300">
                                <i class="fas fa-shield-alt text-primary text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-primary mb-2">Garantie Qualité</h4>
                            <p class="text-sm text-gray-600">Standards élevés et conformité internationale</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Prêt à démarrer votre projet ? Notre équipe est là pour vous accompagner
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulaire de contact -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Service d'intérêt</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option>Cybersécurité</option>
                                <option>Développement</option>
                                <option>Marketing Digital</option>
                                <option>SOC</option>
                                <option>Gestion de Projets</option>
                                <option>Intégration</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 transform hover:scale-105">
                            Envoyer le message
                        </button>
                    </form>
                </div>
                
                <!-- Informations de contact -->
                <div class="space-y-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Nos coordonnées</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Adresse</h4>
                                    <p class="text-gray-600">Cocody Abidjan</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Téléphone</h4>
                                    <p class="text-gray-600">+225 07 08 29 29 91</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-accent text-white w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600">contact@obaxion.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-primary to-secondary rounded-xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Lundi - Vendredi</span>
                                <span>9h00 - 18h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Samedi</span>
                                <span>9h00 - 12h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Dimanche</span>
                                <span>Fermé</span>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-blue-400">
                            <p class="text-blue-100">
                                <i class="fas fa-clock mr-2"></i>
                                Support d'urgence disponible 24/7 pour nos clients SOC
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'scripts.php'; ?>
</body>
</html>
