<?php
/**
 * STREAMTV - Header
 */
include_once 'maintenance_check.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | <?php echo $pageTitle ?? 'Streaming Illimité'; ?></title>
    <meta name="description" content="Découvrez l'expérience STREAMTV : Sports en direct, séries, films et +20,000 chaînes. Offre 4K Ultra HD avec support 24/7.">
    <meta name="keywords" content="STREAMTV, IPTV, streaming, sports, films, séries, 4K, Maroc, abonnement">
    <meta name="author" content="STREAMTV">
    <link rel="canonical" href="https://streamtv.crd.co/">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://streamtv.crd.co/">
    <meta property="og:title" content="STREAMTV | <?php echo $pageTitle ?? 'Streaming Illimité'; ?>">
    <meta property="og:description" content="Découvrez l'expérience STREAMTV : Sports en direct, séries, films et +20,000 chaînes. Offre 4K Ultra HD avec support 24/7.">
    <meta property="og:image" content="https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/png/header.jpg">
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://streamtv.crd.co/">
    <meta property="twitter:title" content="STREAMTV | <?php echo $pageTitle ?? 'Streaming Illimité'; ?>">
    <meta property="twitter:description" content="Découvrez l'expérience STREAMTV : Sports en direct, séries, films et +20,000 chaînes. Offre 4K Ultra HD avec support 24/7.">
    <meta property="twitter:image" content="https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/png/header.jpg">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300&family=Montserrat:wght@400;500;600;700;800;900&family=Urbanist:wght@800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css?v=20" rel="stylesheet">
    
    <style>
        /* Visibility & Animation CSS */
        .fade-up, .fade-down, .fade-right, .scale-in { opacity: 0; transition: opacity 0.8s ease, transform 0.8s ease; }
        .visible { opacity: 1 !important; transform: none !important; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { animation: marquee 15s linear infinite !important; display: flex !important; }
        .title-glow { text-shadow: 0 0 15px rgba(204, 255, 0, 0.5); }
        .font-urbanist { font-family: 'Urbanist', sans-serif; }
        
        /* Static Black Background + Sliding Text */
        #preloader { position: fixed; inset: 0; background: #000; z-index: 9999; display: flex; align-items: center; justify-content: center; overflow: hidden; opacity: 1; transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
        .loader-content { text-align: center; transform: translateX(-150%); animation: text-slide 2.2s cubic-bezier(0.85, 0, 0.15, 1) forwards; }
        .loader-text { font-family: 'Urbanist', sans-serif; font-size: 5rem; font-weight: 900; color: #ccff00; letter-spacing: 12px; text-shadow: 0 0 40px rgba(204, 255, 0, 0.8); }
        
        @media (max-width: 768px) {
            .loader-text { font-size: 2.2rem; letter-spacing: 5px; }
        }
        
        @keyframes text-slide {
            0% { transform: translateX(-100vw); }
            20% { transform: translateX(0); } /* Fast In */
            80% { transform: translateX(0); } /* Hold 1s */
            100% { transform: translateX(100vw); } /* Fast Out */
        }

        /* Forced Visibility Control for Countdown & Pages */
        <?php if ($show_countdown === 'off'): ?>
        .glow-divider, .countdown-container, #cd-days, #cd-hours, #cd-minutes, #cd-seconds, [data-key^="countdown_"], img[alt="FIFA 2026"] {
            display: none !important; visibility: hidden !important; height: 0 !important; margin: 0 !important; padding: 0 !important; opacity: 0 !important;
        }
        <?php endif; ?>
    </style>

    <!-- InfinityFree Emergency Visibility -->
    <script>
        (function() {
            setTimeout(function() {
                var els = document.querySelectorAll('.fade-up, .fade-down, .fade-right, .scale-in');
                for (var i = 0; i < els.length; i++) {
                    var el = els[i];
                    if (window.getComputedStyle(el).opacity === "0" || el.style.opacity === "0") {
                        el.style.setProperty('opacity', '1', 'important');
                        el.style.setProperty('transform', 'none', 'important');
                        el.style.setProperty('visibility', 'visible', 'important');
                    }
                }
            }, 2000);
        })();
    </script>
    <script src="js/maintenance-check.js"></script>
</head>
<body>
    <?php if (isset($showPreloader) && $showPreloader): ?>
    <!-- Preloader / Splash Screen -->
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-text">STREAMTV</div>
        </div>
    </div>
    <script>
        // Hide preloader (static background) after the text finishes sliding
        setTimeout(function() {
            var preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.opacity = '0';
                setTimeout(function() { preloader.style.display = 'none'; }, 800);
            }
        }, 2300); 
    </script>
    <?php endif; ?>

    <audio id="bgAudio" loop preload="auto">
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-17.mp3" type="audio/mpeg">
    </audio>

    <nav class="navbar navbar-expand-lg main-header">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name m-0">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#streamNavbar" aria-controls="streamNavbar" aria-expanded="false" aria-label="Toggle navigation" style="border-color: rgba(255,255,255,0.1);">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ccff00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2 mt-3 mt-lg-0 text-center">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>" data-key="nav_home">ACCUEIL</a>
                    </li>
                    
                    <?php if ($global_site_settings['page_plans'] === 'on'): ?>
                    <li class="nav-item">
                        <a href="plans.php" class="nav-link custom-nav-link animate-heartbeat <?php echo ($activePage == 'plans') ? 'active' : ''; ?>" data-key="nav_plans">VOIR LES PLANS</a>
                    </li>
                    <?php endif; ?>

                    <?php if ($global_site_settings['page_download'] === 'on'): ?>
                    <li class="nav-item">
                        <a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>" data-key="nav_download">TÉLÉCHARGEMENTS</a>
                    </li>
                    <?php endif; ?>

                    <?php if ($global_site_settings['page_promos'] === 'on'): ?>
                    <li class="nav-item">
                        <a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>" data-key="nav_promos">PROMOS</a>
                    </li>
                    <?php endif; ?>

                    <?php if ($global_site_settings['page_contact'] === 'on'): ?>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>" data-key="nav_contact">CONTACT</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="d-flex justify-content-center mt-3 mt-lg-0">
                    <div class="dropdown">
                        <button class="lang-btn dropdown-toggle" type="button" id="langDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 30px; padding: 0.5rem 1rem; color: white;">
                            <span>🌐</span> <span class="lang-text" id="langText">FR</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdownBtn" style="background: rgba(0, 0, 0, 0.95); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                            <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="fr" style="transition: all 0.2s;">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="en" style="transition: all 0.2s;">🇬🇧 English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
