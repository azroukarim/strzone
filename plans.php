<?php
$pageTitle = "Nos Plans d'Abonnement";
$activePage = 'plans';
include 'header.php';
?>

<style>
    /* Card Aesthetic - Matching telechargement.php */
    .p-card-modern {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 1.25rem;
        padding: 1.5rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 255, 255, 0.08);
        text-align: center;
        backdrop-filter: blur(10px);
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 1rem;
        width: 100%;
    }
    .p-card-modern:hover {
        background: rgba(204, 255, 0, 0.08);
        border-color: #ccff00;
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(204, 255, 0, 0.1);
    }
    .p-icon-box {
        width: 60px; height: 60px; border-radius: 15px;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto; border: 2px solid rgba(204, 255, 0, 0.3);
        background: #111; box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        font-size: 1.8rem;
    }
    .p-name-label { font-size: 0.9rem; font-weight: 800; color: #fff; letter-spacing: 0.5px; text-transform: uppercase; }
    .p-price-val { font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.8rem; color: #fff; line-height: 1; }
    .p-price-val span { font-size: 0.9rem; color: #ccff00; }
    .p-dur-label { font-size: 0.7rem; color: #888; font-weight: 600; }
    .p-tag-choc {
        font-size: 0.65rem; color: #ccff00; font-weight: 800;
        background: rgba(204, 255, 0, 0.05); padding: 4px 8px;
        border-radius: 6px; display: inline-block;
        border: 1px solid rgba(204, 255, 0, 0.1);
    }
    .p-action-btn {
        background: #ccff00; color: #000; font-weight: 900;
        padding: 0.6rem 1rem; border-radius: 50px;
        transition: all 0.3s ease; text-transform: uppercase;
        letter-spacing: 1px; text-decoration: none;
        display: inline-block; font-size: 0.7rem; width: 100%;
    }
    .p-action-btn:hover { background: #fff; transform: scale(1.02); box-shadow: 0 0 20px rgba(204, 255, 0, 0.4); color: #000; }

    /* Layout Controller */
    .plans-final-container {
        display: grid;
        grid-template-columns: 1fr; /* Single column vertical list on Desktop */
        gap: 1.5rem;
        max-width: 800px; /* Reduced max-width for better vertical list look */
        margin: 0 auto;
    }

    /* Modern Horizontal Layout for Desktop */
    @media (min-width: 1101px) {
        .p-card-modern {
            flex-direction: row;
            text-align: left;
            align-items: center;
            padding: 1.5rem 2.5rem;
        }
        .p-icon-box { margin: 0; }
        .p-price-val { font-size: 2.5rem; }
        .p-action-btn { width: auto; min-width: 180px; }
    }

    @media (max-width: 1100px) {
        .plans-final-container {
            grid-template-columns: repeat(3, 1fr) !important;
            gap: 0.5rem !important;
            max-width: 100%;
        }
        .p-card-modern { padding: 0.8rem 0.4rem; border-radius: 1rem; gap: 0.5rem; }
        .p-icon-box { width: 35px; height: 35px; font-size: 1rem; border-radius: 8px; }
        .p-name-label { font-size: 0.6rem; }
        .p-price-val { font-size: 1.1rem; }
        .p-dur-label { display: none; }
        .p-tag-choc { font-size: 0.5rem; padding: 2px 4px; }
        .p-action-btn { padding: 0.4rem; font-size: 0.55rem; }
    }

    @keyframes heartbeat { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
    .animate-heartbeat { animation: heartbeat 2s infinite ease-in-out; }
</style>

<div class="page-content bg-stadium">
    <div class="section-content">
        <div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="flex flex-col justify-center items-center text-center pt-12 md:pt-20 pb-6 md:pb-8">
                <h1 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down">
                    <span data-key="plans_title1">Nos</span> <span class="text-[#ccff00] title-glow" data-key="plans_title2">Plans</span>
                </h1>
                <p class="text-sm text-gray-300 mb-8" data-key="plans_subtitle">Découvrez nos abonnements adaptés à vos besoins</p>
                <div class="w-16 h-1 bg-[#ccff00] mx-auto"></div>
            </section>
            
            <div class="py-16">
                <div class="plans-final-container">
                    
                    <!-- Plan 1 -->
                    <div class="p-card-modern">
                        <div class="p-icon-box">🧪</div>
                        <div class="flex-grow">
                            <div class="p-name-label" data-key="plan_test_name">TEST</div>
                            <div class="p-price-val">2<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_test_dur">24h (~21 DH)</div>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="test-plan.php" class="p-action-btn" data-key="plan_btn_choose">CHOISIR</a>
                    </div>
                    
                    <!-- Plan 2 -->
                    <div class="p-card-modern">
                        <div class="p-icon-box">🌟</div>
                        <div class="flex-grow">
                            <div class="p-name-label" data-key="plan_basic_name">BASIC</div>
                            <div class="p-price-val">15<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_basic_dur">12 Mois (~160 DH)</div>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-basic.php" class="p-action-btn" data-key="plan_btn_choose">CHOISIR</a>
                    </div>
                    
                    <!-- Plan 3 -->
                    <div class="p-card-modern" style="border-color: rgba(204, 255, 0, 0.4);">
                        <div class="p-icon-box" style="background: rgba(204, 255, 0, 0.1); border-color: #ccff00;">⭐</div>
                        <div class="flex-grow">
                            <div class="p-name-label" style="color: #ccff00;" data-key="plan_standard_name">STANDARD</div>
                            <div class="p-price-val">25<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_standard_dur">12 Mois (~265 DH)</div>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels.php" class="p-action-btn" data-key="plan_btn_choose">CHOISIR</a>
                    </div>
                    
                    <!-- Plan 4 -->
                    <div class="p-card-modern">
                        <div class="p-icon-box">💎</div>
                        <div class="flex-grow">
                            <div class="p-name-label" data-key="plan_premium_name">PREMIUM</div>
                            <div class="p-price-val">40<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_premium_dur">12 Mois (~425 DH)</div>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-premium.php" class="p-action-btn" data-key="plan_btn_choose">CHOISIR</a>
                    </div>
                    
                    <!-- Plan 5 -->
                    <div class="p-card-modern" style="border-color: rgba(255, 215, 0, 0.4); background: linear-gradient(to bottom, rgba(255, 215, 0, 0.05), rgba(0,0,0,0.4));">
                        <div class="p-icon-box" style="background: rgba(255, 215, 0, 0.1); border-color: #ffd700;">👑</div>
                        <div class="flex-grow">
                            <div class="p-name-label" style="color: #ffd700;" data-key="plan_vip_name">PREMIUM+VIP</div>
                            <div class="p-price-val">60<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_vip_dur">12 Mois (~640 DH)</div>
                            <div class="p-tag-choc animate-heartbeat" style="color: #ffd700;" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-vip.php" class="p-action-btn" style="background: #ffd700;" data-key="plan_btn_choose">CHOISIR</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
