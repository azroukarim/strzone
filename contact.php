<?php
$pageTitle = "Contact";
$activePage = 'contact';
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
</style>

<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="flex flex-col justify-center items-center text-center pt-20 md:pt-32 pb-20 md:pb-32">
                <h1 class="text-4xl md:text-7xl font-black uppercase mb-6 animate-heartbeat"><span data-key="contact_title">Contactez-</span><span class="text-[#ccff00]" data-key="contact_highlight">nous</span></h1>
                <p class="text-base md:text-xl text-gray-300 mb-8" data-key="contact_subtitle">Notre équipe est à votre écoute 24h/24</p>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto"></div>
                
                <!-- أزرار الاتصال - مصغرة للجوال -->
                <div class="mt-8 md:mt-12 flex flex-col sm:flex-row gap-4 md:gap-6 justify-center items-center">
                    <!-- زر البريد الإلكتروني -->
                    <a href="mailto:karimakon08@gmail.com" class="group relative inline-flex items-center justify-center gap-2 md:gap-3 px-6 md:px-10 py-2.5 md:py-4 bg-gradient-to-r from-red-600 to-red-700 rounded-xl text-white font-bold text-base md:text-xl tracking-wider transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-red-500/30 overflow-hidden w-full sm:w-auto">
                        <span class="absolute inset-0 w-0 bg-gradient-to-r from-red-700 to-red-800 transition-all duration-300 group-hover:w-full"></span>
                        <span class="relative flex items-center gap-2 md:gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" md:width="26" md:height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 7L2 7"/></svg>
                            EMAIL
                        </span>
                    </a>
                    
                    <!-- زر الواتساب -->
                    <a href="https://wa.me/212670965351" target="_blank" class="group relative inline-flex items-center justify-center gap-2 md:gap-3 px-6 md:px-10 py-2.5 md:py-4 bg-gradient-to-r from-green-600 to-green-700 rounded-xl text-white font-bold text-base md:text-xl tracking-wider transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/30 overflow-hidden w-full sm:w-auto">
                        <span class="absolute inset-0 w-0 bg-gradient-to-r from-green-700 to-green-800 transition-all duration-300 group-hover:w-full"></span>
                        <span class="relative flex items-center gap-2 md:gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" md:width="26" md:height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                            WHATSAPP
                        </span>
                    </a>
                </div>
            </section>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>
