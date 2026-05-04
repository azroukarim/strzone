<?php
/**
 * STREAMTV - Premium Admin Dashboard
 * Secure Control Center
 */
session_start();

// --- CONFIGURATION ---
$ADMIN_USER = 'streamtv';
$ADMIN_PASS = 'streamtv';
$CONFIG_FILE = 'maintenance_config.json';

// --- LOGIN LOGIC ---
if (isset($_POST['login'])) {
    if ($_POST['user'] === $ADMIN_USER && $_POST['pass'] === $ADMIN_PASS) {
        $_SESSION['authenticated'] = true;
    } else {
        $error = "Identifiants incorrects !";
    }
}

if (isset($_GET['logout'])) {
    $logoutStatus = 'off';
    if (file_exists($CONFIG_FILE)) {
        $config = json_decode(file_get_contents($CONFIG_FILE), true);
        $logoutStatus = $config['status'] ?? 'off';
    }
    session_destroy();
    header("Location: " . (($logoutStatus === 'on') ? "enpane.php" : "index.php"));
    exit;
}

// --- CONFIGURATION LOADING ---
$config = [
    'status' => 'off', 'show_countdown' => 'on', 'page_plans' => 'on', 
    'page_promos' => 'on', 'page_contact' => 'on', 'page_download' => 'on', 
    'page_test' => 'on', 'page_channels' => 'on'
];

if (file_exists($CONFIG_FILE)) {
    $decoded = json_decode(file_get_contents($CONFIG_FILE), true);
    if ($decoded) $config = array_merge($config, $decoded);
}

// --- TOGGLE LOGIC ---
if (isset($_SESSION['authenticated'])) {
    if (isset($_POST['toggle_maintenance'])) {
        $config['status'] = ($config['status'] === 'on') ? 'off' : 'on';
        file_put_contents($CONFIG_FILE, json_encode($config));
        $success_msg = "Statut de maintenance mis à jour !";
    }
    
    if (isset($_POST['update_settings'])) {
        $keys = [
            'page_plans', 'page_promos', 'page_contact', 'page_download', 'page_test', 'page_channels', 
            'show_countdown', 'show_productions', 'show_sports', 'show_logos', 'show_platforms',
            'show_plan_test', 'show_plan_basic', 'show_plan_standard', 'show_plan_premium', 'show_plan_vip'
        ];
        foreach ($keys as $k) {
            $config[$k] = isset($_POST[$k]) ? 'on' : 'off';
        }
        file_put_contents($CONFIG_FILE, json_encode($config));
        $success_msg = "Paramètres enregistrés avec succès !";
    }

    if (isset($_POST['update_countdown_extended'])) {
        $config['show_countdown'] = isset($_POST['show_countdown']) ? 'on' : 'off';
        $config['countdown_target'] = $_POST['countdown_target'] ?? '2026-06-11T00:00:00';
        $config['countdown_slogan_fr'] = $_POST['countdown_slogan_fr'] ?? '';
        $config['countdown_slogan_en'] = $_POST['countdown_slogan_en'] ?? '';
        file_put_contents($CONFIG_FILE, json_encode($config));
        $success_msg = "Compte à rebours mis à jour !";
    }
}

