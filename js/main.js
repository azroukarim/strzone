// Audio handling
var audio = document.getElementById('bgAudio');
var audioStarted = false;

// Determine current language from localStorage or default to 'fr'
var currentLang = localStorage.getItem('streamtv_lang') || 'fr';

if (audio) {
    audio.volume = 0.4;
    audio.loop = true;
}

function showAudioToast(message) {
    var toast = document.createElement('div');
    toast.className = 'audio-toast';
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(function() { if(toast.parentNode) toast.remove(); }, 4000);
}

function showThankYouToast(message) {
    var toast = document.createElement('div');
    toast.className = 'thankyou-toast';
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(function() { if(toast.parentNode) toast.remove(); }, 4000);
}

function startAudio() {
    if (audio && !audioStarted) {
        audio.play().then(function() {
            audioStarted = true;
            setTimeout(function() {
                var thanksMsg = currentLang === 'fr' ? '✨ Merci d\'avoir choisi nos produits !' : '✨ Thank you for choosing our products!';
                showThankYouToast(thanksMsg);
            }, 500);
        }).catch(function(e) {
            var msg = currentLang === 'fr' ? '🔊 Cliquez n\'importe où pour activer la musique' : '🔊 Click anywhere to activate music';
            showAudioToast(msg);
            
            var startOnInteraction = function() {
                audio.play().then(function() {
                    audioStarted = true;
                    var successMsg = currentLang === 'fr' ? '🎵 Musique activée !' : '🎵 Music activated!';
                    showAudioToast(successMsg);
                    setTimeout(function() {
                        var thanksMsg = currentLang === 'fr' ? '✨ Merci d\'avoir choisi nos produits !' : '✨ Thank you for choosing our products!';
                        showThankYouToast(thanksMsg);
                    }, 1000);
                }).catch(function(err) { console.log('Still blocked:', err); });
                document.removeEventListener('click', startOnInteraction);
                document.removeEventListener('touchstart', startOnInteraction);
            };
            document.addEventListener('click', startOnInteraction);
            document.addEventListener('touchstart', startOnInteraction);
        });
    }
}

