<?php
$pageTitle = "Nos Plans d'Abonnement";
$activePage = 'plans';
include 'header.php';
// The maintenance_check.php is already included in header.php, 
// so $global_site_settings is available here.
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
    .p-name-label { 
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        background: #ccff00;
        color: #000;
        padding: 4px 16px;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 900;
        letter-spacing: 1px;
        text-transform: uppercase;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3), 0 0 15px rgba(204, 255, 0, 0.4);
        z-index: 20;
        white-space: nowrap;
    }
    .p-price-val { font-family: 'Roboto', sans-serif; font-weight: 900; font-size: 1.8rem; color: #fff; line-height: 1; }
    .p-price-val span { font-size: 0.9rem; color: #ccff00; }
    .p-dur-label { font-size: 0.7rem; color: #888; font-weight: 600; margin-top: 4px; }
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
    
    .p-features-list {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
        text-align: left;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.7);
        line-height: 1.8;
    }
    .p-features-list li {
        margin-bottom: 0.5rem;
        padding-left: 1.25rem;
        position: relative;
    }
    .p-features-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #ccff00;
        font-weight: bold;
    }
    
    @media (max-width: 1100px) {
        .p-features-list {
            font-size: 0.6rem;
            margin: 0.5rem 0;
            line-height: 1.4;
        }
        .p-features-list li {
            margin-bottom: 0.2rem;
            padding-left: 0.8rem;
        }
    }

    /* Layout Controller */
    .plans-final-container {
        display: grid;
        gap: 1.5rem;
        max-width: 1500px;
        margin: 0 auto;
    }

    /* Desktop: card fills height and adapts width */
    @media (min-width: 1101px) {
        .p-card-modern {
            height: 100%;
            min-width: 0; /* prevent overflow */
        }
    }

    /* Dynamic column count set via PHP inline style */
    /* Tablet: 2 columns when 3+ plans, else 1 per row */
    @media (max-width: 1100px) and (min-width: 641px) {
        .plans-final-container {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 1rem !important;
        }
    }

    /* Mobile: 1 column */
    @media (max-width: 640px) {
        .plans-final-container {
            grid-template-columns: 1fr !important;
            gap: 0.75rem !important;
            max-width: 100%;
        }
        .p-card-modern { padding: 1rem; }
        .p-icon-box { width: 45px; height: 45px; font-size: 1.3rem; }
        .p-name-label { font-size: 0.65rem; }
        .p-price-val { font-size: 1.4rem; }
        .p-action-btn { font-size: 0.65rem; }
    }

    /* Small mobile: compact 2-col grid */
    @media (max-width: 500px) {
        .plans-final-container {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 0.5rem !important;
        }
        .p-card-modern { padding: 0.8rem 0.4rem; border-radius: 1rem; gap: 0.5rem; }
        .p-icon-box { width: 35px; height: 35px; font-size: 1rem; border-radius: 8px; }
        .p-name-label { font-size: 0.55rem; top: -10px; padding: 2px 8px; }
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
                <div class="glow-divider"></div>
            </section>
            
            <!-- Countdown Section -->
            <?php include 'worldcupcountdown.php'; ?>
            
            <div class="py-16">
                <?php
                // Count visible plans for dynamic grid
                $plan_keys_count = ['show_plan_test', 'show_plan_basic', 'show_plan_standard', 'show_plan_premium', 'show_plan_vip'];
                $visible_count = 0;
                foreach ($plan_keys_count as $pk) {
                    if (($global_site_settings[$pk] ?? 'on') === 'on') $visible_count++;
                }
                // Determine columns: max 5, min 1
                $cols = max(1, min($visible_count, 5));
                // Card width approx 280px + gap, center the container
                $card_width = 280;
                $gap = 24;
                $max_w = ($card_width * $cols) + ($gap * ($cols - 1));
                $desktop_cols_style = "grid-template-columns: repeat({$cols}, minmax(0, 1fr)); max-width: {$max_w}px; margin: 0 auto;";
                ?>
                <div class="plans-final-container" style="<?php echo $desktop_cols_style; ?>">
                    
                    <?php if (($global_site_settings['show_plan_test'] ?? 'on') === 'on'): ?>
                    <!-- Plan 1 -->
                    <div class="p-card-modern">
                        <div class="p-name-label" data-key="plan_test_name">TEST</div>
                        <div class="p-icon-box">🧪</div>
                        <div class="flex-grow">
                            <div class="p-price-val">2<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_test_dur">24h (~21 DH)</div>
                            <ul class="p-features-list">
                                <li data-key="feat_dur_24h">Accès 24 Heures</li>
                                <li data-key="feat_test_covers">Inclus: BASIC / STANDARD / PREMIUM</li>
                                <li data-key="feat_test_no_vip" style="color: #ff4444; font-weight: bold;">NON DISPONIBLE: PREMIUM+VIP</li>
                            </ul>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="test-plan.php" class="p-action-btn" data-key="plan_btn_choose">COMMANDER</a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (($global_site_settings['show_plan_basic'] ?? 'on') === 'on'): ?>
                    <!-- Plan 2 -->
                    <div class="p-card-modern">
                        <div class="p-name-label" data-key="plan_basic_name">BASIC</div>
                        <div class="p-icon-box">🌟</div>
                        <div class="flex-grow">
                            <div class="p-price-val">15<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_basic_dur">12 Mois (~160 DH)</div>
                            <ul class="p-features-list">
                                <li data-key="feat_channels_15k">+15,000 Chaînes</li>
                                <li data-key="feat_quality_hd">SD / HD / FHD / 4K / 8K</li>
                                <li data-key="feat_support_247">Support 24/7</li>
                                <li data-key="feat_all_devices">Tous les appareils</li>
                            </ul>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-basic.php" class="p-action-btn" data-key="plan_btn_choose">COMMANDER</a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (($global_site_settings['show_plan_standard'] ?? 'on') === 'on'): ?>
                    <!-- Plan 3 -->
                    <div class="p-card-modern" style="border-color: rgba(204, 255, 0, 0.4);">
                        <div class="p-name-label" style="background: #ccff00; color: #000;" data-key="plan_standard_name">STANDARD</div>
                        <div class="p-icon-box" style="background: rgba(204, 255, 0, 0.1); border-color: #ccff00;">⭐</div>
                        <div class="flex-grow">
                            <div class="p-price-val">25<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_standard_dur">12 Mois (~265 DH)</div>
                            <ul class="p-features-list">
                                <li data-key="feat_channels_20k">+20,000 Chaînes</li>
                                <li data-key="feat_quality_4k">SD / HD / FHD / 4K / 8K</li>
                                <li data-key="feat_vod">Films & Séries (VOD)</li>
                                <li data-key="feat_support_247">Support 24/7</li>
                            </ul>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels.php" class="p-action-btn" data-key="plan_btn_choose">COMMANDER</a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (($global_site_settings['show_plan_premium'] ?? 'on') === 'on'): ?>
                    <!-- Plan 4 -->
                    <div class="p-card-modern">
                        <div class="p-name-label" data-key="plan_premium_name">PREMIUM</div>
                        <div class="p-icon-box">💎</div>
                        <div class="flex-grow">
                            <div class="p-price-val">40<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_premium_dur">12 Mois (~425 DH)</div>
                            <ul class="p-features-list">
                                <li data-key="feat_channels_25k">+25,000 Chaînes</li>
                                <li data-key="feat_quality_8k">SD / HD / FHD / 4K / 8K</li>
                                <li data-key="feat_premium_vod">Vod Premium & 4K</li>
                                <li data-key="feat_antifreeze">Anti-Freeze Technology</li>
                            </ul>
                            <div class="p-tag-choc animate-heartbeat" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-premium.php" class="p-action-btn" data-key="plan_btn_choose">COMMANDER</a>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (($global_site_settings['show_plan_vip'] ?? 'on') === 'on'): ?>
                    <!-- Plan 5 -->
                    <div class="p-card-modern" style="border-color: rgba(255, 215, 0, 0.4); background: linear-gradient(to bottom, rgba(255, 215, 0, 0.05), rgba(0,0,0,0.4));">
                        <div class="p-name-label" style="background: #ffd700; color: #000; box-shadow: 0 0 15px rgba(255, 215, 0, 0.4);" data-key="plan_vip_name">PREMIUM+VIP</div>
                        <div class="p-icon-box" style="background: rgba(255, 215, 0, 0.1); border-color: #ffd700;">👑</div>
                        <div class="flex-grow">
                            <div class="p-price-val">60<span>€</span></div>
                            <div class="p-dur-label" data-key="plan_vip_dur">12 Mois (~640 DH)</div>
                            <ul class="p-features-list">
                                <li data-key="feat_vip_access" style="color: #ffd700; font-weight: bold;">Accès VIP Complet</li>
                                <li data-key="feat_quality_ultra">Ultra HD / 4K / 8K HDR</li>
                                <li data-key="feat_latest_vod">Derniers Films & Séries</li>
                                <li data-key="feat_dedicated_support">Support Dédié 24/7</li>
                            </ul>
                            <div class="p-tag-choc animate-heartbeat" style="color: #ffd700;" data-key="plan_tag_choc">PRIX CHOC</div>
                        </div>
                        <a href="channels-vip.php" class="p-action-btn" style="background: #ffd700;" data-key="plan_btn_choose">COMMANDER</a>
                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
