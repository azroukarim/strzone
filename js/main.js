// Audio handling - IMPROVED FOR MOBILE
const audio = document.getElementById('bgAudio');
let audioStarted = false;

// Determine current language from localStorage or default to 'fr'
let currentLang = localStorage.getItem('streamtv_lang') || 'fr';

if (audio) {
    audio.volume = 0.4;
    audio.loop = true;
}

function showAudioToast(message) {
    const toast = document.createElement('div');
    toast.className = 'audio-toast';
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 4000);
}

function showThankYouToast(message) {
    const toast = document.createElement('div');
    toast.className = 'thankyou-toast';
    toast.textContent = message;
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 4000);
}

function startAudio() {
    if (audio && !audioStarted) {
        audio.play().then(() => {
            audioStarted = true;
            console.log('Audio started');
            setTimeout(() => {
                const thanksMsg = currentLang === 'fr' ? '✨ Merci d\'avoir choisi nos produits !' : '✨ Thank you for choosing our products!';
                showThankYouToast(thanksMsg);
            }, 500);
        }).catch(e => {
            console.log('Autoplay blocked, waiting for user interaction');
            const msg = currentLang === 'fr' ? '🔊 Cliquez n\'importe où pour activer la musique' : '🔊 Click anywhere to activate music';
            showAudioToast(msg);
            
            const startOnInteraction = () => {
                audio.play().then(() => {
                    audioStarted = true;
                    const successMsg = currentLang === 'fr' ? '🎵 Musique activée !' : '🎵 Music activated!';
                    showAudioToast(successMsg);
                    setTimeout(() => {
                        const thanksMsg = currentLang === 'fr' ? '✨ Merci d\'avoir choisi nos produits !' : '✨ Thank you for choosing our products!';
                        showThankYouToast(thanksMsg);
                    }, 1000);
                }).catch(err => console.log('Still blocked:', err));
                document.removeEventListener('click', startOnInteraction);
                document.removeEventListener('touchstart', startOnInteraction);
            };
            document.addEventListener('click', startOnInteraction);
            document.addEventListener('touchstart', startOnInteraction);
        });
    }
}

startAudio();

window.addEventListener('load', () => {
    setTimeout(startAudio, 100);
});

// Contact Form Handler - Envoi à l'email ET au WhatsApp en même temps
const contactForm = document.getElementById('contactForm');
const formStatus = document.getElementById('formStatus');
const whatsappNumber = '212670965351';

if (contactForm) {
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Récupérer les données du formulaire
        const name = document.querySelector('input[name="name"]').value;
        const email = document.querySelector('input[name="email"]').value;
        const phone = document.querySelector('input[name="phone"]').value;
        const message = document.querySelector('textarea[name="message"]').value;
        
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '⏳ Envoi en cours...';
        submitBtn.disabled = true;
        
        let emailSuccess = false;
        let whatsappSuccess = false;
        
        // 1. Envoi par email via Web3Forms
        const emailFormData = new FormData();
        emailFormData.append('access_key', '63cc6e76-1dac-4f73-be8b-19deb0c02e10');
        emailFormData.append('subject', '📩 Nouveau message du site STREAMTV');
        emailFormData.append('from_name', 'STREAMTV Website');
        emailFormData.append('name', name);
        emailFormData.append('email', email);
        emailFormData.append('phone', phone);
        emailFormData.append('message', message);
        
        try {
            const emailResponse = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                body: emailFormData
            });
            const emailResult = await emailResponse.json();
            if (emailResult.success) {
                emailSuccess = true;
            }
        } catch (error) {
            console.error('Email error:', error);
        }
        
        // 2. Envoi par WhatsApp
        const whatsappMessage = `*Nouveau message du site STREAMTV*%0A%0A*Nom:* ${encodeURIComponent(name)}%0A*Email:* ${encodeURIComponent(email)}%0A*Téléphone:* ${encodeURIComponent(phone)}%0A*Message:* ${encodeURIComponent(message)}%0A%0A📅 ${new Date().toLocaleString()}`;
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
        
        // Ouvrir WhatsApp dans un nouvel onglet (l'envoi est manuel par l'utilisateur)
        window.open(whatsappUrl, '_blank');
        whatsappSuccess = true;
        
        // Afficher le message de succès
        if (emailSuccess || whatsappSuccess) {
            formStatus.innerHTML = '<div class="text-[#ccff00] bg-black/50 p-3 rounded-lg">✓ Message envoyé avec succès ! Vous allez être redirigé vers WhatsApp. Je vous répondrai dans les plus brefs délais.</div>';
            contactForm.reset();
            setTimeout(() => { formStatus.innerHTML = ''; }, 6000);
        } else {
            formStatus.innerHTML = '<div class="text-red-400 bg-black/50 p-3 rounded-lg">❌ Erreur lors de l\'envoi. Veuillez réessayer ou nous contacter directement sur WhatsApp.</div>';
            setTimeout(() => { formStatus.innerHTML = ''; }, 5000);
        }
        
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
}