// Translations
var translations = {
    fr: {
        nav_home: "ACCUEIL", nav_plans: "VOIR LES PLANS", nav_promos: "PROMOS", nav_contact: "CONTACT",
        hero_title_part1: "Découvrez <br>",
        hero_title_part2: "STREAMTV <br> <span class='text-white'>l'Expérience</span>",
        hero_subtitle: "PROFITEZ DES PRODUITS STREAMTV ET ABONNEZ-VOUS",
        form_name: "Nom Complet", form_phone: "Téléphone", form_button: "ACCÉDER À L'OFFRE",
        sports_title: "Sports", productions_title: "Productions", entertainment_title: "Entertainment Illimité",
        feature1_title: "Sports en", feature1_highlight: "Direct", feature1_desc: "Vivez l'adrénaline en HD, FHD et 4K.",
        feature2_highlight: "Chaînes", feature2_desc: "Accès mondial aux chaînes internationales.",
        feature3_highlight: "Films", feature3_desc: "Films et séries à la demande.",
        platforms_title: "Disponible sur nos plateformes",
        pricing_title: "Abonnements", pricing_subtitle: "Qualité Premium. Sans Engagement. Satisfaction Garantie.",
        plan1_name: "Découverte", plan1_duration: "pour 1 Mois", plan1_feat1: "+20,000 Chaînes", plan1_feat2: "+300,000 Films & Séries", plan1_feat3: "HD/FHD/4K", plan1_feat4: "Support Prioritaire", plan1_btn: "Commander",
        plan2_name: "Premium Annuel", plan2_badge: "Meilleure Offre", plan2_duration: "pour 12 Mois (25DH/mois)", plan2_feat1: "+20,000 Chaînes", plan2_feat2: "+300,000 Films & Séries", plan2_feat3: "4K Ultra HD", plan2_feat4: "Anti-Freeze 2.0", plan2_feat5: "Support 24/7", plan2_feat6: "Application incluse", plan2_btn: "Profiter de l'Offre",
        plan3_name: "Expert", plan3_duration: "pour 6 Mois", plan3_feat1: "+20,000 Chaînes", plan3_feat2: "+300,000 Films & Séries", plan3_feat3: "HD/FHD/4K", plan3_feat4: "Anti-Freeze Standard", plan3_btn: "Commander",
        payment_title: "Paiement", payment_highlight: "Simple et Sécurisé", payment_subtitle: "Choisissez le mode de paiement qui vous convient.", payment_security: "Vos données sont 100% protégées",
        how_title: "Comment ça", how_highlight: "Marche ?", how_subtitle: "Démarrez en moins de 5 minutes. Aucune connaissance technique requise.",
        step1_title: "Commandez", step1_desc: "Choisissez l'abonnement qui vous convient.", step2_title: "Recevez", step2_desc: "Identifiants et guide d'installation sur WhatsApp.", step3_title: "Profitez", step3_desc: "Connectez-vous sur votre TV, Smartphone ou PC.", how_btn: "Choisir mon Abonnement",
        trust_title: "Ils nous font", trust_highlight: "confiance", trust_subtitle: "Rejoignez +5000 clients satisfaits au Maroc et en Europe",
        review1_text: "\"Meilleur rapport qualité-prix. Je recommande à 100%.\"", review1_name: "Abdel H.", review1_location: " - Tanger",
        review2_text: "\"Service fiable et rapide. Très satisfait.\"", review2_name: "Y. Aytmbarek", review2_location: " - Fes",
        review3_text: "\"Communication rapide et service après-vente super.\"", review3_name: "Salima Bel.", review3_location: " - Paris",
        plans_title1: "Nos", plans_title2: "Plans", plans_subtitle: "Découvrez nos abonnements adaptés à vos besoins",
        plan_test_name: "TEST", plan_test_dur: "24h (~21 DH)",
        plan_basic_name: "BASIC", plan_basic_dur: "12 Mois (~160 DH)",
        plan_standard_name: "STANDARD", plan_standard_dur: "12 Mois (~265 DH)",
        plan_premium_name: "PREMIUM", plan_premium_dur: "12 Mois (~425 DH)",
        plan_vip_name: "PREMIUM+VIP", plan_vip_dur: "12 Mois (~640 DH)",
        plan_tag_choc: "PRIX CHOC", plan_btn_choose: "CHOISIR",
        promos_title: "Offres", promos_highlight: "spéciales", promos_subtitle: "Profitez de nos réductions exceptionnelles",
        promos_stay_tuned: "Restez à l'écoute",
        promo_offer: "-50% sur l'abonnement Premium Annuel!", promo_code_label: "Code:", promo_validity: "Offre limitée - Valable jusqu'au 31 Décembre 2025",
        wc_promo_text: "Prochainement, des offres exceptionnelles à l'occasion de la prochaine Coupe du Monde 2026.",
        sports_coverage_part1: "Suivez en direct tous les",
        sports_coverage_part2: "Championnats Internationaux",
        contact_title: "Contactez-", contact_highlight: "nous", contact_subtitle: "Notre équipe est à votre écoute 24h/24", contact_form_title: "Envoyez-nous un message", contact_name: "Votre nom", contact_email: "Votre email", contact_message: "Votre message", contact_send: "Envoyer",
        copyright: "Tous droits réservés © STREAMTV 2025",
        test_badge: "TEST GRATUIT — 24H", test_title1: "Demander un ", test_title2: "Test", test_subtitle: "Sélectionnez vos options et recevez vos accès de test immédiatement.",
        test_step1: "ÉTAPE 1 / 2", test_step1_title1: "Choisissez votre ", test_step1_title2: "Formule", test_step1_subtitle: "Sélectionnez le plan à tester pour", test_step1_subtitle2: "seulement 2€", test_step1_btn: "Continuer →",
        test_step2: "ÉTAPE 2 / 2", test_step2_title1: "Finalisez votre ", test_step2_title2: "commande", test_step2_subtitle: "Plan : ", test_name_label: "👤 Votre Nom", test_name_placeholder: "Entrez votre nom complet...", test_format_label: "📡 Format souhaité", test_m3u_desc: "Lien de lecture", test_mac_desc: "Adresse MAC TV", test_err_msg: "⚠️ Veuillez remplir tous les champs.", test_wa_btn: "💬 Commander via WhatsApp", test_back_btn: "← Retour",
        test_unavailable: "Tests Indisponibles", test_unavailable_btn: "Voir les Abonnements",
        download_title: "Télé", download_highlight: "chargements", download_subtitle: "Téléchargez nos applications pour profiter de STREAMTV",
        countdown_days: "Days", countdown_hours: "Hours", countdown_minutes: "Minutes", countdown_seconds: "Seconds",
        countdown_title: "FIFA World Cup 2026", countdown_subtitle: "June 11 to July 19",
        countdown_be_there: "Be there!"
    },
    en: {
        nav_home: "HOME", nav_plans: "VIEW PLANS", nav_promos: "PROMOS", nav_contact: "CONTACT",
        hero_title_part1: "Discover the <br>",
        hero_title_part2: "STREAMTV <br> <span class='text-white'>Experience</span>",
        hero_subtitle: "TRY STREAMTV FOR FREE",
        form_name: "Full Name", form_phone: "Phone", form_button: "GET THE OFFER",
        sports_title: "Sports", productions_title: "Productions", entertainment_title: "Unlimited Entertainment",
        feature1_title: "Live", feature1_highlight: "Sports", feature1_desc: "Experience adrenaline in HD, FHD & 4K.",
        feature2_highlight: "Channels", feature2_desc: "Global access to international channels.",
        feature3_highlight: "Movies", feature3_desc: "On-demand movies and series.",
        platforms_title: "Available on our platforms",
        pricing_title: "Subscriptions", pricing_subtitle: "Premium Quality. No Commitment. Satisfaction Guaranteed.",
        plan1_name: "Discovery", plan1_duration: "for 1 Month", plan1_feat1: "+20,000 Channels", plan1_feat2: "+300,000 Movies & Series", plan1_feat3: "HD/FHD/4K", plan1_feat4: "Priority Support", plan1_btn: "Order",
        plan2_name: "Annual Premium", plan2_badge: "Best Offer", plan2_duration: "for 12 Months (25DH/month)", plan2_feat1: "+20,000 Channels", plan2_feat2: "+300,000 Movies & Series", plan2_feat3: "4K Ultra HD", plan2_feat4: "Anti-Freeze 2.0", plan2_feat5: "24/7 Support", plan2_feat6: "App included", plan2_btn: "Get the Offer",
        plan3_name: "Expert", plan3_duration: "for 6 Months", plan3_feat1: "+20,000 Channels", plan3_feat2: "+300,000 Movies & Series", plan3_feat3: "HD/FHD/4K", plan3_feat4: "Anti-Freeze Standard", plan3_btn: "Order",
        payment_title: "Payment", payment_highlight: "Simple & Secure", payment_subtitle: "Choose your preferred payment method.", payment_security: "Your data is 100% protected",
        how_title: "How does it", how_highlight: "Work?", how_subtitle: "Get started in less than 5 minutes. No technical skills required.",
        step1_title: "Order", step1_desc: "Choose the subscription that suits you.", step2_title: "Receive", step2_desc: "Receive your credentials and installation guide on WhatsApp.", step3_title: "Enjoy", step3_desc: "Connect on your TV, Smartphone or PC.", how_btn: "Choose my Subscription",
        trust_title: "They trust", trust_highlight: "us", trust_subtitle: "Join +5000 satisfied customers in Morocco and Europe",
        review1_text: "\"Best value for money. I recommend 100%.\"", review1_name: "Abdel H.", review1_location: " - Tanger",
        review2_text: "\"Reliable and fast service. Very satisfied.\"", review2_name: "Y. Aytmbarek", review2_location: " - Fes",
        review3_text: "\"Fast communication and after-sales service is super.\"", review3_name: "Salima Bel.", review3_location: " - Paris",
        plans_page_title: "Our", plans_page_highlight: "Plans", plans_page_subtitle: "Discover our subscriptions tailored to your needs",
        plans_title1: "Our", plans_title2: "Plans", plans_subtitle: "Discover our subscriptions tailored to your needs",
        plan_test_name: "TEST", plan_test_dur: "24h (~2$)",
        plan_basic_name: "BASIC", plan_basic_dur: "12 Months (~15$)",
        plan_standard_name: "STANDARD", plan_standard_dur: "12 Months (~25$)",
        plan_premium_name: "PREMIUM", plan_premium_dur: "12 Months (~40$)",
        plan_vip_name: "PREMIUM+VIP", plan_vip_dur: "12 Months (~60$)",
        plan_tag_choc: "BEST PRICE", plan_btn_choose: "SELECT",
        promos_title: "Special", promos_highlight: "Offers", promos_subtitle: "Enjoy our exceptional discounts",
        promos_stay_tuned: "Stay Tuned",
        promo_offer: "-50% on Annual Premium subscription!", promo_code_label: "Code:", promo_validity: "Limited offer - Valid until December 31, 2025",
        wc_promo_text: "Coming soon, exceptional offers for the upcoming 2026 World Cup.",
        sports_coverage_part1: "Follow all national & international",
        sports_coverage_part2: "Championships live",
        contact_title: "Contact", contact_highlight: "us", contact_subtitle: "Our team is available 24/7", contact_form_title: "Send us a message", contact_name: "Your name", contact_email: "Your email", contact_message: "Your message", contact_send: "Send",
        copyright: "All rights reserved © STREAMTV 2025",
        test_badge: "FREE TEST — 24H", test_title1: "Request a ", test_title2: "Test", test_subtitle: "Select your options and receive your test access immediately.",
        test_step1: "STEP 1 / 2", test_step1_title1: "Choose your ", test_step1_title2: "Plan", test_step1_subtitle: "Select the plan to test for", test_step1_subtitle2: "only 2€", test_step1_btn: "Continue →",
        test_step2: "STEP 2 / 2", test_step2_title1: "Complete your ", test_step2_title2: "order", test_step2_subtitle: "Plan: ", test_name_label: "👤 Your Name", test_name_placeholder: "Enter your full name...", test_format_label: "📡 Desired Format", test_m3u_desc: "Playlist Link", test_mac_desc: "TV MAC Address", test_err_msg: "⚠️ Please fill all fields.", test_wa_btn: "💬 Order via WhatsApp", test_back_btn: "← Back",
        test_unavailable: "Tests Unavailable", test_unavailable_btn: "View Subscriptions",
        download_title: "Down", download_highlight: "loads", download_subtitle: "Download our applications to enjoy STREAMTV",
        countdown_days: "Days", countdown_hours: "Hours", countdown_minutes: "Minutes", countdown_seconds: "Seconds",
        countdown_title: "FIFA World Cup 2026", countdown_subtitle: "June 11 to July 19",
        countdown_be_there: "Be there!"
    }
};

function updateLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('streamtv_lang', lang);
    var t = translations[lang];
    if (!t) return;
    
    var dataEls = document.querySelectorAll('[data-key]');
    for (var i = 0; i < dataEls.length; i++) {
        var el = dataEls[i];
        var key = el.getAttribute('data-key');
        if (t[key]) {
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') el.placeholder = t[key];
            else el.innerHTML = t[key];
        }
    }
    
    var placeholderEls = document.querySelectorAll('[data-key-placeholder]');
    for (var j = 0; j < placeholderEls.length; j++) {
        var pEl = placeholderEls[j];
        var pKey = pEl.getAttribute('data-key-placeholder');
        if (t[pKey]) pEl.placeholder = t[pKey];
    }
    
    var langBtnSpan = document.querySelector('#langDropdownBtn span:first-child');
    var langBtnText = document.getElementById('langText');
    
    if (lang === 'fr') { 
        if (langBtnSpan) langBtnSpan.textContent = '🌐'; 
        if (langBtnText) langBtnText.textContent = ' FR'; 
    } else if (lang === 'en') { 
        if (langBtnSpan) langBtnSpan.textContent = '🇬🇧'; 
        if (langBtnText) langBtnText.textContent = ' EN'; 
    }
}

function updateCountdown() {
    var targetDate = new Date('2026-06-11T00:00:00').getTime();
    var now = new Date().getTime();
    var distance = targetDate - now;
    if (distance < 0) return;
    
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    var dEl = document.getElementById('cd-days');
    var hEl = document.getElementById('cd-hours');
    var mEl = document.getElementById('cd-minutes');
    var sEl = document.getElementById('cd-seconds');
    
    if (dEl) dEl.textContent = String(days).length < 2 ? '0' + days : days;
    if (hEl) hEl.textContent = String(hours).length < 2 ? '0' + hours : hours;
    if (mEl) mEl.textContent = String(minutes).length < 2 ? '0' + minutes : minutes;
    if (sEl) sEl.textContent = String(seconds).length < 2 ? '0' + seconds : seconds;
}

