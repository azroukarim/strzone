<?php
/**
 * STREAMTV - Final Original Header Restoration
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Urbanist:wght@800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css?v=5" rel="stylesheet">

    <style>
        /* CSS to ensure the menu opens and looks like the image */
        .navbar-toggler { border: none !important; padding: 0 !important; }
        .navbar-toggler:focus { shadow: none !important; outline: none !important; }
        
        .collapse.show {
            display: block !important;
            background: rgba(0, 0, 0, 0.95);
            border-radius: 20px;
            margin-top: 15px;
            padding: 2rem 1rem;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .custom-nav-link {
            color: #fff !important;
            font-weight: 800 !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0.8rem 2rem !important;
            border-radius: 50px !important;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .custom-nav-link.active {
            background: #ccff00 !important;
            color: #000 !important;
            box-shadow: 0 5px 20px rgba(204, 255, 0, 0.3);
        }

        @media (max-width: 991px) {
            .navbar-nav { gap: 1rem !important; }
        }
    </style>
</head>
<body class="bg-black text-white">

    <nav class="navbar navbar-expand-lg main-header sticky-top py-3 bg-black/90 backdrop-blur-lg border-b border-white/5">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand brand-name m-0 text-[#ccff00] font-black text-2xl" style="font-family: 'Urbanist';">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" id="mainToggler">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ccff00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <div class="collapse navbar-collapse" id="streamNavbar">
                <ul class="navbar-nav mx-auto text-center mt-4 mt-lg-0">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">ACCUEIL</a></li>
                    <li class="nav-item"><a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>">VOIR LES PLANS</a></li>
                    <li class="nav-item"><a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a></li>
                    <li class="nav-item"><a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>">PROMOS</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                </ul>
                <div class="text-center mt-4 mt-lg-0 ms-lg-4">
                    <button class="bg-white/10 px-4 py-2 rounded-full border border-white/20 text-sm">🌐 FR</button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggler = document.getElementById('mainToggler');
            const menu = document.getElementById('streamNavbar');
            if (toggler && menu) {
                toggler.addEventListener('click', function() {
                    menu.classList.toggle('show');
                });
            }
        });
    </script>
