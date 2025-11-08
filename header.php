    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#213138',
                        secondary: '#6e9498',
                        accent: '#8bb5ba',
                        dark: '#1a2b32',
                        light: '#f0f7f8'
                    }
                }
            }
        }
    </script>
    <style>
        /* Amélioration du menu déroulant */
        .dropdown-menu {
            transition: all 0.3s ease;
            pointer-events: none;
        }
        .dropdown-group:hover .dropdown-menu {
            pointer-events: auto;
        }
        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 0;
            right: 0;
            height: 10px;
            background: transparent;
        }
    </style>
