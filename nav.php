    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 border-b-2 border-secondary/20" style="box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="index" class="flex items-center">
                            <div class="flex items-center">
                                <!-- Logo depuis img -->
                                <img src="img/logo.png" alt="Obaxion Logo" class="w-16 h-16 mr-3 object-contain">
                                <!-- Texte OBAXION stylisé -->
                                <div class="flex flex-col">
                                    <span class="text-2xl leading-none" style="font-family: 'Orbitron', monospace; letter-spacing: 2px; color: #6e9498; font-weight: 900;">OBAXION</span>
                                    <span class="text-xs px-2 py-0.5 rounded-full mt-1 inline-block w-fit" style="font-family: 'Orbitron', monospace; color: #213138; background-color: #f0f9ff; font-weight: 900;">CYBER SECURITY</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index" class="px-4 py-2 text-primary hover:text-dark hover:bg-secondary/10 rounded-xl transition duration-200 font-semibold <?php echo (basename($_SERVER['PHP_SELF'], '.php') == 'index') ? 'bg-secondary/10 text-dark' : ''; ?>">Accueil</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative dropdown-group group">
                        <button class="px-4 py-2 text-primary hover:text-dark hover:bg-secondary/10 rounded-xl transition duration-200 font-semibold flex items-center">
                            Services
                            <i class="fas fa-chevron-down ml-2 text-xs group-hover:rotate-180 transition duration-200"></i>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                            <div class="p-2">
                                <a href="cybersecurite" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-shield-alt text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Cybersécurité</div>
                                        <div class="text-xs text-gray-500">Protection & audit sécurité</div>
                                    </div>
                                </a>
                                
                                <a href="infrastructure" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-network-wired text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Infrastructure & Réseau</div>
                                        <div class="text-xs text-gray-500">Câblage & téléphonie IP</div>
                                    </div>
                                </a>
                                
                                <a href="digitalisation" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-rocket text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">AMOA & Digitalisation</div>
                                        <div class="text-xs text-gray-500">Transformation digitale</div>
                                    </div>
                                </a>
                                
                                <a href="soc-surveillance" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-eye text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">SOC & Surveillance</div>
                                        <div class="text-xs text-gray-500">Monitoring 24/7/365</div>
                                    </div>
                                </a>
                                
                                <a href="index#services" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-3 group-hover/item:scale-110 transition duration-200">
                                        <i class="fas fa-graduation-cap text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold">Formation & Sensibilisation</div>
                                        <div class="text-xs text-gray-500">Cybersécurité & RGPD</div>
                                    </div>
                                </a>
                                
                                <a href="index#services" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-xl transition duration-200 group/item">
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
                                <a href="index#contact" class="flex items-center justify-center w-full px-4 py-2 bg-gradient-to-r from-secondary to-accent text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                                    <i class="fas fa-calendar-check mr-2 text-sm"></i>
                                    Consultation gratuite
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="apropos" class="px-4 py-2 text-primary hover:text-dark hover:bg-secondary/10 rounded-xl transition duration-200 font-semibold <?php echo (basename($_SERVER['PHP_SELF'], '.php') == 'apropos') ? 'bg-secondary/10 text-dark' : ''; ?>">À propos</a>
                    <a href="index#contact" class="px-4 py-2 text-primary hover:text-dark hover:bg-secondary/10 rounded-xl transition duration-200 font-semibold">Contact</a>
                    <div class="ml-4 pl-4 border-l border-gray-200">
                        <a href="index#contact" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-secondary to-accent text-white rounded-xl font-semibold hover:shadow-lg transition duration-200 transform hover:scale-105">
                            <i class="fas fa-calendar-check mr-2 text-sm"></i>
                            Consultation gratuite
                        </a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index" class="block px-3 py-2 text-gray-700 hover:text-primary">Accueil</a>
                <a href="index#services" class="block px-3 py-2 text-gray-700 hover:text-primary">Services</a>
                <a href="apropos" class="block px-3 py-2 text-gray-700 hover:text-primary">À propos</a>
                <a href="index#contact" class="block px-3 py-2 text-gray-700 hover:text-primary">Contact</a>
            </div>
        </div>
    </nav>
