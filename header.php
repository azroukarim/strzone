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
    
    <link href="css/style.css?v=21" rel="stylesheet">
    
    <script>
        // Emergency Visibility Fix for slow connections / InfinityFree
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var hero = document.querySelector('section h1');
                if (hero) hero.classList.add('visible');
                var anims = document.querySelectorAll('.fade-up, .fade-down, .fade-right, .scale-in');
                for (var i = 0; i < anims.length; i++) {
                    if (window.getComputedStyle(anims[i]).opacity === "0") {
                        anims[i].classList.add('visible');
                    }
                }
            }, 500); // 0.5s fallback
        });
    </script>
    
    <style>
        /* Visibility & Animation CSS */
        .fade-up, .fade-down, .fade-right, .scale-in { opacity: 0; transition: opacity 0.8s ease, transform 0.8s ease; }
        .fade-up { transform: translateY(30px); }
        .fade-down { transform: translateY(-30px); }
        .fade-right { transform: translateX(-30px); }
        .scale-in { transform: scale(0.9); }
        
        .fade-up.visible, .fade-down.visible, .fade-right.visible, .scale-in.visible { 
            opacity: 1 !important; 
            transform: none !important; 
        }
        
        .visible-force { opacity: 1 !important; visibility: visible !important; }

        /* Falling from Sky Animation */
        @keyframes dropSky {
            0% { transform: translateY(-250px) scale(0.5); opacity: 0; filter: blur(15px); }
            60% { transform: translateY(20px) scale(1.1); opacity: 1; filter: blur(0); }
            80% { transform: translateY(-10px) scale(0.98); opacity: 1; }
            100% { transform: translateY(0) scale(1); opacity: 1; }
        }
        .drop-sky { opacity: 0; }
        .drop-sky.visible { animation: dropSky 1.5s cubic-bezier(0.22, 1, 0.36, 1) forwards !important; opacity: 1 !important; }

        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { animation: marquee 15s linear infinite !important; display: flex !important; }
        .title-glow { text-shadow: 0 0 15px rgba(204, 255, 0, 0.5); }
        .font-urbanist { font-family: 'Urbanist', sans-serif; }

        /* Premium Glow Divider */
        .glow-divider {
            height: 2px;
            width: 80px;
            background: #ccff00;
            margin: 1.5rem auto;
            border-radius: 99px;
            box-shadow: 0 0 15px rgba(204, 255, 0, 0.8), 0 0 5px rgba(204, 255, 0, 0.4);
            position: relative;
        }
        .glow-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150%;
            height: 100%;
            background: radial-gradient(circle, rgba(204, 255, 0, 0.2) 0%, transparent 70%);
            pointer-events: none;
        }
        
        @keyframes text-slide {
            0% { transform: translateX(-100vw); }
            20% { transform: translateX(0); } /* Fast In */
            80% { transform: translateX(0); } /* Hold 1s */
            100% { transform: translateX(100vw); } /* Fast Out */
        }

        <!-- DEBUG: Countdown Status = <?php echo isset($show_countdown) ? $show_countdown : 'NULL'; ?> -->
        /* Forced Visibility Control for Countdown & Pages */
        @keyframes bounce-horizontal {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(8px); }
        }
        .animate-bounce-horizontal { animation: bounce-horizontal 1s infinite ease-in-out; }

        @keyframes bounce-vertical {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(8px); }
        }
        .animate-bounce-vertical { animation: bounce-vertical 1s infinite ease-in-out; }

        <?php if (isset($show_countdown) && trim($show_countdown) === 'off'): ?>
        .glow-divider, .countdown-container, .countdown-global-section, #cd-days, #cd-hours, #cd-minutes, #cd-seconds, [data-key^="countdown_"], img[alt="FIFA 2026"] {
            display: none !important; 
            visibility: hidden !important; 
            height: 0 !important; 
            margin: 0 !important; 
            padding: 0 !important; 
            opacity: 0 !important;
            pointer-events: none !important;
            overflow: hidden !important;
        }
        <?php endif; ?>

    </style>
</head>
<body class="bg-[#050505] text-white selection:bg-[#ccff00] selection:text-black font-inter overflow-x-hidden">

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

