<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>STREAMTV | Maintenance</title>
    <meta name="description" content="STREAMTV est actuellement en maintenance pour vous offrir une meilleure expérience.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Montserrat:wght@900&family=Urbanist:wght@900&display=swap" rel="stylesheet">
    
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
            font-size: 1.25rem;
            color: #888;
            max-width: 600px;
            margin: 0 auto 3rem;
            line-height: 1.6;
        }

        /* High-tech Progress */
        .progress-box {
            position: relative;
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
        }

        .progress-track {
            height: 4px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 75%;
            box-shadow: 0 0 20px var(--primary);
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: scan 2s linear infinite;
        }

        @keyframes scan {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .status-text {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
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
            padding: 1.2rem 2.5rem;
            border-radius: 100px;
            font-weight: 800;
            text-decoration: none !important;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            gap: 12px;
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
            <div class="brand-logo scale-in visible">
                STREAM<span class="blink-fast">ZONE</span>
            </div>

            <h1 class="maint-title fade-up visible">
                <span data-key="maint_title_1">System</span><br>
                <span style="color: var(--primary)" data-key="maint_title_2">Update</span>
            </h1>

            <p class="maint-subtitle fade-up visible" style="transition-delay: 0.1s" data-key="maint_desc">
                Nous déployons actuellement des mises à jour majeures pour booster les performances de votre expérience de streaming.
            </p>

            <div class="progress-box fade-up visible" style="transition-delay: 0.2s">
                <div class="progress-track">
                    <div class="progress-fill"></div>
                </div>
                <div class="status-text">
                    <span data-key="maint_status_label">Status: Optimizing Data</span>
                    <span>75%</span>
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

        <div class="absolute bottom-10 w-full text-center text-gray-700 text-xs tracking-widest uppercase opacity-50" data-key="copyright">
            © 2025 STREAMTV Infrastructure Core
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

