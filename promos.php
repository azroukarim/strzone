<?php
$pageTitle = "Promotions";
$activePage = 'promos';
include 'header.php';
?>

<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="min-h-screen flex flex-col justify-center items-center text-center py-12 md:py-20">
                <h1 class="text-5xl md:text-7xl font-black uppercase mb-6"><span data-key="promos_title">Offres</span> <span class="text-[#ccff00]" data-key="promos_highlight">spéciales</span></h1>
                <p class="text-xl text-gray-300 mb-8" data-key="promos_subtitle">Profitez de nos réductions exceptionnelles</p>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto"></div>
            </section>
        </div></div></div>
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="py-16 text-center">
                <!-- Promo Coupe du Monde 2026 -->
                <div class="inline-block bg-gradient-to-br from-[#ccff00]/10 to-transparent border border-[#ccff00] rounded-2xl p-10 max-w-2xl mx-auto shadow-[0_0_40px_rgba(204,255,0,0.1)] mb-12">
                    <span class="text-6xl mb-6 block">⚽</span>
                    <h2 class="text-3xl md:text-4xl font-black mb-6 uppercase tracking-tighter" data-key="wc_promo_text">Prochainement, des offres exceptionnelles à l'occasion de la prochaine Coupe du Monde 2026.</h2>
                    <div class="flex justify-center gap-4">
                        <div class="w-12 h-1 bg-[#ccff00]"></div>
                        <div class="w-12 h-1 bg-[#ccff00] opacity-30"></div>
                        <div class="w-12 h-1 bg-[#ccff00] opacity-10"></div>
                    </div>
                </div>

                <!-- Promo Actuelle -->
                <div class="inline-block bg-white/5 border border-white/10 rounded-2xl p-8 max-w-xl mx-auto backdrop-blur-sm">
                    <span class="text-4xl mb-4 block">🎁</span>
                    <h2 class="text-2xl font-bold mb-4" data-key="promo_offer">-50% sur l'abonnement Premium Annuel!</h2>
                    <p class="text-gray-300 mb-6"><span data-key="promo_code_label">Code:</span> <span class="text-[#ccff00] font-mono text-xl">STREAMTV50</span></p>
                    <p class="text-gray-400 text-sm" data-key="promo_validity">Offre limitée - Valable jusqu'au 31 Décembre 2025</p>
                </div>
            </div>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>
