<?php
/**
 * STREAMZONE - Plans
 */
$pageTitle = "Nos Plans d'Abonnement";
$activePage = 'plans';
$showPreloader = false; // No need for splash on every page

include 'header.php';
?>

<div class="page-content py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter transform -skew-x-6">Nos <span class="text-[#ccff00]">Offres</span></h1>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Choisissez le plan qui correspond à vos besoins. Activation instantanée 24/7.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <!-- Plan Basic -->
            <div class="glass p-6 rounded-3xl flex flex-col items-center text-center border-white/5 hover:border-[#ccff00]/30 transition-all">
                <span class="text-[#ccff00] text-xs font-bold uppercase tracking-widest mb-4">Essentiel</span>
                <h3 class="text-2xl font-black mb-2">BASIC</h3>
                <div class="text-4xl font-black mb-6">250 <span class="text-sm font-normal text-gray-500">DH/an</span></div>
                <ul class="text-sm text-gray-400 space-y-3 mb-8 text-left w-full">
                    <li class="flex items-center gap-2">✅ +10,000 Chaînes</li>
                    <li class="flex items-center gap-2">✅ Qualité HD/FHD</li>
                    <li class="flex items-center gap-2">✅ Support 24/7</li>
                    <li class="flex items-center gap-2 text-gray-600">❌ Pas de 4K</li>
                </ul>
                <a href="https://wa.me/212670965351?text=Abonnement%20BASIC" class="w-full bg-white/10 text-white py-3 rounded-xl font-bold hover:bg-[#ccff00] hover:text-black transition-all">Commander</a>
            </div>

            <!-- Plan Standard -->
            <div class="glass p-6 rounded-3xl flex flex-col items-center text-center border-[#ccff00]/20 bg-[#ccff00]/5 scale-105 shadow-2xl">
                <span class="bg-[#ccff00] text-black text-[10px] font-black px-3 py-1 rounded-full mb-4">POPULAIRE</span>
                <h3 class="text-2xl font-black mb-2">STANDARD</h3>
                <div class="text-4xl font-black mb-6">400 <span class="text-sm font-normal text-gray-500">DH/an</span></div>
                <ul class="text-sm text-gray-400 space-y-3 mb-8 text-left w-full">
                    <li class="flex items-center gap-2">✅ +20,000 Chaînes</li>
                    <li class="flex items-center gap-2">✅ Qualité FHD/4K</li>
                    <li class="flex items-center gap-2">✅ Replay 7 jours</li>
                    <li class="flex items-center gap-2">✅ Support Prioritaire</li>
                </ul>
                <a href="https://wa.me/212670965351?text=Abonnement%20STANDARD" class="w-full bg-[#ccff00] text-black py-3 rounded-xl font-bold hover:scale-105 transition-all shadow-[0_0_20px_rgba(204,255,0,0.3)]">Commander</a>
            </div>
            
            <!-- More plans can go here -->
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
