<?php
/**
 * STREAMTV - Téléchargements
 */
$pageTitle = "Téléchargez nos Applications";
$activePage = 'download';
$showPreloader = false;

include 'header.php';
?>

<div class="page-content py-20">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Nos <span class="text-[#ccff00]">Applications</span></h1>
            <p class="text-gray-400 mt-4">Profitez de STREAMTV sur tous vos appareils avec nos applications optimisées.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Android -->
            <div class="glass p-8 rounded-3xl text-center border-white/5 hover:border-[#ccff00]/30 transition-all group">
                <div class="w-20 h-20 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00] mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="smartphone" size="40"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Android & Firestick</h3>
                <p class="text-gray-400 text-sm mb-8">Application optimisée pour smartphones, tablettes et Fire TV Stick.</p>
                <a href="#" class="inline-block w-full py-3 bg-white/10 rounded-xl font-bold hover:bg-[#ccff00] hover:text-black transition-all">TÉLÉCHARGER .APK</a>
            </div>

            <!-- Windows -->
            <div class="glass p-8 rounded-3xl text-center border-white/5 hover:border-[#ccff00]/30 transition-all group">
                <div class="w-20 h-20 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00] mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="monitor" size="40"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Windows PC</h3>
                <p class="text-gray-400 text-sm mb-8">Regardez vos chaînes préférées directement sur votre ordinateur.</p>
                <a href="#" class="inline-block w-full py-3 bg-white/10 rounded-xl font-bold hover:bg-[#ccff00] hover:text-black transition-all">TÉLÉCHARGER .EXE</a>
            </div>

            <!-- iOS -->
            <div class="glass p-8 rounded-3xl text-center border-white/5 hover:border-[#ccff00]/30 transition-all group">
                <div class="w-20 h-20 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00] mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="tv" size="40"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Smart TV</h3>
                <p class="text-gray-400 text-sm mb-8">Guide d'installation pour Samsung, LG et Apple TV.</p>
                <a href="https://wa.me/212670965351?text=Aide%20Installation%20Smart%20TV" class="inline-block w-full py-3 bg-white/10 rounded-xl font-bold hover:bg-[#ccff00] hover:text-black transition-all">GUIDE D'INSTALLATION</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
