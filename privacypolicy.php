<?php
/**
 * STREAMTV - Vie Privée
 */
$pageTitle = "Vie Privée";
$showPreloader = false;

include 'header.php';
?>

<div class="page-content py-20 min-h-screen">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-7xl font-black uppercase mb-4 tracking-tighter">Politique de <span class="text-[#ccff00] title-glow">Confidentialité</span></h1>
            <div class="w-24 h-1 bg-[#ccff00] mx-auto rounded-full shadow-[0_0_15px_#ccff00]"></div>
            <p class="mt-6 text-gray-400 uppercase tracking-widest text-sm">Dernière mise à jour : 2 Mai 2026</p>
        </div>
        
        <div class="glass p-8 md:p-12 rounded-[2.5rem] border border-white/10 space-y-12 text-gray-300 leading-relaxed relative overflow-hidden">
            <!-- Decorative blur -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#ccff00]/10 blur-[100px] rounded-full"></div>
            
            <section class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#ccff00]/20 flex items-center justify-center text-[#ccff00]">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-tight">1. Introduction</h3>
                </div>
                <p>Chez <span class="text-white font-bold">STREAMTV</span>, la protection de votre vie privée est notre priorité absolue. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos données personnelles lorsque vous utilisez nos services de streaming.</p>
            </section>

            <section class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#ccff00]/20 flex items-center justify-center text-[#ccff00]">
                        <i data-lucide="database"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-tight">2. Collecte des données</h3>
                </div>
                <p>Nous ne collectons que les informations strictement nécessaires à la fourniture de nos services :</p>
                <ul class="list-disc list-inside mt-4 space-y-2 ml-4">
                    <li>Informations de contact (Email, Numéro WhatsApp).</li>
                    <li>Informations techniques (Adresse IP, type d'appareil) pour assurer la compatibilité.</li>
                    <li>Données d'utilisation pour optimiser la qualité du flux.</li>
                </ul>
            </section>

            <section class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#ccff00]/20 flex items-center justify-center text-[#ccff00]">
                        <i data-lucide="eye-off"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-tight">3. Utilisation de vos données</h3>
                </div>
                <p>Vos informations sont utilisées exclusivement pour :</p>
                <ul class="list-disc list-inside mt-4 space-y-2 ml-4">
                    <li>L'activation et la gestion de votre abonnement.</li>
                    <li>Le support technique et la résolution de problèmes.</li>
                    <li>L'envoi de mises à jour critiques sur le service.</li>
                </ul>
                <p class="mt-4 font-semibold text-[#ccff00]">Nous ne vendons, ne louons et ne partageons jamais vos données avec des tiers à des fins marketing.</p>
            </section>

            <section class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#ccff00]/20 flex items-center justify-center text-[#ccff00]">
                        <i data-lucide="lock"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-tight">4. Sécurité</h3>
                </div>
                <p>Nous utilisons des protocoles de cryptage de niveau industriel (SSL/TLS) pour protéger toutes les communications entre votre appareil et nos serveurs. Vos données sont stockées dans des environnements sécurisés avec un accès restreint.</p>
            </section>

            <section class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#ccff00]/20 flex items-center justify-center text-[#ccff00]">
                        <i data-lucide="user-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-tight">5. Vos Droits</h3>
                </div>
                <p>Vous avez le droit d'accéder, de rectifier ou de demander la suppression de vos données personnelles à tout moment. Pour toute demande, veuillez nous contacter via WhatsApp ou notre formulaire de contact.</p>
            </section>

            <div class="pt-8 border-t border-white/5 text-center">
                <p class="text-sm text-gray-500 italic">En utilisant STREAMTV, vous acceptez les termes de cette politique de confidentialité.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

