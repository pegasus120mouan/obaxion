    <script>
        // Amélioration du menu déroulant Services
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownGroup = document.querySelector('.dropdown-group');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            let timeoutId;

            if (dropdownGroup && dropdownMenu) {
                // Quand on survole le groupe
                dropdownGroup.addEventListener('mouseenter', function() {
                    clearTimeout(timeoutId);
                    dropdownMenu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                    dropdownMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
                });

                // Quand on quitte le groupe
                dropdownGroup.addEventListener('mouseleave', function() {
                    timeoutId = setTimeout(function() {
                        dropdownMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                        dropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    }, 150); // Délai de 150ms avant fermeture
                });

                // Annuler la fermeture si on survole le menu
                dropdownMenu.addEventListener('mouseenter', function() {
                    clearTimeout(timeoutId);
                });

                // Fermer quand on quitte le menu
                dropdownMenu.addEventListener('mouseleave', function() {
                    timeoutId = setTimeout(function() {
                        dropdownMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                        dropdownMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    }, 150);
                });
            }

            // Menu mobile toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    <script src="script.js"></script>
