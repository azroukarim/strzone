<?php
$pageTitle = "Streaming Illimité";
$activePage = 'home';
$showPreloader = true;
include 'header.php';
?>

<style>
    @keyframes heartbeat {
        0% { transform: scale(1); }
        15% { transform: scale(1.1); }
        30% { transform: scale(1); }
        45% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    .animate-heartbeat {
        animation: heartbeat 1.5s infinite;
        display: inline-block;
    }
    @keyframes shake {
        0% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(2px, 2px) rotate(1deg); }
        50% { transform: translate(-2px, -2px) rotate(-1deg); }
        75% { transform: translate(2px, -2px) rotate(1deg); }
        100% { transform: translate(0, 0) rotate(0deg); }
    }
    .plan-card-shake:hover {
        animation: shake 0.3s ease-in-out infinite;
    }

    /* Infinite Wheel Marquee Styles */
    .marquee-container {
        position: relative;
        overflow: hidden;
    }
    .marquee-wheel {
        display: flex;
        width: max-content;
        animation: wheel-rotate 40s linear infinite;
    }
    .marquee-wheel.reverse {
        animation-direction: reverse;
    }
    @keyframes wheel-rotate {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    .nav-arrow {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100px;
        z-index: 30;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: transparent;
    }
    .nav-arrow-left { left: 0; background: linear-gradient(to right, black 30%, transparent); }
    .nav-arrow-right { right: 0; background: linear-gradient(to left, black 30%, transparent); }
    
    .arrow-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #ccff00;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 25px rgba(204, 255, 0, 0.5);
        border: 2px solid rgba(0,0,0,0.1);
        transform: scale(0.95);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .nav-arrow:hover .arrow-btn {
        transform: scale(1.1);
        box-shadow: 0 0 40px rgba(204, 255, 0, 0.8);
    }
</style>

<div class="page-content bg-stadium">
    <div class="section-content">
        <div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <!-- HERO -->
            <section class="flex flex-col justify-center items-center text-center pt-24 md:pt-32 pb-12 md:pb-16">
                <h1 class="text-3xl md:text-6xl font-black uppercase font-urbanist leading-tight drop-sky mb-6">
                    <span class="text-white" data-key="hero_title_part1">Discover the Experience</span><br>
                    <span class="text-[#ccff00] title-glow animate-heartbeat inline-block mt-2" data-key="hero_title_part2">STREAMTV</span>
                </h1>
                
                <div class="glow-divider"></div>
                
                <?php include 'worldcupcountdown.php'; ?>

            </section>

            <?php if (($global_site_settings['show_productions'] ?? 'on') === 'on'): ?>
            <!-- 1. Exclusive Productions -->
            <section class="py-16 md:py-24 border-t border-white/5">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down">Exclusive <span class="text-[#ccff00] title-glow" data-key="productions_title">Productions</span></h2>
                    <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full shadow-[0_0_15px_#ccff00]"></div>
                </div>
                <div class="marquee-container group">
                    <div class="nav-arrow nav-arrow-left" onclick="changeDirection('prod-wheel', 'left')"><div class="arrow-btn"><i data-lucide="chevron-left" class="w-8 h-8"></i></div></div>
                    <div class="nav-arrow nav-arrow-right" onclick="changeDirection('prod-wheel', 'right')"><div class="arrow-btn"><i data-lucide="chevron-right" class="w-8 h-8"></i></div></div>
                    <div class="marquee-wheel" id="prod-wheel">
                        <div class="flex gap-6 pr-6">
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://m.media-amazon.com/images/S/pv-target-images/0acdcb44f0d8cb134bcf183bd9cf6ed09f676a743db3ac03d4487647a52df5fa._UR1920,1080_SX624_FMjpg_.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://static.hbo.com/2026-04/house-of-the-dragon-s2-2x3.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://is1-ssl.mzstatic.com/image/thumb/6sQlIA7ozCT3161eWee-Cg/450x676CA.TVA23C01.webp" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://m.media-amazon.com/images/S/pv-target-images/651a3009bc782ce578aa35f79cd61e622a9b9819389f665a832ec6cf970eee44._UR2000,3000_SX750_FMjpg_.jpg" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="flex gap-6 pr-6" aria-hidden="true">
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://m.media-amazon.com/images/S/pv-target-images/0acdcb44f0d8cb134bcf183bd9cf6ed09f676a743db3ac03d4487647a52df5fa._UR1920,1080_SX624_FMjpg_.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://static.hbo.com/2026-04/house-of-the-dragon-s2-2x3.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://is1-ssl.mzstatic.com/image/thumb/6sQlIA7ozCT3161eWee-Cg/450x676CA.TVA23C01.webp" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://m.media-amazon.com/images/S/pv-target-images/651a3009bc782ce578aa35f79cd61e622a9b9819389f665a832ec6cf970eee44._UR2000,3000_SX750_FMjpg_.jpg" class="w-full h-full object-cover"></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <?php if (($global_site_settings['show_sports'] ?? 'on') === 'on'): ?>
            <!-- 2. Exclusive Sports -->
            <section class="py-16 md:py-24 border-t border-white/5">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down">Exclusive <span class="text-[#ccff00] title-glow" data-key="sports_title">Sports</span></h2>
                    <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full shadow-[0_0_15px_#ccff00]"></div>
                </div>
                <div class="marquee-container group">
                    <div class="nav-arrow nav-arrow-left" onclick="changeDirection('sports-wheel', 'left')"><div class="arrow-btn"><i data-lucide="chevron-left" class="w-8 h-8"></i></div></div>
                    <div class="nav-arrow nav-arrow-right" onclick="changeDirection('sports-wheel', 'right')"><div class="arrow-btn"><i data-lucide="chevron-right" class="w-8 h-8"></i></div></div>
                    <div class="marquee-wheel" id="sports-wheel">
                        <div class="flex gap-6 pr-6">
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://contentful-asset-proxy.sd.indazn.com/vhp9jnid12wf/68TbbpoYBZsXrfHIrSc2YQ/a3d1f00ac4969c57f1ba5b7464831da2/Platform-DAZN_Subscription_Tile-NFL.jpeg?fm=webp&q=35" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://contentful-asset-proxy.sd.indazn.com/vhp9jnid12wf/3kB9Loshai3t0wiJsYEwgg/a43c6366bcf99cfd0a921c49f098fb30/Tablet_-_1490_x_1200.jpg?fm=webp&q=35" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://asset.prd.sky.ch/f/299991/1280x720/b26efe3933/epl.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://asset.prd.sky.ch/f/299991/1752x804/a22fd2bf80/banner-storyblok-ldc-test.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://i.postimg.cc/nzCNHPFL/1767641079066.webp" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://i.postimg.cc/fLJ1wrzJ/1767641275772.webp" class="w-full h-full object-cover"></div>
                        </div>
                        <div class="flex gap-6 pr-6" aria-hidden="true">
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://contentful-asset-proxy.sd.indazn.com/vhp9jnid12wf/68TbbpoYBZsXrfHIrSc2YQ/a3d1f00ac4969c57f1ba5b7464831da2/Platform-DAZN_Subscription_Tile-NFL.jpeg?fm=webp&q=35" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://contentful-asset-proxy.sd.indazn.com/vhp9jnid12wf/3kB9Loshai3t0wiJsYEwgg/a43c6366bcf99cfd0a921c49f098fb30/Tablet_-_1490_x_1200.jpg?fm=webp&q=35" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://asset.prd.sky.ch/f/299991/1280x720/b26efe3933/epl.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://asset.prd.sky.ch/f/299991/1752x804/a22fd2bf80/banner-storyblok-ldc-test.jpg" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://i.postimg.cc/nzCNHPFL/1767641079066.webp" class="w-full h-full object-cover"></div>
                            <div class="flex-none w-[280px] md:w-[400px] aspect-[4/5] rounded-2xl overflow-hidden border border-white/10 card-hover cursor-pointer"><img src="https://i.postimg.cc/fLJ1wrzJ/1767641275772.webp" class="w-full h-full object-cover"></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <?php if (($global_site_settings['show_logos'] ?? 'on') === 'on'): ?>
            <!-- 3. beIN Sports Logos -->
            <div class="py-12 border-t border-white/5">
                <div class="text-center mb-10">
                    <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down">
                        <span data-key="sports_coverage_part1">Suivez en direct tous les</span> <br>
                        <span class="text-[#ccff00] title-glow" data-key="sports_coverage_part2">Championnats nationaux & internationaux</span>
                    </h2>
                    <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-6 rounded-full shadow-[0_0_15px_#ccff00]"></div>
                </div>
                <div class="marquee-container group">
                    <div class="nav-arrow nav-arrow-left" onclick="changeDirection('logos-wheel', 'left')"><div class="arrow-btn"><i data-lucide="chevron-left" class="w-8 h-8"></i></div></div>
                    <div class="nav-arrow nav-arrow-right" onclick="changeDirection('logos-wheel', 'right')"><div class="arrow-btn"><i data-lucide="chevron-right" class="w-8 h-8"></i></div></div>
                    <div class="marquee-wheel" id="logos-wheel">
                        <div class="flex gap-10 px-8 items-center">
                            <?php 
                            $sportsLogos = ["https://prod-media.beinsports.com/image/4oogyu6o156iphvdvphwpck10.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/2kwbbcootiqqgmrzs6o5inle5.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/dm5ka0os1e3dxcp3vh05kmp33.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/cse5oqqt2pzfcy8uz6yz3tkbj.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/68zplepppndhl8bfdvgy9vgu1.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/e6vzdkz6l236s9p288mharefy.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/1fedahp0rws09tj451onten8r.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/4c1nfi2j1m731hcay25fcgndq.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/59tpnfrwnvhnhzmnvfyug68hj.64.png?ver=03-06-2025","https://prod-media.beinsports.com/image/3yuinvghugheu879.64.png?ver=03-06-2025"];
                            foreach($sportsLogos as $logo): ?>
                                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 md:p-8 hover:scale-110 transition-all"><img src="<?php echo $logo; ?>" class="h-16 w-auto"></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="flex gap-10 px-8 items-center" aria-hidden="true">
                            <?php foreach($sportsLogos as $logo): ?>
                                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 md:p-8 hover:scale-110 transition-all"><img src="<?php echo $logo; ?>" class="h-16 w-auto"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if (($global_site_settings['show_platforms'] ?? 'on') === 'on'): ?>
            <div class="text-center py-12 border-t border-white/5">
                <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down">Votre Univers <br><span class="text-[#ccff00] title-glow" data-key="entertainment_title">Entertainment Illimité</span></h2>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-6 rounded-full shadow-[0_0_15px_#ccff00]"></div>
            </div>

            <!-- Platforms -->
            <div class="py-12 my-6 border-y border-white/5">
                <p class="text-center text-sm uppercase tracking-[4px] text-gray-400 mb-8" data-key="platforms_title">Disponible sur nos plateformes</p>
                <div class="marquee-container group">
                    <div class="nav-arrow nav-arrow-left" onclick="changeDirection('platforms-wheel', 'left')"><div class="arrow-btn"><i data-lucide="chevron-left" class="w-8 h-8"></i></div></div>
                    <div class="nav-arrow nav-arrow-right" onclick="changeDirection('platforms-wheel', 'right')"><div class="arrow-btn"><i data-lucide="chevron-right" class="w-8 h-8"></i></div></div>
                    <div class="marquee-wheel" id="platforms-wheel">
                        <div class="flex gap-20 px-10 items-center">
                            <img src="https://i.postimg.cc/sD1bDCV3/Netflix.jpg" alt="Netflix" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/nrfMVGmM/Shahid.jpg" alt="Shahid" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/9fTsydSF/hbo-max-seeklogo.jpg" alt="HBO Max" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/bvCLDsYx/Apple-TV-Logo-2019-present.webp" alt="Apple TV" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/fTk1TQwT/bein-sports-2.jpg" alt="BeIN Sports" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/yYW2YCVN/icons8-amazon-prime-video.jpg" alt="Prime Video" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/V66WB1Z9/canal-futbol-seeklogo-com.jpg" alt="Canal+" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                        <div class="flex gap-20 px-10 items-center" aria-hidden="true">
                            <img src="https://i.postimg.cc/sD1bDCV3/Netflix.jpg" alt="Netflix" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/nrfMVGmM/Shahid.jpg" alt="Shahid" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/9fTsydSF/hbo-max-seeklogo.jpg" alt="HBO Max" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/bvCLDsYx/Apple-TV-Logo-2019-present.webp" alt="Apple TV" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/fTk1TQwT/bein-sports-2.jpg" alt="BeIN Sports" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/yYW2YCVN/icons8-amazon-prime-video.jpg" alt="Prime Video" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="https://i.postimg.cc/V66WB1Z9/canal-futbol-seeklogo-com.jpg" alt="Canal+" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="py-16 text-center border-t border-white/5">
                <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="payment_title">Paiement</span> <span class="text-[#ccff00] title-glow" data-key="payment_highlight">Simple et Sécurisé</span></h2>
                <p class="text-gray-400 mt-4 text-lg" data-key="payment_subtitle">Choisissez le mode de paiement qui vous convient.</p>
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <img src="https://i.postimg.cc/1znJdv7V/CIH-BANK-Logo-vector-ma-svg-vector-ma.webp" alt="CIH" class="h-12 bg-white rounded-lg p-2">
                    <img src="https://i.postimg.cc/NLvcyyyd/attijariwafa-bank-logo-png-seeklogo-176188.webp" alt="Attijari" class="h-12 bg-white rounded-lg p-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-12 bg-white rounded-lg p-2">
                </div>
            </div>

            <div class="py-16 md:py-24 border-t border-white/5">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="how_title">Comment ça</span> <span class="text-[#ccff00] title-glow" data-key="how_highlight">Marche ?</span></h2>
                    <p class="text-gray-400 mt-4 text-lg" data-key="how_subtitle">Démarrez en moins de 5 minutes.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="text-center"><div class="w-24 h-24 bg-[#111]/70 backdrop-blur rounded-full flex items-center justify-center mx-auto border border-white/10 relative"><span class="absolute -top-2 -right-2 w-8 h-8 bg-[#ccff00] text-black rounded-full flex items-center justify-center font-bold">1</span><i data-lucide="shopping-cart" class="w-10 h-10 text-[#ccff00]"></i></div><h3 class="text-xl font-black mt-4 font-urbanist uppercase tracking-tight" data-key="step1_title">Commandez</h3></div>
                    <div class="text-center"><div class="w-24 h-24 bg-[#111]/70 backdrop-blur rounded-full flex items-center justify-center mx-auto border border-white/10 relative"><span class="absolute -top-2 -right-2 w-8 h-8 bg-[#ccff00] text-black rounded-full flex items-center justify-center font-bold">2</span><i data-lucide="message-square" class="w-10 h-10 text-[#ccff00]"></i></div><h3 class="text-xl font-black mt-4 font-urbanist uppercase tracking-tight" data-key="step2_title">Recevez</h3></div>
                    <div class="text-center"><div class="w-24 h-24 bg-[#111]/70 backdrop-blur rounded-full flex items-center justify-center mx-auto border border-white/10 relative"><span class="absolute -top-2 -right-2 w-8 h-8 bg-[#ccff00] text-black rounded-full flex items-center justify-center font-bold">3</span><i data-lucide="play" class="w-10 h-10 text-[#ccff00]"></i></div><h3 class="text-xl font-black mt-4 font-urbanist uppercase tracking-tight" data-key="step3_title">Profitez</h3></div>
                </div>
            </div>

            <div class="py-16 md:py-24 border-t border-white/5">
                <div class="text-center mb-10">
                    <h2 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="trust_title">Ils nous font</span> <span class="text-[#ccff00] title-glow" data-key="trust_highlight">confiance</span></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/5 hover:border-[#ccff00]/30 transition-all"><div class="text-[#ccff00] text-xl">★★★★★</div><p class="italic mt-3 text-gray-300" data-key="review1_text">"Meilleur rapport qualité-prix. Je recommande à 100%."</p></div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/5 hover:border-[#ccff00]/30 transition-all"><div class="text-[#ccff00] text-xl">★★★★★</div><p class="italic mt-3 text-gray-300" data-key="review2_text">"Service fiable et rapide. Très satisfait."</p></div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/5 hover:border-[#ccff00]/30 transition-all"><div class="text-[#ccff00] text-xl">★★★★★</div><p class="italic mt-3 text-gray-300" data-key="review3_text">"Communication rapide."</p></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function changeDirection(wheelId, direction) {
        const wheel = document.getElementById(wheelId);
        if (direction === 'right') { wheel.classList.add('reverse'); } 
        else { wheel.classList.remove('reverse'); }
    }
</script>

<?php include 'footer.php'; ?>
