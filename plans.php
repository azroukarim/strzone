<?php
$pageTitle = "Nos Plans d'Abonnement";
$activePage = 'plans';
include 'header.php';
?>

<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="min-h-screen flex flex-col justify-center items-center text-center py-12 md:py-20">
                <h1 class="text-5xl md:text-7xl font-black uppercase mb-6"><span data-key="plans_page_title">Nos</span> <span class="text-[#ccff00]" data-key="plans_page_highlight">Plans</span></h1>
                <p class="text-xl text-gray-300 mb-8" data-key="plans_page_subtitle">Découvrez nos abonnements adaptés à vos besoins</p>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto"></div>
            </section>
        </div></div></div>
        
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="py-16">
                <!-- 5 cartes de plans -->
                <!-- 5 كروت الخطط - شبكة من عمودين في الموبايل -->
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3 md:gap-6 max-w-7xl mx-auto">
                    
                    <!-- Plan TEST -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-4 md:p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                                <span class="text-xl md:text-2xl">🧪</span>
                            </div>
                            <h3 class="text-base md:text-xl font-bold uppercase tracking-wider">TEST</h3>
                            <div class="text-2xl md:text-4xl font-black mt-2 md:mt-3">2<span class="text-sm md:text-xl">€</span></div>
                            <p class="text-gray-500 text-[10px] md:text-sm">pour 24h</p>
                            <p class="text-[#ccff00] text-[10px] md:text-xs mt-1">~21 DH</p>
                            <ul class="mt-4 md:mt-5 space-y-1 md:space-y-2 text-left text-[10px] md:text-sm">
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>Test BASIC</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>Test STANDARD</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>Test PREMIUM</span></li>
                            </ul>
                        </div>
                        <a href="test-plan.php" class="block mt-4 md:mt-6 py-2 px-2 md:px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-[10px] md:text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan BASIC -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-4 md:p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                                <span class="text-xl md:text-2xl">🌟</span>
                            </div>
                            <h3 class="text-base md:text-xl font-bold uppercase tracking-wider">BASIC</h3>
                            <div class="text-2xl md:text-4xl font-black mt-2 md:mt-3">15<span class="text-sm md:text-xl">€</span></div>
                            <p class="text-gray-500 text-[10px] md:text-sm">pour 12 Mois</p>
                            <p class="text-[#ccff00] text-[10px] md:text-xs mt-1">~160 DH/an</p>
                            <ul class="mt-4 md:mt-5 space-y-1 md:space-y-2 text-left text-[10px] md:text-sm">
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>+12,000 Chaînes</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>+150k Films/Séries</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>HD/FHD</span></li>
                            </ul>
                        </div>
                        <a href="channels-basic.php" class="block mt-4 md:mt-6 py-2 px-2 md:px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-[10px] md:text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan STANDARD -->
                    <div class="bg-[#161616]/80 backdrop-blur-sm rounded-2xl border-2 border-[#ccff00] p-4 md:p-6 text-center relative transform md:scale-105 shadow-[0_0_30px_rgba(204,255,0,0.15)] transition-all duration-300 hover:translate-y-[-8px] flex flex-col justify-between">
                        <span class="absolute -top-2 md:-top-3 left-1/2 -translate-x-1/2 bg-[#ccff00] text-black text-[8px] md:text-xs font-black px-2 md:px-3 py-1 rounded-full whitespace-nowrap">🔥 Populaire</span>
                        <div>
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-[#ccff00]/20 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                                <span class="text-xl md:text-2xl">⭐</span>
                            </div>
                            <h3 class="text-base md:text-xl font-bold uppercase tracking-wider text-[#ccff00]">STANDARD</h3>
                            <div class="text-2xl md:text-4xl font-black mt-2 md:mt-3">25<span class="text-sm md:text-xl">€</span></div>
                            <p class="text-gray-500 text-[10px] md:text-sm">pour 12 Mois</p>
                            <p class="text-[#ccff00] text-[10px] md:text-xs mt-1">~265 DH/an</p>
                            <ul class="mt-4 md:mt-5 space-y-1 md:space-y-2 text-left text-[10px] md:text-sm">
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>+20,000 Chaînes</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>+300k Films/Séries</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>HD/FHD/4K</span></li>
                            </ul>
                        </div>
                        <a href="channels.php" class="block mt-4 md:mt-6 py-2 px-2 md:px-4 bg-[#ccff00] text-black font-bold rounded-full hover:bg-transparent hover:text-[#ccff00] border-2 border-[#ccff00] transition-all text-[10px] md:text-sm">Choisir</a>
                    </div>
                    
                    <!-- Plan PREMIUM -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-4 md:p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                                <span class="text-xl md:text-2xl">💎</span>
                            </div>
                            <h3 class="text-base md:text-xl font-bold uppercase tracking-wider">PREMIUM</h3>
                            <div class="text-2xl md:text-4xl font-black mt-2 md:mt-3">40<span class="text-sm md:text-xl">€</span></div>
                            <p class="text-gray-500 text-[10px] md:text-sm">pour 12 Mois</p>
                            <p class="text-[#ccff00] text-[10px] md:text-xs mt-1">~425 DH/an</p>
                            <ul class="mt-4 md:mt-5 space-y-1 md:space-y-2 text-left text-[10px] md:text-sm">
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>+25,000 Chaînes</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>4K Ultra HD</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ccff00]">✓</span> <span>Anti-Freeze Pro</span></li>
                            </ul>
                        </div>
                        <a href="channels-premium.php" class="block mt-4 md:mt-6 py-2 px-2 md:px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-[10px] md:text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan PREMIUM+VIP -->
                    <div class="bg-gradient-to-br from-[#1a1a2e] to-[#0f0f0f] backdrop-blur-sm rounded-2xl border border-[#ffd700] p-4 md:p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden flex flex-col justify-between">
                        <div class="absolute top-0 right-0 w-16 h-16 md:w-20 md:h-20 bg-[#ffd700]/10 rounded-full blur-2xl"></div>
                        <div>
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-[#ffd700]/10 rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4 relative z-10">
                                <span class="text-xl md:text-2xl">👑</span>
                            </div>
                            <h3 class="text-base md:text-xl font-bold uppercase tracking-wider text-[#ffd700]">PREMIUM+VIP</h3>
                            <div class="text-2xl md:text-4xl font-black mt-2 md:mt-3">60<span class="text-sm md:text-xl">€</span></div>
                            <p class="text-gray-500 text-[10px] md:text-sm">pour 12 Mois</p>
                            <p class="text-[#ffd700] text-[10px] md:text-xs mt-1">~640 DH/an</p>
                            <ul class="mt-4 md:mt-5 space-y-1 md:space-y-2 text-left text-[10px] md:text-sm">
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ffd700]">✓</span> <span>+30k Chaînes</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ffd700]">✓</span> <span>4K HDR</span></li>
                                <li class="flex items-center gap-1 md:gap-2"><span class="text-[#ffd700]">✓</span> <span>Multi-écrans</span></li>
                            </ul>
                        </div>
                        <a href="channels-vip.php" class="block mt-4 md:mt-6 py-2 px-2 md:px-4 bg-gradient-to-r from-[#ffd700] to-[#ffcc00] text-black font-bold rounded-full hover:from-transparent hover:to-transparent hover:border-2 hover:border-[#ffd700] hover:text-[#ffd700] transition-all text-[10px] md:text-sm">Choisir</a>
                    </div>

                    
                </div>
                
                <!-- Message d'information sur les paiements -->
                <div class="text-center mt-12 p-4 bg-white/5 rounded-xl max-w-2xl mx-auto">
                    <p class="text-gray-300 text-sm">💳 <span data-key="payment_info">Paiement accepté : Euro (€) ou Dirham Marocain (DH) selon votre préférence</span></p>
                    <p class="text-gray-400 text-xs mt-2">🔒 Transactions 100% sécurisées</p>
                </div>
                
            </div>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>
