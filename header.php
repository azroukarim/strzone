<?php
/**
 * STREAMTV - Universal Header
 */
include_once 'get_status.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | <?php echo $pageTitle ?? 'Streaming Illimité'; ?></title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@800;900&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- CSS Frameworks -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link href="css/style.css?v=3" rel="stylesheet">
    
    <style>
        /* Mobile Menu Match Image Styling */
        @media (max-width: 991px) {
            .navbar-collapse {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.98);
                backdrop-filter: blur(25px);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                z-index: 1050;
                transition: all 0.5s ease-in-out;
                opacity: 0;
                visibility: hidden;
            }
            .navbar-collapse.show {
                opacity: 1;
                visibility: visible;
            }
            .navbar-nav {
                width: 100%;
                text-align: center;
                gap: 2rem !important;
            }
            .custom-nav-link {
                font-size: 1.4rem !important;
                font-weight: 800 !important;
                text-transform: uppercase;
                letter-spacing: 2px;
                padding: 0.8rem 2.5rem !important;
                border-radius: 50px !important;
                color: #fff !important;
                transition: all 0.3s ease;
                display: inline-block;
            }
            .custom-nav-link.active {
                background: #ccff00 !important;
                color: #000 !important;
                box-shadow: 0 0 30px rgba(204, 255, 0, 0.4);
            }
            .navbar-toggler {
                position: relative;
                z-index: 1100;
                border: 1px solid rgba(255,255,255,0.2) !important;
                padding: 8px !important;
                border-radius: 10px !important;
            }
            .brand-name-mobile {
                position: absolute;
                top: 2rem;
                left: 2rem;
                z-index: 1100;
            }
            .lang-dropdown-mobile {
                margin-top: 3rem;
            }
        }
        
        /* Desktop styles remain standard but enhanced */
        @media (min-width: 992px) {
            .custom-nav-link.active {
                color: #ccff00 !important;
                border-bottom: 2px solid #ccff00;
            }
        }
    </style>
</head>
<body class="bg-black text-white">

    <?php if (isset($showPreloader) && $showPreloader): ?>
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-text">STREAMTV</div>
        </div>
    </div>
    <?php endif; ?>

    <nav class="navbar navbar-expand-lg main-header fixed-top">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#streamNavbar">
                <span class="navbar-toggler-icon" style="filter: invert(1) brightness(2);"></span>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <!-- Mobile Brand (shown only in menu) -->
                <div class="brand-name-mobile d-lg-none">
                    <span class="text-2xl font-black text-neon">STREAMTV</span>
                </div>

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">ACCUEIL</a></li>
                    <li class="nav-item"><a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>">VOIR LES PLANS</a></li>
                    <li class="nav-item"><a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a></li>
                    <li class="nav-item"><a href="test-plan.php" class="nav-link custom-nav-link <?php echo ($activePage == 'test') ? 'active' : ''; ?>">TEST GRATUIT</a></li>
                    <li class="nav-item"><a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>">DOWNLOADS</a></li>
                    <li class="nav-item"><a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>">PROMOS</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                </ul>

                <div class="lang-dropdown-mobile">
                    <div class="dropdown">
                        <button class="lang-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 30px; padding: 0.6rem 1.5rem; color: white;">
                            <span>🌐</span> FR
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="background: rgba(0,0,0,0.9); border: 1px solid rgba(255,255,255,0.1);">
                            <li><a class="dropdown-item text-white" href="#" onclick="changeLang('fr')">Français</a></li>
                            <li><a class="dropdown-item text-white" href="#" onclick="changeLang('en')">English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
