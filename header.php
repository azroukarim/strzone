<?php
/**
 * STREAMTV - Original Header Restored
 */
include_once 'get_status.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | <?php echo $pageTitle ?? 'Streaming Illimité'; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300&family=Montserrat:wght@400;500;600;700;800;900&family=Urbanist:wght@800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link href="css/style.css?v=2" rel="stylesheet">
    <script src="js/maintenance-check.js"></script>

    <style>
        /* Exact styles from your original index.html */
        #preloader {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: #000; display: flex; justify-content: center; align-items: center;
            z-index: 99999; transition: opacity 1.2s, visibility 1.2s;
        }
        .loader-text {
            font-family: 'Urbanist', sans-serif; font-size: 5rem; font-weight: 900;
            color: #ccff00; text-transform: uppercase; letter-spacing: 0.8rem;
            text-shadow: 0 0 30px rgba(204, 255, 0, 0.8);
            animation: fantasy-sequence 2s forwards; opacity: 0;
        }
        @keyframes fantasy-sequence {
            0% { transform: scale(0); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        #preloader.fade-out { opacity: 0; visibility: hidden; }
        @media (max-width: 768px) { .loader-text { font-size: 2.5rem; letter-spacing: 0.3rem; } }
    </style>
</head>
<body class="bg-black text-white">

    <?php if (isset($showPreloader) && $showPreloader): ?>
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-text">STREAMZONE</div>
        </div>
    </div>
    <?php endif; ?>

    <audio id="bgAudio" loop preload="auto">
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-17.mp3" type="audio/mpeg">
    </audio>

    <nav class="navbar navbar-expand-lg main-header">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name m-0">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#streamNavbar" style="border-color: rgba(255,255,255,0.1);">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ccff00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2 mt-3 mt-lg-0 text-center">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">ACCUEIL</a></li>
                    <li class="nav-item"><a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>">VOIR LES PLANS</a></li>
                    <li class="nav-item"><a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a></li>
                    <li class="nav-item"><a href="test-plan.php" class="nav-link custom-nav-link <?php echo ($activePage == 'test') ? 'active' : ''; ?>">TEST GRATUIT</a></li>
                    <li class="nav-item"><a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>">TÉLÉCHARGEMENTS</a></li>
                    <li class="nav-item"><a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>">PROMOS</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                </ul>
                <div class="d-flex justify-content-center mt-3 mt-lg-0">
                    <div class="dropdown">
                        <button class="lang-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 30px; padding: 0.5rem 1rem; color: white;">
                            <span>🌐</span> FR
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="background: rgba(0, 0, 0, 0.95); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                            <li><a class="dropdown-item text-white" href="#">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item text-white" href="#">🇬🇧 English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
