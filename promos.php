<?php
$pageTitle = "Promotions";
$activePage = 'promos';
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
</style>

<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="flex flex-col justify-center items-center text-center pt-12 md:pt-20 pb-6 md:pb-8">
                <h1 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="promos_title">Offres</span> <span class="text-[#ccff00] title-glow" data-key="promos_highlight">spéciales</span></h1>
                <p class="text-xl text-gray-300 mb-8" data-key="promos_subtitle">Profitez de nos réductions exceptionnelles</p>
                <div class="glow-divider"></div>
            </section>
            
            <!-- Countdown Section -->
            <?php include 'worldcupcountdown.php'; ?>
        </div></div></div>
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="pb-20 pt-2 text-center">
                <!-- Promo Coupe du Monde 2026 -->
                <div class="inline-block bg-gradient-to-br from-[#ccff00]/15 to-[#0a0a0a] border-2 border-[#ccff00] rounded-3xl p-6 md:p-8 max-w-xl mx-auto shadow-[0_0_50px_rgba(204,255,0,0.2)] plan-card-shake transition-all duration-300">
                    <span class="text-5xl md:text-6xl mb-4 block drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">⚽</span>
                    <h2 class="text-xl md:text-3xl font-black mb-4 uppercase tracking-tighter text-white leading-tight" data-key="wc_promo_text">Prochainement, des offres exceptionnelles à l'occasion de la prochaine Coupe du Monde 2026.</h2>
                    <div class="flex justify-center gap-4 mb-2">
                        <div class="w-16 h-1.5 bg-[#ccff00] rounded-full"></div>
                        <div class="w-16 h-1.5 bg-[#ccff00] opacity-30 rounded-full"></div>
                        <div class="w-16 h-1.5 bg-[#ccff00] opacity-10 rounded-full"></div>
                    </div>
                    <div class="text-[#ccff00] font-black text-sm mt-4 animate-heartbeat uppercase tracking-widest" data-key="promos_stay_tuned">Stay Tuned</div>
                </div>
            </div>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>
