<?php
/**
 * STREAMTV - Accueil (Full Version)
 */
$pageTitle = "Streaming Illimité";
$activePage = 'home';
$showPreloader = true;

include 'header.php';
?>

<div class="page-content">
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <!-- Hero Section -->
        <section class="min-h-screen flex flex-col justify-center items-center text-center py-12 md:py-20">
            <p class="text-[#ccff00] uppercase tracking-[0.3rem] text-sm md:text-base font-medium mb-4 fade-up" data-key="hero_subtitle">ESSAYEZ STREAMTV GRATUITEMENT</p>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase leading-tight fade-up">
                <span data-key="hero_title_part1">Découvrez l'Expérience </span>
                <span class="text-[#ccff00] title-glow" data-key="hero_title_part2">STREAMTV</span>
            </h1>
            <div class="mt-12 w-full max-w-3xl mx-auto fade-up">
                <img src="png/header.jpg" alt="STREAMTV" class="w-full h-auto rounded-3xl border border-white/10 shadow-2xl hover:border-[#ccff00]/50 transition-all duration-500 hover:scale-[1.01]">
            </div>
        </section>

        <!-- Exclusive Sports Marquee -->
        <section class="py-16 md:py-24 border-t border-white/5">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter transform -skew-x-6">Exclusive <span class="text-[#ccff00] title-glow">Sports</span></h2>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full shadow-[0_0_15px_#ccff00]"></div>
            </div>
            <div class="relative overflow-hidden group">
                <div class="flex animate-marquee-slow w-max gap-4 md:gap-6">
                    <!-- Sports Cards -->
                    <div class="flex-none w-[200px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/j5LBsFxx/1767639568602.webp" class="w-full h-full object-cover"></div>
                    <div class="flex-none w-[200px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/76fjxWHZ/1767640143435.webp" class="w-full h-full object-cover"></div>
                    <div class="flex-none w-[200px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/KzRCZHGz/1767640526245.webp" class="w-full h-full object-cover"></div>
                    <div class="flex-none w-[200px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/nzCNHPFL/1767641079066.webp" class="w-full h-full object-cover"></div>
                    <!-- Duplicate for infinite effect -->
                    <div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/j5LBsFxx/1767639568602.webp" class="w-full h-full object-cover"></div>
                    <div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10"><img src="https://i.postimg.cc/76fjxWHZ/1767640143435.webp" class="w-full h-full object-cover"></div>
                </div>
            </div>
        </section>
    </div></div></div>

    <!-- Entertainment Grid -->
    <div class="bg-movie"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-6 py-20">
            <div class="relative h-[450px] rounded-3xl overflow-hidden group border border-white/10 hover:border-[#ccff00]/50 transition-all">
                <img src="https://i.postimg.cc/901zgpHH/Sporthd.webp" class="w-full h-full object-cover group-hover:scale-110 transition-duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                <div class="absolute bottom-0 p-8 text-center w-full">
                    <h3 class="text-3xl font-black uppercase">Sports en <span class="text-[#ccff00]">Direct</span></h3>
                    <p class="text-gray-400 mt-2">Vivez l'adrénaline en 4K.</p>
                </div>
            </div>
            <div class="relative h-[450px] rounded-3xl overflow-hidden group border border-white/10 hover:border-[#ccff00]/50 transition-all">
                <img src="https://i.postimg.cc/wM5GswRb/1764816998861.webp" class="w-full h-full object-cover group-hover:scale-110 transition-duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                <div class="absolute bottom-0 p-8 text-center w-full">
                    <h3 class="text-3xl font-black uppercase">+20 000 <span class="text-[#ccff00]">Chaînes</span></h3>
                    <p class="text-gray-400 mt-2">Accès mondial illimité.</p>
                </div>
            </div>
            <div class="relative h-[450px] rounded-3xl overflow-hidden group border border-white/10 hover:border-[#ccff00]/50 transition-all">
                <img src="https://i.postimg.cc/brqsR5Ww/Movies.webp" class="w-full h-full object-cover group-hover:scale-110 transition-duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                <div class="absolute bottom-0 p-8 text-center w-full">
                    <h3 class="text-3xl font-black uppercase">+300 000 <span class="text-[#ccff00]">Films</span></h3>
                    <p class="text-gray-400 mt-2">VOD mise à jour quotidiennement.</p>
                </div>
            </div>
        </div>

        <!-- Platforms Marquee -->
        <div class="py-12 border-y border-white/5 overflow-hidden">
            <p class="text-center text-xs uppercase tracking-widest text-gray-500 mb-8">Disponible sur vos plateformes préférées</p>
            <div class="flex animate-marquee gap-20 items-center">
                <img src="https://i.postimg.cc/sD1bDCV3/Netflix.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <img src="https://i.postimg.cc/nrfMVGmM/Shahid.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <img src="https://i.postimg.cc/9fTsydSF/hbo-max-seeklogo.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <img src="https://i.postimg.cc/fTk1TQwT/bein-sports-2.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <img src="https://i.postimg.cc/V66WB1Z9/canal-futbol-seeklogo-com.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <!-- Duplicate -->
                <img src="https://i.postimg.cc/sD1bDCV3/Netflix.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
                <img src="https://i.postimg.cc/nrfMVGmM/Shahid.jpg" class="h-12 grayscale hover:grayscale-0 transition-all">
            </div>
        </div>

        <!-- Devices Swiper -->
        <div class="py-24">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black uppercase">Nos Plateformes <span class="text-[#ccff00]">Supportées</span></h2>
                <p class="text-gray-400 mt-2">Compatible avec tous vos appareils</p>
            </div>
            <div class="swiper" id="devicesCarousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/samsung-C7oYzsWJ.webp" class="rounded-2xl"></div>
                    <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/sony-DwBFXbcc.webp" class="rounded-2xl"></div>
                    <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/android-tv-UsQxSlZl.webp" class="rounded-2xl"></div>
                    <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/lg-webos-CNHJIF8M.webp" class="rounded-2xl"></div>
                </div>
                <div class="swiper-pagination mt-10"></div>
            </div>
        </div>

        <!-- Payment Methods -->
        <div class="py-20 text-center border-t border-white/5">
            <h2 class="text-3xl font-black uppercase mb-10">Paiement <span class="text-[#ccff00]">Sécurisé</span></h2>
            <div class="flex flex-wrap justify-center gap-6">
                <img src="https://i.postimg.cc/1znJdv7V/CIH-BANK-Logo-vector-ma-svg-vector-ma.webp" class="h-12 bg-white p-2 rounded-lg">
                <img src="https://i.postimg.cc/xCgJ32GT/Cashplus-vector-ma-svg-vector-ma.webp" class="h-12 bg-white p-2 rounded-lg">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" class="h-12 bg-white p-2 rounded-lg">
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="py-20 border-t border-white/5">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black uppercase">Questions <span class="text-[#ccff00]">Fréquentes</span></h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="glass p-6 rounded-2xl cursor-pointer" onclick="this.querySelector('.faq-ans').classList.toggle('hidden')">
                    <div class="flex justify-between items-center font-bold">Comment installer ? <i data-lucide="chevron-down"></i></div>
                    <p class="faq-ans hidden text-gray-400 mt-4">Nous vous envoyons un guide complet sur WhatsApp juste après l'activation.</p>
                </div>
                <div class="glass p-6 rounded-2xl cursor-pointer" onclick="this.querySelector('.faq-ans').classList.toggle('hidden')">
                    <div class="flex justify-between items-center font-bold">Sur combien d'appareils ? <i data-lucide="chevron-down"></i></div>
                    <p class="faq-ans hidden text-gray-400 mt-4">L'abonnement standard est pour 1 appareil, mais nous avons des offres multi-écrans.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-24 text-center border-t border-white/5">
            <h2 class="text-3xl font-black uppercase mb-12">Ils nous font <span class="text-[#ccff00]">Confiance</span></h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-8 rounded-3xl">
                    <p class="italic">"Qualité incroyable et support très réactif."</p>
                    <p class="mt-4 font-bold text-[#ccff00]">- Ahmed T.</p>
                </div>
                <div class="glass p-8 rounded-3xl">
                    <p class="italic">"Toutes les chaînes de sport sont là en 4K."</p>
                    <p class="mt-4 font-bold text-[#ccff00]">- Sarah M.</p>
                </div>
                <div class="glass p-8 rounded-3xl">
                    <p class="italic">"Activation en moins de 5 minutes. Top !"</p>
                    <p class="mt-4 font-bold text-[#ccff00]">- Marc L.</p>
                </div>
            </div>
        </section>
    </div></div></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('#devicesCarousel', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 3000 },
        breakpoints: { 768: { slidesPerView: 4 } },
        pagination: { el: '.swiper-pagination', clickable: true }
    });
</script>

<?php include 'footer.php'; ?>
