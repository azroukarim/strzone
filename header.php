<?php
/**
 * STREAMZONE - Universal Header
 */
include_once 'get_status.php'; // Check maintenance logic if needed
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300&family=Montserrat:wght@400;500;600;700;800;900&family=Urbanist:wght@800&display=swap" rel="stylesheet">
    
    <!-- CSS Frameworks -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <link href="css/style.css?v=2" rel="stylesheet">
    
    <!-- Preloader Logic -->
    <script src="js/maintenance-check.js"></script>
    
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="bg-black text-white">

    <?php if (isset($showPreloader) && $showPreloader): ?>
    <!-- Preloader / Splash Screen -->
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-text">STREAMTV</div>
        </div>
    </div>
    <?php endif; ?>

    <audio id="bgAudio" loop preload="auto">
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-17.mp3" type="audio/mpeg">
    </audio>

    <nav class="navbar navbar-expand-lg main-header">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name m-0">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#streamNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1) brightness(2);"></span>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2 mt-3 mt-lg-0 text-center">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>" data-key="nav_home">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>" data-key="nav_plans">VOIR LES PLANS</a>
                    </li>
                    <li class="nav-item">
                        <a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a>
                    </li>
                    <li class="nav-item">
                        <a href="test-plan.php" class="nav-link custom-nav-link <?php echo ($activePage == 'test') ? 'active' : ''; ?>">TEST GRATUIT</a>
                    </li>
                    <li class="nav-item">
                        <a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>" data-key="nav_download">TÉLÉCHARGEMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>" data-key="nav_promos">PROMOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>" data-key="nav_contact">CONTACT</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center mt-3 mt-lg-0">
                    <div class="dropdown">
                        <button class="lang-btn dropdown-toggle" type="button" id="langDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 30px; padding: 0.5rem 1rem; color: white;">
                            <span>🌐</span> <span class="lang-text" id="langText">FR</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdownBtn" style="background: rgba(0, 0, 0, 0.95); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                            <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="fr">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="en">🇬🇧 English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