// Global Initialization
document.addEventListener('DOMContentLoaded', function() {
    console.log('STREAMTV: Start');
    
    // 1. Language
    updateLanguage(currentLang);
    
    // 2. Countdown
    updateCountdown();
    setInterval(updateCountdown, 1000);
    
    // 3. Animations
    if ('IntersectionObserver' in window) {
        var observerOptions = { threshold: 0.1 };
        var observer = new IntersectionObserver(function(entries) {
            for (var k = 0; k < entries.length; k++) {
                var entry = entries[k];
                if (entry.isIntersecting) { 
                    entry.target.className += ' visible'; 
                    observer.unobserve(entry.target); 
                } 
            }
        }, observerOptions);
        var animEls = document.querySelectorAll('.fade-up, .fade-down, .fade-right, .scale-in');
        for (var l = 0; l < animEls.length; l++) { observer.observe(animEls[l]); }
    } else {
        var allAnimEls = document.querySelectorAll('.fade-up, .fade-down, .fade-right, .scale-in');
        for (var m = 0; m < allAnimEls.length; m++) { allAnimEls[m].className += ' visible'; }
    }
    
    // 4. Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
    
    // 5. Language Buttons
    var langBtns = document.querySelectorAll('.lang-select-btn');
    for (var n = 0; n < langBtns.length; n++) {
        (function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                updateLanguage(btn.getAttribute('data-lang'));
            });
        })(langBtns[n]);
    }
    
    // 6. Carousel
    function initCarousel(trackId, wrapperId) {
        var track = document.getElementById(trackId);
        var wrapper = document.getElementById(wrapperId);
        if (!track || !wrapper) return;
        var leftBtn = wrapper.querySelector('.nav-left');
        var rightBtn = wrapper.querySelector('.nav-right');
        if (leftBtn) leftBtn.addEventListener('click', function() { track.scrollBy({ left: -350, behavior: 'smooth' }); });
        if (rightBtn) rightBtn.addEventListener('click', function() { track.scrollBy({ left: 350, behavior: 'smooth' }); });
    }
    initCarousel('sports-track', 'sports-carousel');
    initCarousel('productions-track', 'productions-carousel');
    
    // 7. Scroll Top
    var scrollBtn = document.getElementById('scrollTopBtn');
    if (scrollBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) scrollBtn.className = 'scroll-top-btn visible';
            else scrollBtn.className = 'scroll-top-btn';
        });
        scrollBtn.addEventListener('click', function() { window.scrollTo({ top: 0, behavior: 'smooth' }); });
    }
    
    // 8. Lead Form
    var leadForm = document.getElementById('leadForm');
    if (leadForm) {
        leadForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var nameInput = this.querySelector('input[name="name"]');
            var phoneInput = this.querySelector('input[name="phone"]');
            var name = nameInput ? nameInput.value : '';
            var phone = phoneInput ? phoneInput.value : '';
            window.open('https://wa.me/212670965351?text=Bonjour,%20je%20souhaite%20m\'abonner%20à%20STREAMTV.%0ANom:%20' + encodeURIComponent(name) + '%0ATéléphone:%20' + encodeURIComponent(phone), '_blank');
        });
    }

    // 9. Audio
    startAudio();
});