// Translations
const translations = {
    fr: {
        nav_home: "ACCUEIL", nav_plans: "VOIR LES PLANS", nav_promos: "PROMOS", nav_contact: "CONTACT",
        hero_title_part1: "Découvrez l'Expérience ",
        hero_title_part2: "STREAMTV",
        hero_subtitle: "ESSAYEZ STREAMTV GRATUITEMENT",
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
        plans_page_title: "Nos", plans_page_highlight: "Plans", plans_page_subtitle: "Découvrez nos abonnements adaptés à vos besoins", plan2_badge_small: "Populaire",
        promos_title: "Offres", promos_highlight: "spéciales", promo_offer: "-50% sur l'abonnement Premium Annuel!", promo_code_label: "Code:", promo_validity: "Offre limitée - Valable jusqu'au 31 Décembre 2025",
        wc_promo_text: "Prochainement, des offres exceptionnelles à l'occasion de la prochaine Coupe du Monde 2026.",
        contact_title: "Contactez-", contact_highlight: "nous", contact_subtitle: "Notre équipe est à votre écoute 24h/24", contact_form_title: "Envoyez-nous un message", contact_name: "Votre nom", contact_email: "Votre email", contact_message: "Votre message", contact_send: "Envoyer",
        copyright: "Tous droits réservés © STREAMTV 2025",
        test_badge: "TEST GRATUIT — 24H", test_title1: "Demander un ", test_title2: "Test", test_subtitle: "Sélectionnez vos options et recevez vos accès de test immédiatement.",
        test_step1: "ÉTAPE 1 / 2", test_step1_title1: "Choisissez votre ", test_step1_title2: "Formule", test_step1_subtitle: "Sélectionnez le plan à tester pour", test_step1_subtitle2: "seulement 2€", test_step1_btn: "Continuer →",
        test_step2: "ÉTAPE 2 / 2", test_step2_title1: "Finalisez votre ", test_step2_title2: "commande", test_step2_subtitle: "Plan : ", test_name_label: "👤 Votre Nom", test_name_placeholder: "Entrez votre nom complet...", test_format_label: "📡 Format souhaité", test_m3u_desc: "Lien de lecture", test_mac_desc: "Adresse MAC TV", test_err_msg: "⚠️ Veuillez remplir tous les champs.", test_wa_btn: "💬 Commander via WhatsApp", test_back_btn: "← Retour",
        test_unavailable: "Tests Indisponibles", test_unavailable_btn: "Voir les Abonnements",
        download_title: "Télé", download_highlight: "chargements", download_subtitle: "Téléchargez nos applications pour profiter de STREAMTV"
    },
    en: {
        nav_home: "HOME", nav_plans: "VIEW PLANS", nav_promos: "PROMOS", nav_contact: "CONTACT",
        hero_title_part1: "Discover the ",
        hero_title_part2: "STREAMTV Experience",
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
        plans_page_title: "Our", plans_page_highlight: "Plans", plans_page_subtitle: "Discover our subscriptions tailored to your needs", plan2_badge_small: "Popular",
        promos_title: "Special", promos_highlight: "Offers", promo_offer: "-50% on Annual Premium subscription!", promo_code_label: "Code:", promo_validity: "Limited offer - Valid until December 31, 2025",
        wc_promo_text: "Coming soon, exceptional offers for the upcoming 2026 World Cup.",
        contact_title: "Contact", contact_highlight: "us", contact_subtitle: "Our team is available 24/7", contact_form_title: "Send us a message", contact_name: "Your name", contact_email: "Your email", contact_message: "Your message", contact_send: "Send",
        copyright: "All rights reserved © STREAMTV 2025",
        test_badge: "FREE TEST — 24H", test_title1: "Request a ", test_title2: "Test", test_subtitle: "Select your options and receive your test access immediately.",
        test_step1: "STEP 1 / 2", test_step1_title1: "Choose your ", test_step1_title2: "Plan", test_step1_subtitle: "Select the plan to test for", test_step1_subtitle2: "only 2€", test_step1_btn: "Continue →",
        test_step2: "STEP 2 / 2", test_step2_title1: "Complete your ", test_step2_title2: "order", test_step2_subtitle: "Plan: ", test_name_label: "👤 Your Name", test_name_placeholder: "Enter your full name...", test_format_label: "📡 Desired Format", test_m3u_desc: "Playlist Link", test_mac_desc: "TV MAC Address", test_err_msg: "⚠️ Please fill all fields.", test_wa_btn: "💬 Order via WhatsApp", test_back_btn: "← Back",
        test_unavailable: "Tests Unavailable", test_unavailable_btn: "View Subscriptions",
        download_title: "Down", download_highlight: "loads", download_subtitle: "Download our applications to enjoy STREAMTV"
    }
};

function updateLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('streamtv_lang', lang);
    const t = translations[lang];
    document.querySelectorAll('[data-key]').forEach(el => {
        const key = el.dataset.key;
        if (t[key]) {
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') el.placeholder = t[key];
            else el.innerHTML = t[key];
        }
    });
    document.querySelectorAll('[data-key-placeholder]').forEach(el => {
        const key = el.dataset.keyPlaceholder;
        if (t[key]) el.placeholder = t[key];
    });
    const langBtnSpan = document.querySelector('#langDropdownBtn span:first-child') || document.querySelector('#langBtn span:first-child');
    const langBtnText = document.getElementById('langText') || (document.querySelector('#langBtn') ? document.querySelector('#langBtn').childNodes[1] : null);
    if (lang === 'fr') { 
        if (langBtnSpan) langBtnSpan.textContent = '🌐'; 
        if (langBtnText) langBtnText.textContent = ' FR'; 
    }
    else { 
        if (langBtnSpan) langBtnSpan.textContent = '🇬🇧'; 
        if (langBtnText) langBtnText.textContent = ' EN'; 
    }
}

document.querySelectorAll('.lang-select-btn').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        updateLanguage(link.dataset.lang);
    });
});

// Update language on page load
updateLanguage(currentLang);



const leadForm = document.getElementById('leadForm');
if (leadForm) {
    leadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = this.querySelector('input[name="name"]')?.value || '';
        const phone = this.querySelector('input[name="phone"]')?.value || '';
        window.open(`https://wa.me/212670965351?text=Bonjour,%20je%20souhaite%20m'abonner%20à%20STREAMTV.%0ANom:%20${encodeURIComponent(name)}%0ATéléphone:%20${encodeURIComponent(phone)}`, '_blank');
    });
}

function initCarousel(trackId, wrapperId) {
    const track = document.getElementById(trackId);
    const wrapper = document.getElementById(wrapperId);
    if (!track || !wrapper) return;
    const leftBtn = wrapper.querySelector('.nav-left');
    const rightBtn = wrapper.querySelector('.nav-right');
    const scrollAmount = 350;
    if (leftBtn) leftBtn.addEventListener('click', () => track.scrollBy({ left: -scrollAmount, behavior: 'smooth' }));
    if (rightBtn) rightBtn.addEventListener('click', () => track.scrollBy({ left: scrollAmount, behavior: 'smooth' }));
}
initCarousel('sports-track', 'sports-carousel');
initCarousel('productions-track', 'productions-carousel');

const scrollBtn = document.getElementById('scrollTopBtn');
if (scrollBtn) {
    window.addEventListener('scroll', () => { scrollBtn.classList.toggle('visible', window.scrollY > 300); });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

const observerOptions = { threshold: 0.1 };
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); } });
}, observerOptions);
document.querySelectorAll('.fade-up, .fade-right, .scale-in').forEach(el => observer.observe(el));
setTimeout(() => {
    document.querySelectorAll('.fade-up, .fade-right, .scale-in').forEach(el => {
        if (el.getBoundingClientRect().top < window.innerHeight - 100) el.classList.add('visible');
    });
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
}, 100);

