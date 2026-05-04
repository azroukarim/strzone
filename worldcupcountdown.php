<?php
/**
 * STREAMTV - World Cup Countdown Component
 * Controlled by Admin Dashboard
 */
$cd_show = $global_site_settings['show_countdown'] ?? 'on';
$cd_target = $global_site_settings['countdown_target'] ?? '2026-06-11T00:00:00';
$cd_slogan_fr = $global_site_settings['countdown_slogan_fr'] ?? 'Tic-Tac... le monde attend son roi. Seras-tu celui qui fera trembler les filets ?';
$cd_slogan_en = $global_site_settings['countdown_slogan_en'] ?? 'Tic-Tac... the world awaits its king. Will you be the one to shake the nets?';

if ($cd_show === 'on'): 
?>
<div class="countdown-global-section py-4" 
     data-target="<?php echo htmlspecialchars($cd_target); ?>"
     data-slogan-fr="<?php echo htmlspecialchars($cd_slogan_fr); ?>"
     data-slogan-en="<?php echo htmlspecialchars($cd_slogan_en); ?>">
    <div class="container-fluid" style="max-width: 1400px;">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-8">
            <!-- Left: Message & Arrow -->
            <div class="flex flex-col items-center sm:items-end fade-right px-4">
                <h2 id="dynamic-countdown-slogan" class="text-[10px] sm:text-xs md:text-base font-bold italic tracking-tight text-white mb-1 text-center sm:text-right leading-tight max-w-[300px] md:max-w-[400px]" style="text-shadow: 0 0 10px rgba(255,255,255,0.3); font-family: 'Montserrat', sans-serif;">
                    <?php echo nl2br(htmlspecialchars($cd_slogan_fr)); ?>
                </h2>
                <div class="flex items-center gap-2">
                    <div class="h-0.5 w-12 bg-[#ccff00] rounded-full shadow-[0_0_8px_#ccff00]"></div>
                    <div class="animate-bounce-horizontal hidden sm:block">
                        <i data-lucide="arrow-right" class="w-6 h-6 text-[#ccff00]"></i>
                    </div>
                    <div class="animate-bounce-vertical sm:hidden">
                        <i data-lucide="arrow-down" class="w-6 h-6 text-[#ccff00]"></i>
                    </div>
                </div>
            </div>

            <!-- Middle: Main Countdown Box -->
            <div class="relative scale-in">
                <!-- Frame Badge -->
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-[#ccff00] text-black text-[10px] font-black px-4 py-0.5 rounded-full shadow-[0_0_15px_rgba(204,255,0,0.5)] z-10 whitespace-nowrap" style="font-family: 'Urbanist', sans-serif;">
                    FIFA WORLD CUP 2026
                </div>
                
                <div class="bg-[#1a1a1a]/95 backdrop-blur-3xl border border-[#ccff00]/30 rounded-2xl p-2 md:p-3 flex items-center gap-3 md:gap-5 shadow-[0_0_30px_rgba(0,0,0,0.6)]">
                    <div class="flex flex-col items-center">
                        <div class="flex gap-2 md:gap-3">
                            <div class="text-center">
                                <div class="w-9 h-9 md:w-11 md:h-11 bg-red-600 rounded-lg flex items-center justify-center text-base md:text-lg font-black shadow-[0_0_15px_rgba(220,38,38,0.4)]" id="cd-days">00</div>
                                <span class="text-[7px] md:text-[8px] font-black uppercase text-[#ccff00] mt-1 block tracking-widest" data-key="countdown_days">DAYS</span>
                            </div>
                            <div class="text-center">
                                <div class="w-9 h-9 md:w-11 md:h-11 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-base md:text-lg font-black" id="cd-hours">00</div>
                                <span class="text-[7px] md:text-[8px] font-black uppercase text-gray-500 mt-1 block tracking-widest" data-key="countdown_hours">HOURS</span>
                            </div>
                            <div class="text-center">
                                <div class="w-9 h-9 md:w-11 md:h-11 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-base md:text-lg font-black" id="cd-minutes">00</div>
                                <span class="text-[7px] md:text-[8px] font-black uppercase text-gray-500 mt-1 block tracking-widest" data-key="countdown_minutes">MINS</span>
                            </div>
                            <div class="text-center">
                                <div class="w-9 h-9 md:w-11 md:h-11 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center text-base md:text-lg font-black" id="cd-seconds">00</div>
                                <span class="text-[7px] md:text-[8px] font-black uppercase text-gray-500 mt-1 block tracking-widest" data-key="countdown_seconds">SECS</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Logo inside box -->
                    <div class="flex w-10 h-10 md:w-14 md:h-14 bg-white/5 rounded-xl border border-white/10 p-1 items-center justify-center">
                        <img src="https://prod-media.beinsports.com/image/fifa_2026_logo.256.png?ver=03-06-2025" alt="FIFA 2026" class="w-full h-auto drop-shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        function update() {
            var container = document.querySelector('.countdown-global-section');
            if (!container) return;
            var target = new Date(container.getAttribute('data-target') || '2026-06-11T00:00:00').getTime();
            var diff = target - new Date().getTime();
            if (diff < 0) return;
            var d = Math.floor(diff/86400000), h = Math.floor((diff%86400000)/3600000), m = Math.floor((diff%3600000)/60000), s = Math.floor((diff%60000)/1000);
            var dE = document.getElementById('cd-days'), hE = document.getElementById('cd-hours'), mE = document.getElementById('cd-minutes'), sE = document.getElementById('cd-seconds');
            if(dE) dE.textContent = (d < 10 ? '0'+d : d); if(hE) hE.textContent = (h < 10 ? '0'+h : h); if(mE) mE.textContent = (m < 10 ? '0'+m : m); if(sE) sE.textContent = (s < 10 ? '0'+s : s);
        }
        update(); setInterval(update, 1000);
    })();
</script>
<?php endif; ?>
