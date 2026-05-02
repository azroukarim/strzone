<?php
/**
 * STREAMTV - Demande de Test
 */
$pageTitle = "Demander un Test";
$activePage = 'test';
$showPreloader = false;

include 'header.php';
?>

<div class="page-content py-20">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Demander un <span class="text-[#ccff00]">Test</span></h1>
            <p class="text-gray-400 mt-4">Sélectionnez vos options et recevez vos accès de test immédiatement.</p>
        </div>

        <form id="testRequestForm" class="glass p-8 md:p-12 rounded-[2rem] border-white/5 space-y-8">
            <!-- Plan Selection -->
            <div>
                <label class="block text-sm font-bold uppercase tracking-widest text-gray-500 mb-4 text-center">1. Choisissez votre Plan</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <label class="relative cursor-pointer group">
                        <input type="radio" name="plan" value="BASIC" class="peer hidden" checked>
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="font-bold text-sm">BASIC</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer group">
                        <input type="radio" name="plan" value="STANDARD" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="font-bold text-sm">STANDARD</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer group">
                        <input type="radio" name="plan" value="PREMIUM" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="font-bold text-sm">PREMIUM</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer group">
                        <input type="radio" name="plan" value="VIP" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="font-bold text-sm">VIP</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Device Selection -->
            <div>
                <label class="block text-sm font-bold uppercase tracking-widest text-gray-500 mb-4 text-center">2. Votre Appareil</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <label class="relative cursor-pointer">
                        <input type="radio" name="device" value="Smart TV" class="peer hidden" checked>
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="text-xs font-bold">SMART TV</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="device" value="Android / Firestick" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="text-xs font-bold">ANDROID</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="device" value="MAG / STB" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="text-xs font-bold">MAG</span>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="radio" name="device" value="PC / Smartphone" class="peer hidden">
                        <div class="p-4 text-center rounded-2xl border border-white/10 peer-checked:border-[#ccff00] peer-checked:bg-[#ccff00]/10 transition-all">
                            <span class="text-xs font-bold">PC/TEL</span>
                        </div>
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full bg-[#ccff00] text-black font-black py-4 rounded-2xl hover:scale-105 transition-all shadow-[0_10px_30px_rgba(204,255,0,0.3)] uppercase tracking-widest">
                Envoyer ma Demande
            </button>
        </form>
    </div>
</div>

<script>
    document.getElementById('testRequestForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const plan = this.querySelector('input[name="plan"]:checked').value;
        const device = this.querySelector('input[name="device"]:checked').value;
        const msg = `*Nouvelle Demande de Test*%0A%0A*Plan:* ${plan}%0A*Appareil:* ${device}%0A%0AMerci de me fournir mes accès de test.`;
        window.open(`https://wa.me/212670965351?text=${msg}`, '_blank');
    });
</script>

<?php include 'footer.php'; ?>
