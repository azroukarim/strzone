<?php
/**
 * STREAMTV - Complete Original Header Restored
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
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@800;900&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css?v=6" rel="stylesheet">

    <style>
        .main-header { background: rgba(0,0,0,0.9); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .custom-nav-link { color: #fff !important; font-weight: 700 !important; padding: 0.5rem 1rem !important; border-radius: 30px; transition: 0.3s; }
        .custom-nav-link.active, .custom-nav-link:hover { color: #ccff00 !important; }
        
        @media (max-width: 991px) {
            .navbar-collapse.show {
                display: block !important;
                background: #000;
                padding: 20px;
                border-radius: 15px;
                margin-top: 10px;
            }
            .custom-nav-link.active { background: #ccff00; color: #000 !important; }
        }
    </style>
</head>
<body class="bg-black text-white">

    <nav class="navbar navbar-expand-lg main-header sticky-top py-3">
        <div class="container-fluid" style="max-width: 1400px;">
            <a href="index.php" class="navbar-brand text-[#ccff00] font-black text-2xl" style="font-family: 'Urbanist';">STREAMTV</a>
            
            <button class="navbar-toggler" type="button" id="togglerBtn" style="border: none !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ccff00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">ACCUEIL</a></li>
                    <li class="nav-item"><a href="plans.php" class="nav-link custom-nav-link <?php echo ($activePage == 'plans') ? 'active' : ''; ?>">PLANS</a></li>
                    <li class="nav-item"><a href="channels.php" class="nav-link custom-nav-link <?php echo ($activePage == 'channels') ? 'active' : ''; ?>">BOUQUETS</a></li>
                    <li class="nav-item"><a href="test-plan.php" class="nav-link custom-nav-link <?php echo ($activePage == 'test') ? 'active' : ''; ?>">TEST</a></li>
                    <li class="nav-item"><a href="telechargement.php" class="nav-link custom-nav-link <?php echo ($activePage == 'download') ? 'active' : ''; ?>">TÉLÉCHARGEMENTS</a></li>
                    <li class="nav-item"><a href="promos.php" class="nav-link custom-nav-link <?php echo ($activePage == 'promos') ? 'active' : ''; ?>">PROMOS</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link custom-nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                </ul>
                <div class="text-center mt-3 mt-lg-0">
                    <button class="bg-white/10 px-4 py-2 rounded-full border border-white/20 text-sm">🌐 FR</button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('togglerBtn').addEventListener('click', function() {
            document.getElementById('mainMenu').classList.toggle('show');
        });
    </script>
