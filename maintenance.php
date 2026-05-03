<?php
/**
 * STREAMTV - Maintenance Page
 * This is shown when the site is under maintenance.
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | Maintenance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@800;900&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?v=2" rel="stylesheet">
    <style>
        .maintenance-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at center, #111 0%, #000 100%);
            text-align: center;
            padding: 2rem;
        }
        .maintenance-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 40px;
            padding: 4rem 2rem;
            max-width: 800px;
            width: 100%;
        }
        .logo-pulse {
            font-size: 3rem;
            font-weight: 900;
            background: linear-gradient(135deg, #ffffff 0%, #ccff00 80%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: logo-float 4s ease-in-out infinite;
        }
        @keyframes logo-float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
        .neon-text { color: #ccff00; text-shadow: 0 0 20px rgba(204, 255, 0, 0.4); }
    </style>
</head>
<body class="bg-black text-white">
    <div class="maintenance-wrapper">
        <div class="maintenance-card">
            <div class="logo-pulse mb-4">STREAMTV</div>
            <h1 class="text-5xl font-black uppercase mb-6">Site en <span class="neon-text">Maintenance</span></h1>
            <p class="text-xl text-gray-400 mb-8">Nous améliorons notre plateforme pour vous offrir une expérience de streaming inégalée. Revenez très bientôt !</p>
            
            <div class="w-full max-w-sm mx-auto h-2 bg-white/10 rounded-full mb-4 overflow-hidden">
                <div class="h-full bg-[#ccff00] w-3/4 shadow-[0_0_15px_#ccff00] animate-pulse"></div>
            </div>
            <p class="text-[#ccff00] font-bold uppercase tracking-widest text-sm">Optimisation en cours... 85%</p>
            
            <div class="mt-12 pt-8 border-t border-white/5">
                <p class="text-gray-500 mb-6">Besoin d'aide ou d'un abonnement ?</p>
                <a href="https://wa.me/212670965351" class="bg-[#25D366] text-white px-8 py-3 rounded-full font-bold inline-flex items-center gap-2 hover:scale-105 transition-all">
                    Contactez-nous sur WhatsApp
                </a>
            </div>
        </div>
        <p class="mt-12 text-gray-600 text-sm">© 2024 STREAMTV - Tous droits réservés.</p>
    </div>
</body>
</html>
