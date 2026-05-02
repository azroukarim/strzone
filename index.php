<?php
/**
 * STREAMZONE - Accueil
 */
$pageTitle = "Streaming Illimité | Sports, Films & Séries";
$activePage = 'home';
$showPreloader = true;

// Extra CSS for index page
$extraHead = '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .custom-carousel .swiper-slide { text-align: center; transition: transform 0.3s ease; padding: 10px; }
    .custom-carousel .swiper-slide:hover { transform: translateY(-5px); }
    .custom-carousel .swiper-slide img { width: auto; height: 80px; max-width: 100%; object-fit: contain; margin: 0 auto; filter: grayscale(30%); transition: filter 0.3s ease; }
    .custom-carousel .swiper-slide:hover img { filter: grayscale(0%); }
    .custom-carousel .swiper-button-prev, .custom-carousel .swiper-button-next { color: #ccff00; background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; backdrop-filter: blur(4px); }
    .custom-carousel .swiper-button-prev:after, .custom-carousel .swiper-button-next:after { font-size: 18px; }
    .custom-carousel .swiper-pagination-bullet { background: #fff; opacity: 0.5; }
    .custom-carousel .swiper-pagination-bullet-active { background: #ccff00; opacity: 1; }
    @media (max-width: 768px) { .custom-carousel .swiper-slide img { height: 50px; } .custom-carousel .swiper-button-prev, .custom-carousel .swiper-button-next { display: none; } }
</style>';

include 'header.php';
?>

    <div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="min-h-screen flex flex-col justify-center items-center text-center py-12 md:py-20">
                <p class="text-[#ccff00] uppercase tracking-[0.3rem] text-sm md:text-base font-medium inter-font mb-4 fade-up" data-key="hero_subtitle">ESSAYEZ STREAMZONE GRATUITEMENT</p>
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase font-urbanist leading-tight fade-up" style="transition-delay: 0.1s;">
                    <span data-key="hero_title_part1">Découvrez l'Expérience </span>
                    <span class="text-[#ccff00] title-glow" data-key="hero_title_part2">STREAMZONE</span>
                </h1>
                <div class="mt-12 w-full max-w-3xl mx-auto fade-up" style="transition-delay: 0.2s;">
                    <picture>
                        <source media="(min-width: 768px)" srcset="https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/png/header.jpg">
                        <img src="https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/png/header.jpg" alt="STREAMZONE Streaming" class="w-full h-auto rounded-3xl border border-white/10 shadow-2xl hover:border-[#ccff00]/50 transition-all duration-500 hover:scale-[1.01]">
                    </picture>
                </div>
            </section>
            
            <section class="py-16 md:py-24 border-t border-white/5"><div class="text-center mb-12"><h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter transform -skew-x-6">Exclusive <span class="text-[#ccff00] title-glow" data-key="sports_title">Sports</span></h2><div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full shadow-[0_0_15px_#ccff00]"></div></div><div class="relative overflow-hidden group"><div class="flex animate-marquee-slow w-max"><div class="flex gap-6 pr-6 flex-none"><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/j5LBsFxx/1767639568602.webp" alt="UFC" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/76fjxWHZ/1767640143435.webp" alt="Football" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/KzRCZHGz/1767640526245.webp" alt="NBA" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/nzCNHPFL/1767641079066.webp" alt="Tennis" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/fLJ1wrzJ/1767641275772.webp" alt="MotoGP" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div></div></div></div></section>
            
            <section class="py-16 md:py-24 border-t border-white/5"><div class="text-center mb-12"><h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter transform -skew-x-6">Exclusive <span class="text-[#ccff00] title-glow" data-key="productions_title">Productions</span></h2><div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full shadow-[0_0_15px_#ccff00]"></div></div><div class="relative overflow-hidden group"><div class="flex animate-marquee-slow w-max"><div class="flex gap-6 pr-6 flex-none"><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/Qdsjmhbv/1767638928775.webp" alt="Production 1" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/0yx9nPf3/1767639605535.webp" alt="Production 2" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/t4y9kp5L/1767641534672.webp" alt="Production 3" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/3x731YBV/1767642031598.webp" alt="Production 4" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div><div class="flex-none w-[280px] md:w-[380px] aspect-[4/5] bg-[#161616] rounded-2xl overflow-hidden relative card-hover cursor-pointer border border-white/10"><img src="https://i.postimg.cc/rwcqjMJB/1767642596595.webp" alt="Production 5" class="w-full h-full object-cover"><div class="absolute inset-0 img-gradient pointer-events-none"></div></div></div></div></div></section>
            
            <div class="py-8"><div class="glow-divider"></div></div>
            <div class="text-center py-12"><h2 class="text-3xl md:text-5xl font-black uppercase">Votre Univers <br><span class="text-[#ccff00] title-glow" data-key="entertainment_title">Entertainment Illimité</span></h2><div class="w-20 h-1 bg-[#ccff00] mx-auto mt-5 rounded-full"></div></div>
        </div></div></div>
        
        <div class="bg-movie"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-6 py-12"><div class="relative h-[450px] rounded-2xl overflow-hidden group/card cursor-pointer border border-white/10 hover:border-[#ccff00]/50 transition-all duration-500"><img src="https://i.postimg.cc/901zgpHH/Sporthd.webp" alt="Sports" class="w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div><div class="absolute bottom-0 left-0 p-6 text-center w-full"><span class="text-5xl block mb-3">⚽</span><h3 class="text-2xl font-black uppercase"><span data-key="feature1_title">Sports en</span> <span class="text-[#ccff00]" data-key="feature1_highlight">Direct</span></h3><p class="text-gray-300 mt-2" data-key="feature1_desc">Vivez l'adrénaline en HD, FHD et 4K.</p></div></div><div class="relative h-[450px] rounded-2xl overflow-hidden group/card cursor-pointer border border-white/10 hover:border-[#ccff00]/50 transition-all duration-500"><img src="https://i.postimg.cc/wM5GswRb/1764816998861.webp" alt="Channels" class="w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div><div class="absolute bottom-0 left-0 p-6 text-center w-full"><span class="text-5xl block mb-3">🌍</span><h3 class="text-2xl font-black uppercase">+20 000 <span class="text-[#ccff00]" data-key="feature2_highlight">Chaînes</span></h3><p class="text-gray-300 mt-2" data-key="feature2_desc">Accès mondial aux chaînes internationales.</p></div></div><div class="relative h-[450px] rounded-2xl overflow-hidden group/card cursor-pointer border border-white/10 hover:border-[#ccff00]/50 transition-all duration-500"><img src="https://i.postimg.cc/brqsR5Ww/Movies.webp" alt="Movies" class="w-full h-full object-cover transition-transform duration-700 group-hover/card:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div><div class="absolute bottom-0 left-0 p-6 text-center w-full"><span class="text-5xl block mb-3">🎬</span><h3 class="text-2xl font-black uppercase">+300 000 <span class="text-[#ccff00]" data-key="feature3_highlight">Films</span></h3><p class="text-gray-300 mt-2" data-key="feature3_desc">Films et séries à la demande.</p></div></div></div>
            
            <div class="py-12 my-6">
                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-black uppercase"><span class="text-[#ccff00]" data-key="platforms_title_part1">Nos Plateformes</span> <span class="text-white" data-key="platforms_title_part2">Supportées</span></h2>
                    <p class="text-gray-400 text-sm mt-2" data-key="platforms_subtitle">Profitez de STREAMZONE sur tous vos appareils</p>
                </div>
                <div class="custom-carousel swiper" id="devicesCarousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/samsung-C7oYzsWJ.webp" alt="Samsung"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/sony-DwBFXbcc.webp" alt="Sony"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/windows-tFTXBIon.webp" alt="Windows"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/android-tv-UsQxSlZl.webp" alt="Android TV"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/apple-tv-BSlFnzSX.webp" alt="Apple TV"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/lg-webos-CNHJIF8M.webp" alt="LG webOS"></div>
                        <div class="swiper-slide"><img src="https://oraplayers.com/wp-content/uploads/2025/06/roku-CkQSxapA.webp" alt="Roku"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="py-12 text-center">
                <h2 class="text-2xl md:text-3xl font-black uppercase"><span data-key="payment_title">Paiement</span> <span class="text-[#ccff00]" data-key="payment_highlight">Simple et Sécurisé</span></h2>
                <div class="flex flex-wrap justify-center gap-4 mt-8"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-12 bg-white rounded-lg p-2"></div>
            </div>
        </div></div></div>
    </div>

    <a href="https://wa.me/212670965351" class="wa-small-btn" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/></svg>
    </a>

<?php
$extraFooter = '
<script src="js/main.js?v=2"></script>
<script>
    const swiper = new Swiper("#devicesCarousel", {
        slidesPerView: 2, spaceBetween: 20, loop: true,
        autoplay: { delay: 5000 },
        pagination: { el: ".swiper-pagination", clickable: true },
        breakpoints: { 640: { slidesPerView: 3 }, 1024: { slidesPerView: 5 } }
    });
</script>';
include 'footer.php';
?>
