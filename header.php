<?php
/**
 * STREAMTV - Universal Header (Restored Original Logic)
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
    <link href="css/style.css?v=4" rel="stylesheet">
    
    <style>
        /* Original Menu Feel Restored */
        .main-header {
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            padding: 1rem 0;
        }
        .custom-nav-link {
            font-weight: 700;
            color: #fff !important;
            transition: all 0.3s ease;
            padding: 0.5rem 1.2rem !important;
            border-radius: 30px;
        }
        .custom-nav-link.active {
            background: #ccff00;
            color: #000 !important;
        }
        
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(0, 0, 0, 0.95);
                margin-top: 1rem;
                padding: 2rem 1rem;
                border-radius: 20px;
                border: 1px solid rgba(255,255,255,0.1);
            }
            .navbar-nav {
                gap: 1rem !important;
            }
            .custom-nav-link {
                display: inline-block;
                width: auto;
                min-width: 200px;
            }
        }
    </style>
</head>
<body class="bg-black text-white">

    <nav class="navbar navbar-expand-lg main-header sticky-top">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name m-0">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#streamNavbar" style="border: none !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ccff00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2 mt-3 mt-lg-0 text-center">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">ACCUEIL</a></li>
                    <li class="nav-item"><a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>">VOIR LES PLANS</a></li>
                    <li class="nav-item"><a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a></li>
                    <li class="nav-item"><a href="test-plan.php" class="nav-link custom-nav-link <?php echo ($activePage == 'test') ? 'active' : ''; ?>">TEST GRATUIT</a></li>
                    <li class="nav-item"><a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>">DOWNLOADS</a></li>
                    <li class="nav-item"><a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>">PROMOS</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                </ul>
                <div class="d-flex justify-content-center mt-3 mt-lg-0">
                    <div class="dropdown">
                        <button class="lang-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 30px; padding: 0.5rem 1rem; color: white;">
                            <span>🌐</span> FR
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="background: rgba(0,0,0,0.9); border: 1px solid rgba(255,255,255,0.1);">
                            <li><a class="dropdown-item text-white" href="#">Français</a></li>
                            <li><a class="dropdown-item text-white" href="#">English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
