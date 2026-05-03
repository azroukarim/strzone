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
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 max-w-7xl mx-auto">
                    
                    <!-- Plan TEST - 2€ (redirige vers test-plan.html) -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🧪</span>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-wider">TEST</h3>
                        <div class="text-4xl font-black mt-3">2<span class="text-xl">€</span></div>
                        <p class="text-gray-500 text-sm">pour 24h</p>
                        <p class="text-[#ccff00] text-xs mt-1">~21 DH</p>
                        <ul class="mt-5 space-y-2 text-left text-sm">
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Test pour BASIC</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Test pour STANDARD</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Test pour PREMIUM</span></li>
                            <li class="flex items-center gap-2 opacity-50"><span class="text-gray-500">✕</span> <span>Pas de test VIP</span></li>
                        </ul>
                        <!-- الرابط يوجه إلى صفحة اختيار خطة TEST -->
                        <a href="test-plan.php" class="block mt-6 py-2 px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan BASIC - 15€ (redirige vers channels-basic.html) -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🌟</span>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-wider">BASIC</h3>
                        <div class="text-4xl font-black mt-3">15<span class="text-xl">€</span></div>
                        <p class="text-gray-500 text-sm">pour 12 Mois</p>
                        <p class="text-[#ccff00] text-xs mt-1">~160 DH/an</p>
                        <ul class="mt-5 space-y-2 text-left text-sm">
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+12,000 Chaînes</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+150,000 Films & Séries</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>HD/FHD</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Support Standard</span></li>
                        </ul>
                        <a href="channels-basic.php" class="block mt-6 py-2 px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan STANDARD - 25€ (redirige vers channels.html) -->
                    <div class="bg-[#161616]/80 backdrop-blur-sm rounded-2xl border-2 border-[#ccff00] p-6 text-center relative transform md:scale-105 shadow-[0_0_30px_rgba(204,255,0,0.15)] transition-all duration-300 hover:translate-y-[-8px]">
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#ccff00] text-black text-xs font-black px-3 py-1 rounded-full">🔥 Populaire</span>
                        <div class="w-16 h-16 bg-[#ccff00]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">⭐</span>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-wider text-[#ccff00]">STANDARD</h3>
                        <div class="text-4xl font-black mt-3">25<span class="text-xl">€</span></div>
                        <p class="text-gray-500 text-sm">pour 12 Mois</p>
                        <p class="text-[#ccff00] text-xs mt-1">~265 DH/an</p>
                        <ul class="mt-5 space-y-2 text-left text-sm">
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+20,000 Chaînes</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+300,000 Films & Séries</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>HD/FHD/4K</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Anti-Freeze 2.0</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Support 24/7</span></li>
                        </ul>
                        <a href="channels.php" class="block mt-6 py-2 px-4 bg-[#ccff00] text-black font-bold rounded-full hover:bg-transparent hover:text-[#ccff00] border-2 border-[#ccff00] transition-all text-sm">Choisir</a>
                    </div>
                    
                    <!-- Plan PREMIUM - 40€ (redirige vers channels-premium.html) -->
                    <div class="bg-[#0f0f0f]/80 backdrop-blur-sm rounded-2xl border border-white/10 p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300">
                        <div class="w-16 h-16 bg-[#ccff00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">💎</span>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-wider">PREMIUM</h3>
                        <div class="text-4xl font-black mt-3">40<span class="text-xl">€</span></div>
                        <p class="text-gray-500 text-sm">pour 12 Mois</p>
                        <p class="text-[#ccff00] text-xs mt-1">~425 DH/an</p>
                        <ul class="mt-5 space-y-2 text-left text-sm">
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+25,000 Chaînes</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>+400,000 Films & Séries</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>4K Ultra HD</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Anti-Freeze Pro</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Support Prioritaire</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ccff00]">✓</span> <span>Application incluse</span></li>
                        </ul>
                        <a href="channels-premium.php" class="block mt-6 py-2 px-4 border border-[#ccff00] text-[#ccff00] rounded-full hover:bg-[#ccff00] hover:text-black transition-all text-sm font-semibold">Choisir</a>
                    </div>
                    
                    <!-- Plan PREMIUM+VIP - 60€ (redirige vers channels-vip.html) -->
                    <div class="bg-gradient-to-br from-[#1a1a2e] to-[#0f0f0f] backdrop-blur-sm rounded-2xl border border-[#ffd700] p-6 text-center hover:transform hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-[#ffd700]/10 rounded-full blur-2xl"></div>
                        <div class="w-16 h-16 bg-[#ffd700]/10 rounded-full flex items-center justify-center mx-auto mb-4 relative z-10">
                            <span class="text-2xl">👑</span>
                        </div>
                        <h3 class="text-xl font-bold uppercase tracking-wider text-[#ffd700]">PREMIUM+VIP</h3>
                        <div class="text-4xl font-black mt-3">60<span class="text-xl">€</span></div>
                        <p class="text-gray-500 text-sm">pour 12 Mois</p>
                        <p class="text-[#ffd700] text-xs mt-1">~640 DH/an</p>
                        <ul class="mt-5 space-y-2 text-left text-sm">
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>+30,000 Chaînes</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>+500,000 Films & Séries</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>4K Ultra HD HDR disponible</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>Anti-Freeze VIP</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>Support VIP 24/7</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>Application Premium + Multi-écrans</span></li>
                            <li class="flex items-center gap-2"><span class="text-[#ffd700]">✓</span> <span>Accès PPV inclus</span></li>
                        </ul>
                        <a href="channels-vip.php" class="block mt-6 py-2 px-4 bg-gradient-to-r from-[#ffd700] to-[#ffcc00] text-black font-bold rounded-full hover:from-transparent hover:to-transparent hover:border-2 hover:border-[#ffd700] hover:text-[#ffd700] transition-all text-sm">Choisir</a>
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