$status = $config['status'] ?? 'off';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STREAMTV | Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #050505; color: white; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .neon-glow { text-shadow: 0 0 15px rgba(204, 255, 0, 0.5); }
        .neon-border { border-color: rgba(204, 255, 0, 0.3); }
        .font-urbanist { font-family: 'Urbanist', sans-serif; }
        @keyframes pulse-neon { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
        .animate-pulse-neon { animation: pulse-neon 2s infinite; }
        .dashboard-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .dashboard-card:hover { transform: translateY(-5px); background: rgba(255, 255, 255, 0.04); border-color: rgba(204, 255, 0, 0.2); }
        .lang-select-btn.active { background: #ccff00; color: black; }
    </style>
</head>
<body class="min-h-screen">

    <!-- Ambient Background -->
    <div class="fixed inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#ccff00]/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#ccff00]/3 blur-[150px] rounded-full"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 py-12 max-w-4xl">
        
        <?php if (!isset($_SESSION['authenticated'])): ?>
            <!-- Premium Login -->
            <div class="max-w-md mx-auto mt-20">
                <div class="glass p-10 rounded-[2.5rem] shadow-2xl border border-white/10">
                    <div class="text-center mb-10">
                        <h1 class="text-4xl font-black tracking-tighter uppercase font-urbanist mb-2">STREAM<span class="text-[#ccff00]">TV</span></h1>
                        <p class="text-[10px] text-gray-500 font-bold uppercase tracking-[0.3em]">Control Center Login</p>
                    </div>

                    <?php if (isset($error)): ?>
                        <div class="bg-red-500/10 border border-red-500/30 text-red-500 p-4 rounded-2xl mb-8 text-xs font-bold flex items-center gap-3">
                            <i data-lucide="alert-circle" class="w-4 h-4"></i>
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" class="space-y-5">
                        <div class="relative">
                            <i data-lucide="user" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500"></i>
                            <input type="text" name="user" placeholder="Username" required 
                                   class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 pl-12 outline-none focus:border-[#ccff00] transition-all text-sm">
                        </div>
                        <div class="relative">
                            <i data-lucide="lock" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500"></i>
                            <input type="password" name="pass" placeholder="Password" required 
                                   class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 pl-12 outline-none focus:border-[#ccff00] transition-all text-sm">
                        </div>
                        <button type="submit" name="login" 
                                class="w-full bg-[#ccff00] text-black font-black py-4 rounded-2xl hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-3 shadow-xl shadow-[#ccff00]/10">
                            AUTHENTICATE <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <!-- Dashboard UI -->
            <header class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
                <div>
                    <h1 class="text-3xl font-black tracking-tighter uppercase font-urbanist" data-key="admin_dashboard">DASH<span class="text-[#ccff00]">BOARD</span></h1>
                    <p class="text-xs text-gray-500 font-bold uppercase tracking-[0.2em] mt-1" data-key="admin_console">Management Console v2.0</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-2 bg-white/5 p-1 rounded-full border border-white/10">
                        <button class="lang-select-btn px-3 py-1 rounded-full text-[10px] font-bold transition-all hover:bg-white/10" data-lang="fr">FR</button>
                        <button class="lang-select-btn px-3 py-1 rounded-full text-[10px] font-bold transition-all hover:bg-white/10" data-lang="en">EN</button>
                    </div>
                    <div class="glass px-4 py-2 rounded-full flex items-center gap-2 text-xs font-bold border-white/10">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        <span data-key="admin_live_systems">LIVE SYSTEMS</span>
                    </div>
                    <a href="?logout" class="bg-red-500/10 text-red-500 px-4 py-2 rounded-full text-xs font-bold hover:bg-red-500/20 transition-all flex items-center gap-2 border border-red-500/20">
                        <span data-key="admin_logout">LOGOUT</span> <i data-lucide="log-out" class="w-3 h-3"></i>
                    </a>
                </div>
            </header>

            <?php if (isset($success_msg)): ?>
                <div id="toast" class="fixed top-10 right-10 z-50 bg-[#ccff00] text-black p-4 rounded-2xl font-bold shadow-2xl flex items-center gap-3 animate-bounce">
                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                    <?php echo $success_msg; ?>
                </div>
                <script>setTimeout(() => { document.getElementById('toast').style.display = 'none'; }, 3000);</script>
            <?php endif; ?>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Controls -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Maintenance Card -->
                    <div class="glass p-8 rounded-[2.5rem] relative overflow-hidden border-white/10">
                        <div class="absolute top-0 right-0 p-8 opacity-10">
                            <i data-lucide="settings" class="w-24 h-24"></i>
                        </div>
                        
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00]">
                                <i data-lucide="power" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-black uppercase tracking-tight" data-key="admin_security">Main Security</h2>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Global Traffic Control</p>
                            </div>
                        </div>

                        <div class="bg-white/5 border border-white/5 rounded-3xl p-6 flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="text-center md:text-left">
                                <span class="text-[10px] text-gray-500 font-black uppercase tracking-[0.2em] block mb-1">Current State</span>
                                <span class="text-2xl font-black uppercase <?php echo ($status === 'on') ? 'text-orange-500' : 'text-[#ccff00]'; ?>">
                                    <?php echo ($status === 'on') ? 'Under Maintenance' : 'Operational'; ?>
                                </span>
                            </div>
                            <form method="POST">
                                <button type="submit" name="toggle_maintenance" 
                                        class="px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all <?php echo ($status === 'on') ? 'bg-white text-black hover:scale-105' : 'bg-orange-500 text-white hover:bg-orange-600 shadow-lg shadow-orange-500/20'; ?>">
                                    <?php echo ($status === 'on') ? 'Restore Site Access' : 'Force Maintenance Mode'; ?>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Granular Controls -->
                    <div class="glass p-8 rounded-[2.5rem] border-white/10">
                        <div class="flex items-center gap-4 mb-10">
                            <div class="w-12 h-12 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00]">
                                <i data-lucide="layers" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-black uppercase tracking-tight" data-key="admin_visibility">Page Visibility</h2>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Toggle Individual Sections</p>
                            </div>
                        </div>

                        <form method="POST">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php 
                                $pageItems = [
                                    'page_plans' => ['label' => 'Plans Page', 'icon' => 'credit-card'],
                                    'page_download' => ['label' => 'Downloads', 'icon' => 'download'],
                                    'page_promos' => ['label' => 'Promotions', 'icon' => 'tag'],
                                    'page_contact' => ['label' => 'Contact Us', 'icon' => 'mail'],
                                    'page_test' => ['label' => 'Free Test', 'icon' => 'zap'],
                                    'page_channels' => ['label' => 'Channels List', 'icon' => 'list'],
                                    'show_productions' => ['label' => 'Productions Strip', 'icon' => 'clapperboard'],
                                    'show_sports' => ['label' => 'Sports Strip', 'icon' => 'trophy'],
                                    'show_logos' => ['label' => 'Logos Strip', 'icon' => 'tv'],
                                    'show_platforms' => ['label' => 'Platforms Strip', 'icon' => 'monitor']
                                ];
                                foreach ($pageItems as $key => $data): 
                                    $isOn = ($config[$key] ?? 'on') === 'on';
                                ?>
                                <div class="dashboard-card glass p-4 rounded-2xl border-white/5 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <i data-lucide="<?php echo $data['icon']; ?>" class="w-4 h-4 text-gray-500"></i>
                                        <span class="text-xs font-bold text-gray-300 uppercase tracking-tight"><?php echo $data['label']; ?></span>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="<?php echo $key; ?>" <?php echo $isOn ? 'checked' : ''; ?> class="sr-only peer">
                                        <div class="w-9 h-5 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-[#ccff00]"></div>
                                    </label>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-10 p-6 bg-[#ccff00]/5 border border-[#ccff00]/10 rounded-3xl">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-[#ccff00]/20 rounded-xl flex items-center justify-center text-[#ccff00]">
                                            <i data-lucide="timer" class="w-5 h-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-black uppercase tracking-tight text-[#ccff00]" data-key="admin_timer">Countdown Timer</h3>
                                            <p class="text-[9px] text-gray-500 font-bold uppercase tracking-widest">Global Visibility Control</p>
                                        </div>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer scale-110">
                                        <input type="checkbox" name="show_countdown" <?php echo (($config['show_countdown'] ?? 'on') === 'on') ? 'checked' : ''; ?> class="sr-only peer">
                                        <div class="w-12 h-6 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#ccff00]"></div>
                                    </label>
                                </div>
                            </div>

                            <!-- Preserve plan settings when saving from this form -->
                            <?php
                            $plan_keys = ['show_plan_test', 'show_plan_basic', 'show_plan_standard', 'show_plan_premium', 'show_plan_vip'];
                            foreach ($plan_keys as $pk):
                                if (($config[$pk] ?? 'on') === 'on'): ?>
                                <input type="hidden" name="<?php echo $pk; ?>" value="on">
                            <?php endif; endforeach; ?>

                            <button type="submit" name="update_settings" 
                                    class="w-full mt-8 bg-white text-black font-black py-4 rounded-2xl hover:bg-[#ccff00] transition-all text-xs uppercase tracking-[0.2em] shadow-xl">
                                SAVE CONFIGURATION
                            </button>
                        </form>
                    </div>

                    <!-- Subscriptions Visibility -->
                    <div class="glass p-8 rounded-[2.5rem] border-white/10">
                        <div class="flex items-center gap-4 mb-10">
                            <div class="w-12 h-12 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00]">
                                <i data-lucide="credit-card" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-black uppercase tracking-tight">Plans Visibility</h2>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Toggle Individual Plans</p>
                            </div>
                        </div>

                        <form method="POST">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <?php 
                                $subscriptionPlans = [
                                    'show_plan_test' => ['label' => 'Plan TEST', 'icon' => '🧪'],
                                    'show_plan_basic' => ['label' => 'Plan BASIC', 'icon' => '🌟'],
                                    'show_plan_standard' => ['label' => 'Plan STANDARD', 'icon' => '⭐'],
                                    'show_plan_premium' => ['label' => 'Plan PREMIUM', 'icon' => '💎'],
                                    'show_plan_vip' => ['label' => 'Plan PREMIUM+VIP', 'icon' => '👑']
                                ];
                                foreach ($subscriptionPlans as $key => $data): 
                                    $isOn = ($config[$key] ?? 'on') === 'on';
                                ?>
                                <div class="dashboard-card glass p-4 rounded-2xl border-white/5 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <span class="text-lg"><?php echo $data['icon']; ?></span>
                                        <span class="text-xs font-bold text-gray-300 uppercase tracking-tight"><?php echo $data['label']; ?></span>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="<?php echo $key; ?>" <?php echo $isOn ? 'checked' : ''; ?> class="sr-only peer">
                                        <div class="w-9 h-5 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-[#ccff00]"></div>
                                    </label>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Preserve all other settings when saving from this form -->
                            <?php
                            $other_keys = ['page_plans', 'page_promos', 'page_contact', 'page_download', 'page_test', 'page_channels', 'show_countdown', 'show_productions', 'show_sports', 'show_logos', 'show_platforms'];
                            foreach ($other_keys as $ok):
                                if (($config[$ok] ?? 'on') === 'on'): ?>
                                <input type="hidden" name="<?php echo $ok; ?>" value="on">
                            <?php endif; endforeach; ?>

                            <button type="submit" name="update_settings" 
                                    class="w-full mt-8 bg-white text-black font-black py-4 rounded-2xl hover:bg-[#ccff00] transition-all text-xs uppercase tracking-[0.2em] shadow-xl">
                                SAVE PLAN VISIBILITY
                            </button>
                        </form>
                    </div>

                    <!-- World Cup Countdown Control -->
                    <div class="glass p-8 rounded-[2.5rem] border-white/10 bg-gradient-to-br from-[#ccff00]/5 to-transparent">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00]">
                                <i data-lucide="trophy" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-black uppercase tracking-tight" data-key="admin_worldcup">World Cup 2026</h2>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Countdown Customization</p>
                            </div>
                        </div>

                        <form method="POST" class="space-y-6">
                            <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl border border-white/5">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="eye" class="w-4 h-4 text-[#ccff00]"></i>
                                    <span class="text-xs font-bold uppercase">Afficher le compte à rebours</span>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="show_countdown" <?php echo (($config['show_countdown'] ?? 'on') === 'on') ? 'checked' : ''; ?> class="sr-only peer">
                                    <div class="w-11 h-6 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#ccff00]"></div>
                                </label>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 font-black uppercase tracking-widest ml-1">Date Cible (Format: YYYY-MM-DDTHH:MM:SS)</label>
                                <input type="text" name="countdown_target" value="<?php echo htmlspecialchars($config['countdown_target'] ?? '2026-06-11T00:00:00'); ?>" 
                                       class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 outline-none focus:border-[#ccff00] transition-all text-sm font-mono">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 font-black uppercase tracking-widest ml-1">Slogan (Français)</label>
                                <textarea name="countdown_slogan_fr" rows="2" 
                                          class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 outline-none focus:border-[#ccff00] transition-all text-sm leading-relaxed"><?php echo htmlspecialchars($config['countdown_slogan_fr'] ?? ''); ?></textarea>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] text-gray-500 font-black uppercase tracking-widest ml-1">Slogan (English)</label>
                                <textarea name="countdown_slogan_en" rows="2" 
                                          class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 outline-none focus:border-[#ccff00] transition-all text-sm leading-relaxed"><?php echo htmlspecialchars($config['countdown_slogan_en'] ?? ''); ?></textarea>
                            </div>

                            <button type="submit" name="update_countdown_extended" 
                                    class="w-full bg-[#ccff00] text-black font-black py-4 rounded-2xl hover:scale-[1.02] active:scale-[0.98] transition-all text-xs uppercase tracking-[0.2em] shadow-xl shadow-[#ccff00]/10">
                                METTRE À JOUR LE COMPTE À REBOURS
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Sidebar / Info -->
                <div class="space-y-8">
                    <div class="glass p-8 rounded-[2.5rem] border-white/10">
                        <h3 class="text-xs text-gray-500 font-black uppercase tracking-[0.2em] mb-6">System Health</h3>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center">
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Server Status</span>
                                <span class="text-[10px] font-black text-[#ccff00] uppercase">Stable</span>
                            </div>
                            <div class="w-full bg-white/5 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#ccff00] w-[95%] h-full"></div>
                            </div>
                            <div class="flex justify-between items-center mt-2 text-[9px] text-gray-600 font-bold uppercase">
                                <span>Memory: 12MB</span>
                                <span>PHP: 8.2</span>
                            </div>
                        </div>
                    </div>

                    <div class="glass p-8 rounded-[2.5rem] border-white/10 bg-gradient-to-br from-[#ccff00]/5 to-transparent">
                        <i data-lucide="shield-check" class="w-10 h-10 text-[#ccff00] mb-4"></i>
                        <h3 class="text-sm font-black uppercase tracking-tight mb-2">Security Notice</h3>
                        <p class="text-[10px] text-gray-400 leading-relaxed uppercase tracking-wider">All changes are applied globally and logged. Access is restricted to authorized systems only.</p>
                    </div>
                </div>
            </div>
            
            <footer class="mt-20 text-center opacity-30">
                <p class="text-[9px] font-black uppercase tracking-[0.4em]">STREAMTV Core Systems &copy; 2025</p>
            </footer>
        <?php endif; ?>
    </div>

    <script src="js/main.js?v=<?php echo time(); ?>"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
