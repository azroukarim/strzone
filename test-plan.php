<?php
/**
 * STREAMTV - Demande de Test
 */
$pageTitle = "Demander un Test";
$activePage = 'test';
$showPreloader = false;

// Check Trial Status from local file
$pupFile = 'links/Pup';
$trialEnabled = true;
$trialMessage = "";

if (file_exists($pupFile)) {
    $status = trim(file_get_contents($pupFile));
    if ($status === 'NO TRIAL TODAY') {
        $trialEnabled = false;
        $trialMessage = "Les tests gratuits sont temporairement indisponibles aujourd'hui. Veuillez revenir plus tard ou souscrire à un plan directement.";
    }
}

include 'header.php';
?>

<div class="page-content">
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
    @keyframes shake {
        0% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(2px, 2px) rotate(1deg); }
        50% { transform: translate(-2px, -2px) rotate(-1deg); }
        75% { transform: translate(2px, -2px) rotate(1deg); }
        100% { transform: translate(0, 0) rotate(0deg); }
    }
    .plan-card-shake:hover {
        animation: shake 0.3s ease-in-out infinite;
    }
    </style>
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <section class="min-h-[40vh] flex flex-col justify-center items-center text-center py-12 md:py-16">
            <p style="color:#ccff00;font-size:.75rem;letter-spacing:.2rem;text-transform:uppercase;margin-bottom:.75rem;" data-key="test_badge">🧪 TEST GRATUIT — 24H</p>
            <h1 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="test_title1">Demander un </span><span class="text-[#ccff00] title-glow" data-key="test_title2">Test</span></h1>
            <p class="text-xl text-gray-300 mb-6" data-key="test_subtitle">Sélectionnez vos options et recevez vos accès de test immédiatement.</p>
            <div class="w-24 h-1 bg-[#ccff00] mx-auto"></div>
        </section>
    </div></div></div>

    <div class="bg-movie"><div class="section-content"><div class="max-w-[860px] mx-auto px-4 md:px-6 lg:px-8 py-12">

        <?php if ($trialEnabled): ?>
            <!-- Step dots -->
            <div style="display:flex;align-items:center;justify-content:center;gap:6px;margin-bottom:2rem;">
                <div id="dot1" style="width:28px;height:10px;border-radius:5px;background:#ccff00;box-shadow:0 0 10px rgba(204,255,0,0.5);transition:all .3s;"></div>
                <div id="dot2" style="width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,0.15);transition:all .3s;"></div>
            </div>

            <!-- STEP 1 -->
            <div id="step1">
                <div style="text-align:center;margin-bottom:2rem;">
                    <p style="color:#ccff00;font-size:.75rem;letter-spacing:.2rem;text-transform:uppercase;margin-bottom:.5rem;" data-key="test_step1">ÉTAPE 1 / 2</p>
                    <h2 style="font-family:'Urbanist',sans-serif;font-size:2.2rem;font-weight:900;text-transform:uppercase;"><span data-key="test_step1_title1">Choisissez votre </span><span style="color:#ccff00;" data-key="test_step1_title2">Formule</span></h2>
                    <p style="color:rgba(255,255,255,.5);margin-top:.5rem;"><span data-key="test_step1_subtitle">Sélectionnez le plan à tester pour</span> <strong style="color:#ccff00;" data-key="test_step1_subtitle2">seulement 2€</strong></p>
                </div>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1rem;">
                    <!-- BASIC -->
                    <div class="tplan-card plan-card-shake" data-plan="BASIC" onclick="selectPlan(this)" style="background:rgba(255,255,255,.04);border:1.5px solid rgba(255,255,255,.12);border-radius:18px;padding:1.5rem 1rem;cursor:pointer;text-align:center;transition:all .3s;position:relative;">
                        <div class="tchk" style="position:absolute;top:10px;right:10px;width:24px;height:24px;background:#ccff00;border-radius:50%;display:none;align-items:center;justify-content:center;color:#000;font-weight:900;font-size:13px;">✓</div>
                        <div style="font-size:2rem;margin-bottom:.75rem;">🌟</div>
                        <h3 style="font-weight:900;font-size:1.1rem;color:#ccff00;text-transform:uppercase;">BASIC</h3>
                        <p style="color:rgba(255,255,255,.4);font-size:.8rem;margin-top:.3rem;">15€ / 12 Mois</p>
                        <ul style="text-align:left;font-size:.75rem;color:rgba(255,255,255,.65);margin-top:.75rem;list-style:none;padding:0;line-height:1.8;">
                            <li>✓ Test mac ok</li><li>✓ Test m3u ok</li>
                        </ul>
                    </div>
                    <!-- STANDARD -->
                    <div class="tplan-card plan-card-shake" data-plan="STANDARD" onclick="selectPlan(this)" style="background:rgba(255,255,255,.04);border:1.5px solid rgba(255,255,255,.12);border-radius:18px;padding:1.5rem 1rem;cursor:pointer;text-align:center;transition:all .3s;position:relative;">
                        <div class="tchk" style="position:absolute;top:10px;right:10px;width:24px;height:24px;background:#ccff00;border-radius:50%;display:none;align-items:center;justify-content:center;color:#000;font-weight:900;font-size:13px;">✓</div>
                        <span style="position:absolute;top:-1px;left:50%;transform:translateX(-50%);background:#ccff00;color:#000;font-size:9px;font-weight:900;padding:2px 8px;border-radius:0 0 6px 6px;">🔥 POPULAIRE</span>
                        <div style="font-size:2rem;margin-top:.6rem;margin-bottom:.75rem;">⭐</div>
                        <h3 style="font-weight:900;font-size:1.1rem;color:#ccff00;text-transform:uppercase;">STANDARD</h3>
                        <p style="color:rgba(255,255,255,.4);font-size:.8rem;margin-top:.3rem;">25€ / 12 Mois</p>
                        <ul style="text-align:left;font-size:.75rem;color:rgba(255,255,255,.65);margin-top:.75rem;list-style:none;padding:0;line-height:1.8;">
                            <li>✓ Test mac ok</li><li>✓ Test m3u ok</li>
                        </ul>
                    </div>
                    <!-- PREMIUM -->
                    <div class="tplan-card plan-card-shake" data-plan="PREMIUM" onclick="selectPlan(this)" style="background:rgba(255,255,255,.04);border:1.5px solid rgba(255,255,255,.12);border-radius:18px;padding:1.5rem 1rem;cursor:pointer;text-align:center;transition:all .3s;position:relative;">
                        <div class="tchk" style="position:absolute;top:10px;right:10px;width:24px;height:24px;background:#ccff00;border-radius:50%;display:none;align-items:center;justify-content:center;color:#000;font-weight:900;font-size:13px;">✓</div>
                        <div style="font-size:2rem;margin-bottom:.75rem;">💎</div>
                        <h3 style="font-weight:900;font-size:1.1rem;color:#ccff00;text-transform:uppercase;">PREMIUM</h3>
                        <p style="color:rgba(255,255,255,.4);font-size:.8rem;margin-top:.3rem;">40€ / 12 Mois</p>
                        <ul style="text-align:left;font-size:.75rem;color:rgba(255,255,255,.65);margin-top:.75rem;list-style:none;padding:0;line-height:1.8;">
                            <li>✓ Test mac ok</li><li>✓ Test m3u ok</li>
                        </ul>
                    </div>

                </div>

                <div style="text-align:center;margin-top:2rem;">
                    <button id="nextBtn" onclick="goStep2()" disabled style="background:#ccff00;color:#000;font-weight:900;border:none;border-radius:50px;padding:.9rem 2.5rem;font-size:.95rem;letter-spacing:1px;text-transform:uppercase;cursor:pointer;transition:all .3s;opacity:.4;font-family:'Montserrat',sans-serif;" data-key="test_step1_btn">Continuer →</button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div id="step2" style="display:none;">
                <div style="text-align:center;margin-bottom:2rem;">
                    <p style="color:#ccff00;font-size:.75rem;letter-spacing:.2rem;text-transform:uppercase;margin-bottom:.5rem;" data-key="test_step2">ÉTAPE 2 / 2</p>
                    <h2 style="font-family:'Urbanist',sans-serif;font-size:2.2rem;font-weight:900;text-transform:uppercase;"><span data-key="test_step2_title1">Finalisez votre </span><span style="color:#ccff00;" data-key="test_step2_title2">commande</span></h2>
                    <p style="color:rgba(255,255,255,.5);margin-top:.4rem;"><span data-key="test_step2_subtitle">Plan : </span><strong id="planLabel" style="color:#ccff00;"></strong></p>
                </div>

                <div style="max-width:480px;margin:0 auto;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);border-radius:22px;padding:2rem 1.5rem;">
                    <label style="display:block;font-size:.8rem;font-weight:700;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.1rem;margin-bottom:.5rem;" data-key="test_name_label">👤 Votre Nom</label>
                    <input id="nameInput" type="text" placeholder="Entrez votre nom complet..." data-key-placeholder="test_name_placeholder" style="width:100%;background:rgba(0,0,0,.5);border:1.5px solid rgba(255,255,255,.2);border-radius:12px;padding:.9rem 1.1rem;color:white;font-family:'Inter',sans-serif;font-size:.95rem;outline:none;transition:all .3s;margin-bottom:1.25rem;" onfocus="this.style.borderColor='#ccff00'" onblur="this.style.borderColor='rgba(255,255,255,.2)'">

                    <label style="display:block;font-size:.8rem;font-weight:700;color:rgba(255,255,255,.6);text-transform:uppercase;letter-spacing:.1rem;margin-bottom:.75rem;" data-key="test_format_label">📡 Format souhaité</label>
                    <div style="display:flex;gap:.75rem;margin-bottom:1.5rem;">
                        <button id="btnM3U" onclick="selectFormat('M3U')" style="flex:1;padding:.9rem;border:2px solid rgba(255,255,255,.15);border-radius:12px;background:rgba(255,255,255,.04);color:white;cursor:pointer;text-align:center;font-weight:700;font-size:.95rem;font-family:'Montserrat',sans-serif;transition:all .3s;">📋<br>M3U<br><span style="font-size:.65rem;opacity:.6;font-weight:400;" data-key="test_m3u_desc">Lien de lecture</span></button>
                        <button id="btnMAC" onclick="selectFormat('MAC')" style="flex:1;padding:.9rem;border:2px solid rgba(255,255,255,.15);border-radius:12px;background:rgba(255,255,255,.04);color:white;cursor:pointer;text-align:center;font-weight:700;font-size:.95rem;font-family:'Montserrat',sans-serif;transition:all .3s;">📺<br>MAC<br><span style="font-size:.65rem;opacity:.6;font-weight:400;" data-key="test_mac_desc">Adresse MAC TV</span></button>
                    </div>

                    <p id="errMsg" style="color:#ff6b6b;font-size:.82rem;margin-bottom:.75rem;display:none;" data-key="test_err_msg">⚠️ Veuillez remplir tous les champs.</p>

                    <button onclick="sendWhatsApp()" style="width:100%;background:#ccff00;color:#000;font-weight:900;border:none;border-radius:50px;padding:.95rem;font-size:.95rem;letter-spacing:1px;text-transform:uppercase;cursor:pointer;font-family:'Montserrat',sans-serif;transition:all .3s;" onmouseover="this.style.boxShadow='0 0 25px rgba(204,255,0,.45)'" onmouseout="this.style.boxShadow='none'" data-key="test_wa_btn">💬 Commander via WhatsApp</button>
                    <button onclick="goStep1()" style="width:100%;background:transparent;border:1px solid rgba(255,255,255,.2);color:rgba(255,255,255,.5);border-radius:50px;padding:.75rem;margin-top:.6rem;cursor:pointer;font-family:'Montserrat',sans-serif;font-size:.85rem;transition:all .3s;" data-key="test_back_btn">← Retour</button>
                </div>
            </div>

            <script>
                let selectedPlan = null, selectedFormat = null;

                function selectPlan(card) {
                    document.querySelectorAll('.tplan-card').forEach(c => {
                        c.style.borderColor = c.dataset.plan === 'PREMIUM+VIP' ? '#ffd700' : 'rgba(255,255,255,.12)';
                        c.style.transform = '';
                        c.querySelector('.tchk').style.display = 'none';
                    });
                    card.style.borderColor = card.dataset.plan === 'PREMIUM+VIP' ? '#ffd700' : '#ccff00';
                    card.style.transform = 'translateY(-4px)';
                    card.querySelector('.tchk').style.display = 'flex';
                    selectedPlan = card.dataset.plan;
                    const btn = document.getElementById('nextBtn');
                    btn.disabled = false;
                    btn.style.opacity = '1';
                }

                function goStep2() {
                    if (!selectedPlan) return;
                    document.getElementById('step1').style.display = 'none';
                    document.getElementById('step2').style.display = 'block';
                    document.getElementById('planLabel').textContent = selectedPlan;
                    document.getElementById('btnM3U').style.borderColor = 'rgba(255,255,255,.15)';
                    document.getElementById('btnM3U').style.color = 'white';
                    document.getElementById('btnMAC').style.borderColor = 'rgba(255,255,255,.15)';
                    document.getElementById('btnMAC').style.color = 'white';
                    selectedFormat = null;
                    document.getElementById('dot1').style.width = '10px';
                    document.getElementById('dot1').style.background = 'rgba(204,255,0,.4)';
                    document.getElementById('dot2').style.width = '28px';
                    document.getElementById('dot2').style.background = '#ccff00';
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }

                function goStep1() {
                    document.getElementById('step2').style.display = 'none';
                    document.getElementById('step1').style.display = 'block';
                    document.getElementById('dot1').style.width = '28px';
                    document.getElementById('dot1').style.background = '#ccff00';
                    document.getElementById('dot2').style.width = '10px';
                    document.getElementById('dot2').style.background = 'rgba(255,255,255,.15)';
                    selectedFormat = null;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }

                function selectFormat(fmt) {
                    selectedFormat = fmt;
                    const m3u = document.getElementById('btnM3U'), mac = document.getElementById('btnMAC');
                    m3u.style.borderColor = fmt === 'M3U' ? '#ccff00' : 'rgba(255,255,255,.15)';
                    m3u.style.color = fmt === 'M3U' ? '#ccff00' : 'white';
                    mac.style.borderColor = fmt === 'MAC' ? '#ccff00' : 'rgba(255,255,255,.15)';
                    mac.style.color = fmt === 'MAC' ? '#ccff00' : 'white';
                }

                function sendWhatsApp() {
                    const name = document.getElementById('nameInput').value.trim();
                    const err = document.getElementById('errMsg');
                    if (!name || !selectedFormat) { err.style.display = 'block'; return; }
                    err.style.display = 'none';
                    const msg =
                        `🧪 *DEMANDE PLAN TEST (2€) - STREAMTV*\n\n` +
                        `👤 *Nom :* ${name}\n` +
                        `📦 *Plan souhaité :* ${selectedPlan}\n` +
                        `📡 *Format :* ${selectedFormat}\n\n` +
                        `📅 *Date :* ${new Date().toLocaleString('fr-FR')}\n\n` +
                        `_Message envoyé depuis le site STREAMTV_`;
                    window.open(`https://wa.me/212670965351?text=${encodeURIComponent(msg)}`, '_blank');
                }
            </script>
        <?php else: ?>
            <div class="glass p-12 rounded-[2rem] border-red-500/20 text-center" style="background:rgba(255,255,255,.05);border:1px solid rgba(255,0,0,.2);">
                <div class="text-6xl mb-6">⏳</div>
                <h2 class="text-2xl font-bold text-red-400 mb-4" style="color:#ff6b6b;font-family:'Urbanist',sans-serif;text-transform:uppercase;" data-key="test_unavailable">Tests Indisponibles</h2>
                <p class="text-gray-400 mb-8"><?php echo $trialMessage; ?></p>
                <div>
                    <a href="plans.php" style="background:#ccff00;color:#000;padding:.8rem 2rem;border-radius:50px;font-weight:800;text-transform:uppercase;text-decoration:none;" data-key="test_unavailable_btn">Voir les Abonnements</a>
                </div>
            </div>
        <?php endif; ?>

    </div></div></div>
</div>

<?php include 'footer.php'; ?>
