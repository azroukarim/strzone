<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | Maintenance</title>
    <meta name="description" content="STREAMTV est actuellement en maintenance pour vous offrir une meilleure expérience.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;900&family=Urbanist:wght@800;900&display=swap" rel="stylesheet">
    
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
            position: relative;
            background: radial-gradient(circle at center, #111 0%, #000 100%);
            overflow: hidden;
            text-align: center;
            padding: 2rem;
        }

        .bg-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(204, 255, 0, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulse-glow 8s infinite alternate;
        }

        @keyframes pulse-glow {
            from { transform: scale(0.8); opacity: 0.3; }
            to { transform: scale(1.2); opacity: 0.6; }
        }

        .maintenance-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 40px;
            padding: 4rem 2rem;
            max-width: 800px;
            width: 100%;
            position: relative;
            z-index: 10;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .logo-pulse {
            font-size: 3rem;
            font-weight: 900;
            font-family: 'Urbanist', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #ccff00 80%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 2rem;
            display: inline-block;
            animation: logo-float 4s ease-in-out infinite;
        }

        @keyframes logo-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .maintenance-title {
            font-size: 3.5rem;
            font-family: 'Urbanist', sans-serif;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .neon-text {
            color: #ccff00;
            text-shadow: 0 0 20px rgba(204, 255, 0, 0.4);
        }

        .progress-container {
            width: 100%;
            max-width: 400px;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 2.5rem auto;
            overflow: hidden;
            position: relative;
        }

        .progress-bar-inner {
            height: 100%;
            background: #ccff00;
            width: 65%;
            border-radius: 10px;
            box-shadow: 0 0 15px #ccff00;
            animation: progress-animation 3s ease-in-out infinite alternate;
        }

        @keyframes progress-animation {
            from { width: 30%; }
            to { width: 85%; }
        }

        .contact-box {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .wa-btn-maintenance {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #25D366;
            color: white;
            padding: 0.6rem 1.4rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none !important;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.2);
        }

        .wa-btn-maintenance:hover {
            transform: scale(1.05) translateY(-3px);
            box-shadow: 0 15px 30px rgba(37, 211, 102, 0.4);
            color: white;
        }

        .wa-btn-maintenance svg {
            width: 18px;
            height: 18px;
            fill: white;
        }

        @media (max-width: 768px) {
            .maintenance-title { font-size: 2.2rem; }
            .logo-pulse { font-size: 2.2rem; }
            .maintenance-card { padding: 3rem 1.5rem; }
        }
    </style>
</head>
<body class="bg-black">

    <div class="maintenance-wrapper bg-stadium">
        <div class="bg-glow"></div>
        
        <div class="maintenance-card fade-up visible">
            <a href="#" class="logo-pulse">STREAMTV</a>
            
            <h1 class="maintenance-title">
                <span data-key="maint_title_1">Site en</span><br>
                <span class="neon-text" data-key="maint_title_2">Maintenance</span>
            </h1>
            
            <p class="text-xl text-gray-400 max-w-lg mx-auto mb-8" data-key="maint_desc">
                Nous améliorons notre plateforme pour vous offrir une expérience de streaming inégalée. Revenez très bientôt !
            </p>

            <div class="progress-container">
                <div class="progress-bar-inner"></div>
            </div>
            
            <p class="text-[#ccff00] font-bold uppercase tracking-widest text-sm" data-key="maint_status">
                Optimisation en cours... 85%
            </p>

            <div class="contact-box">
                <p class="text-gray-500 mb-6" data-key="maint_contact_text">Besoin d'aide ou d'un abonnement ?</p>
                <a href="https://wa.me/212670965351?text=Bonjour,%20je%20souhaite%20m'abonner%20ou%20j'ai%20une%20question%20pendant%20la%20maintenance." class="wa-btn-maintenance">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/></svg>
                    <span data-key="maint_wa_btn">Contactez-nous sur WhatsApp</span>
                </a>
            </div>
            
            <div class="mt-8 flex justify-center">
                <div class="dropdown">
                    <button class="lang-btn dropdown-toggle" type="button" id="langDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>🌐</span> <span class="lang-text" id="langText">FR</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdownBtn" style="background: rgba(0, 0, 0, 0.95); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);">
                        <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="fr">🇫🇷 Français</a></li>
                        <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="en">🇬🇧 English</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <p class="absolute bottom-8 text-gray-600 text-sm" data-key="copyright">
            Tous droits réservés © STREAMTV 2025
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inline translation logic to keep it independent
        const translations = {
            fr: {
                maint_title_1: "Site en", maint_title_2: "Maintenance",
                maint_desc: "Nous améliorons notre plateforme pour vous offrir une expérience de streaming inégalée. Revenez très bientôt !",
                maint_status: "Optimisation en cours... 85%",
                maint_contact_text: "Besoin d'aide ou d'un abonnement ?",
                maint_wa_btn: "Contactez-nous sur WhatsApp",
                copyright: "Tous droits réservés © STREAMTV 2025"
            },
            en: {
                maint_title_1: "Under", maint_title_2: "Maintenance",
                maint_desc: "We are improving our platform to provide you with an unparalleled streaming experience. Come back very soon!",
                maint_status: "Optimization in progress... 85%",
                maint_contact_text: "Need help or a subscription?",
                maint_wa_btn: "Contact us on WhatsApp",
                copyright: "All rights reserved © STREAMTV 2025"
            }
        };

        let currentLang = localStorage.getItem('streamtv_lang') || 'fr';

        function updateLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('streamtv_lang', lang);
            const t = translations[lang];
            document.querySelectorAll('[data-key]').forEach(el => {
                const key = el.dataset.key;
                if (t[key]) el.innerHTML = t[key];
            });
            const langBtnText = document.getElementById('langText');
            const langBtnSpan = document.querySelector('#langDropdownBtn span:first-child');
            if (lang === 'fr') { 
                langBtnText.textContent = ' FR'; 
                langBtnSpan.textContent = '🌐';
            } else { 
                langBtnText.textContent = ' EN'; 
                langBtnSpan.textContent = '🇬🇧';
            }
        }

        document.querySelectorAll('.lang-select-btn').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                updateLanguage(link.dataset.lang);
            });
        });

        updateLanguage(currentLang);
    </script>
</body>
</html>
