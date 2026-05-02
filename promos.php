<?php
/**
 * STREAMTV - Promos
 */
$pageTitle = "Nos Offres Spéciales";
$activePage = 'promos';
$showPreloader = false;

include 'header.php';
?>

<div class="page-content py-20">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Offres <span class="text-[#ccff00]">Spéciales</span></h1>
            <p class="text-gray-400 mt-4">Ne ratez pas nos promotions limitées pour une expérience streaming ultime.</p>
        </div>

        <div class="space-y-8">
            <!-- Promo Card 1 -->
            <div class="glass p-8 rounded-[2rem] border-[#ccff00]/20 bg-gradient-to-br from-[#ccff00]/10 to-transparent relative overflow-hidden">
                <div class="absolute top-6 right-6 bg-[#ccff00] text-black font-black px-4 py-1 rounded-full text-xs uppercase tracking-tighter shadow-[0_0_15px_rgba(204,255,0,0.5)]">-50% OFF</div>
                <div class="md:flex items-center gap-10">
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        <img src="https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/png/header.jpg" class="rounded-2xl border border-white/10 shadow-xl">
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-black mb-2 uppercase">Pack Premium Annuel</h3>
                        <p class="text-gray-400 mb-6">Profitez de l'accès complet à +20,000 chaînes et +300,000 films pendant 12 mois à moitié prix.</p>
                        <div class="flex items-center gap-4">
                            <a href="https://wa.me/212670965351?text=Promo%20Annuel%20-50%" class="bg-[#ccff00] text-black font-black px-8 py-3 rounded-xl hover:scale-105 transition-all">PROFITER DE L'OFFRE</a>
                            <span class="text-xs text-gray-500 uppercase tracking-widest">Expire le: 31/12/2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Card 2 -->
            <div class="glass p-8 rounded-[2rem] border-white/5">
                <div class="md:flex items-center gap-10">
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-black mb-2 uppercase">24H Test Gratuit</h3>
                        <p class="text-gray-400 mb-6">Testez notre service gratuitement pendant 24 heures avant de vous engager. Qualité 4K garantie.</p>
                        <a href="https://wa.me/212670965351?text=Demande%20de%20Test%20Gratuit" class="border-2 border-[#ccff00] text-[#ccff00] font-black px-8 py-3 rounded-xl hover:bg-[#ccff00] hover:text-black transition-all inline-block">DEMANDER MON TEST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
