<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | Maintenance</title>
    <meta name="description" content="STREAMTV est actuellement en maintenance pour vous offrir une meilleure expérience.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@900&family=Urbanist:wght@900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    
    <style>
        :root {
            --primary: #ccff00;
            --primary-glow: rgba(204, 255, 0, 0.4);
            --bg-dark: #050505;
        }

        body {
            background-color: var(--bg-dark);
            color: white;
            font-family: 'Inter', sans-serif;
            margin: 0;
            overflow: hidden;
        }

        .maint-container {
            position: relative;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 1000px;
        }

        /* Moving Grid Background */
        .grid-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(204, 255, 0, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(204, 255, 0, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: center center;
            transform: rotateX(60deg) translateY(-20%);
            transform-origin: top;
            animation: grid-move 20s linear infinite;
            z-index: 0;
        }

        @keyframes grid-move {
            0% { background-position: 0 0; }
            100% { background-position: 0 500px; }
        }

        .gradient-overlay {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, transparent 0%, var(--bg-dark) 80%);
            z-index: 1;
        }

        .maint-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem;
            max-width: 900px;
        }

        .brand-logo {
            font-family: 'Urbanist', sans-serif;
            font-size: 5rem;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 1rem;
            display: inline-block;
            filter: drop-shadow(0 0 30px var(--primary-glow));
        }

        .brand-logo span {
            color: var(--primary);
        }

        .blink-fast {
            animation: blink 0.15s step-end infinite;
        }

        @keyframes blink {
            0%, 49% { opacity: 1; }
            50%, 100% { opacity: 0; }
        }

        .maint-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 0.9;
            text-transform: uppercase;
            margin-bottom: 2rem;
            transform: skewX(-5deg);
        }

        .maint-subtitle {
            font-family: 'Roboto', sans-serif;
            font-size: 1.15rem;
            font-weight: 300;
            color: #aaa;
            max-width: 650px;
            margin: 0 auto 3rem;
            line-height: 1.6;
            letter-spacing: 0.5px;
        }

        /* ECG Heartbeat Wave */
        .ecg-container {
            position: relative;
            width: 100%;
            max-width: 450px;
            height: 60px;
            margin: 0 auto;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .ecg-svg {
            width: 100%;
            height: 100%;
        }

        .ecg-path {
            fill: none;
            stroke: var(--primary);
            stroke-width: 2;
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: ecg-draw 4s linear infinite;
        }

        @keyframes ecg-draw {
            to { stroke-dashoffset: 0; }
        }

        .ecg-glow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, var(--bg-dark) 0%, transparent 20%, transparent 80%, var(--bg-dark) 100%);
            z-index: 2;
            pointer-events: none;
        }

        .status-text {
            display: flex;
            justify-content: space-between;
            margin-top: 0.5rem;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 2px;
        }


        .floating-orb {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
            filter: blur(50px);
            animation: orb-float 15s ease-in-out infinite alternate;
        }

        @keyframes orb-float {
            0% { transform: translate(-50%, -50%); }
            100% { transform: translate(50%, 50%); }
        }

        .action-btns {
            margin-top: 4rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .wa-premium-btn {
            background: #25D366;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 100px;
            font-weight: 700;
            font-size: 0.75rem;
            text-decoration: none !important;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
        }

        .wa-premium-btn:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 20px 40px rgba(37, 211, 102, 0.5);
            color: white;
        }

        .lang-toggle {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            cursor: pointer;
            color: #888;
            transition: all 0.3s;
        }

        .lang-toggle:hover {
            background: rgba(255,255,255,0.08);
            border-color: var(--primary);
            color: white;
        }

        .animate-heartbeat {
            animation: heartbeat 1.5s infinite;
            display: inline-block;
        }

        @keyframes heartbeat {
            0% { transform: scale(1); }
            15% { transform: scale(1.1); }
            30% { transform: scale(1); }
            45% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @media (max-width: 768px) {
            .brand-logo { font-size: 3rem; }
            .maint-title { font-size: 2.5rem; }
            .maint-subtitle { font-size: 1rem; }
        }
    </style>
</head>
<body>

    <div class="maint-container">
        <div class="grid-bg"></div>
        <div class="gradient-overlay"></div>
        <div class="floating-orb" style="top: 20%; left: 30%;"></div>
        <div class="floating-orb" style="bottom: 10%; right: 20%; animation-delay: -5s;"></div>

        <div class="maint-content">
            <div class="brand-logo scale-in visible animate-heartbeat">
                STREAM<span>TV</span>
            </div>

            <h1 class="maint-title fade-up visible">
                <span data-key="maint_title_1">System</span><br>
                <span style="color: var(--primary)" data-key="maint_title_2">Update</span>
            </h1>

            <p class="maint-subtitle fade-up visible" style="transition-delay: 0.1s" data-key="maint_desc">
                Nous déployons actuellement des mises à jour majeures pour booster les performances de votre expérience de streaming.
            </p>

            <div class="fade-up visible" style="transition-delay: 0.2s">
                <div class="ecg-container">
                    <div class="ecg-glow"></div>
                    <svg viewBox="0 0 400 60" class="ecg-svg">
                        <path class="ecg-path" d="M0,30 L40,30 L50,30 L55,10 L65,50 L70,30 L90,30 L100,30 L110,30 L115,10 L125,50 L130,30 L150,30 L160,30 L170,30 L175,10 L185,50 L190,30 L210,30 L220,30 L230,30 L235,10 L245,50 L250,30 L270,30 L280,30 L290,30 L295,10 L305,50 L310,30 L330,30 L340,30 L350,30 L355,10 L365,50 L370,30 L390,30 L400,30" />
                    </svg>
                </div>
                <div class="status-text max-w-[450px] mx-auto">
                    <span data-key="maint_status_label">Status: Optimizing Data</span>
                    <span class="animate-heartbeat">75%</span>
                </div>
            </div>

            <div class="action-btns fade-up visible" style="transition-delay: 0.3s">
                <a href="https://wa.me/212670965351?text=Bonjour,%20je%20souhaite%20m'abonner%20ou%20j'ai%20une%20question." class="wa-premium-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/></svg>
                    <span data-key="maint_wa_btn">Contact VIP Support</span>
                </a>

                <div class="dropdown">
                    <button class="lang-toggle dropdown-toggle" type="button" id="langBtn" data-bs-toggle="dropdown">
                        <span id="langText">FR</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-center bg-black border-white/10">
                        <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="fr">FR</a></li>
                        <li><a class="dropdown-item text-white lang-select-btn" href="#" data-lang="en">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 w-full text-center">
            <a href="admin_panel.php" class="text-gray-700 text-xs tracking-widest uppercase opacity-50" style="text-decoration:none; cursor:default;" data-key="copyright">
                © 2025 STREAMTV Infrastructure Core
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const translations = {
            fr: {
                maint_title_1: "Système en", maint_title_2: "Mise à jour",
                maint_desc: "Nous déployons actuellement des mises à jour majeures pour booster les performances de votre expérience de streaming. Revenez très bientôt.",
                maint_status_label: "Status: Optimisation des données",
                maint_wa_btn: "Support VIP WhatsApp",
                copyright: "© 2025 STREAMTV Infrastructure Core"
            },
            en: {
                maint_title_1: "System", maint_title_2: "Update",
                maint_desc: "We are currently deploying major updates to boost the performance of your streaming experience. Come back very soon.",
                maint_status_label: "Status: Optimizing Data",
                maint_wa_btn: "VIP WhatsApp Support",
                copyright: "© 2025 STREAMTV Infrastructure Core"
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
            document.getElementById('langText').textContent = lang.toUpperCase();
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

