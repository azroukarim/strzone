<?php
/**
 * STREAMTV - Secure PHP Admin Panel
 * For InfinityFree Hosting
 */
session_start();

// --- CONFIGURATION ---
$ADMIN_USER = 'streamzone';
$ADMIN_PASS = 'atlas4040@';
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
    // Read current status before redirecting
    $logoutStatus = 'off';
    if (file_exists($CONFIG_FILE)) {
        $config = json_decode(file_get_contents($CONFIG_FILE), true);
        $logoutStatus = $config['status'] ?? 'off';
    }
    
    session_destroy();
    if ($logoutStatus === 'on') {
        header("Location: enpane.php");
    } else {
        header("Location: index.php");
    }
    exit;
}

// --- TOGGLE LOGIC ---
if (isset($_SESSION['authenticated'])) {
    $config = file_exists($CONFIG_FILE) ? json_decode(file_get_contents($CONFIG_FILE), true) : [
        'status' => 'off', 'show_countdown' => 'on', 'page_plans' => 'on', 
        'page_promos' => 'on', 'page_contact' => 'on', 'page_download' => 'on', 
        'page_test' => 'on', 'page_channels' => 'on'
    ];

    if (isset($_POST['toggle'])) {
        $config['status'] = ($_POST['current_status'] === 'on') ? 'off' : 'on';
        file_put_contents($CONFIG_FILE, json_encode($config));
    }
    
    if (isset($_POST['update_granular'])) {
        $pages = ['page_plans', 'page_promos', 'page_contact', 'page_download', 'page_test', 'page_channels', 'show_countdown'];
        foreach ($pages as $p) {
            $config[$p] = isset($_POST[$p]) ? 'on' : 'off';
        }
        file_put_contents($CONFIG_FILE, json_encode($config));
    }
}

// --- READ CURRENT STATUS ---
$status = 'off';
$granular = [];
if (file_exists($CONFIG_FILE)) {
    $config = json_decode(file_get_contents($CONFIG_FILE), true);
    $status = $config['status'] ?? 'off';
    $granular = $config;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STREAMTV | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@900&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #050505; color: white; min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .animate-heartbeat { animation: heartbeat 1.5s infinite; display: inline-block; }
        @keyframes heartbeat { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .switch-input:checked + .switch-label { background: #ccff00; }
        .switch-input:checked + .switch-label:after { left: calc(100% - 2px); transform: translateX(-100%); }
    </style>
</head>
<body class="py-12 px-4">

    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-[#ccff00]/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-[#ccff00]/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative z-10 w-full max-w-xl mx-auto">
        
        <?php if (!isset($_SESSION['authenticated'])): ?>
            <!-- Login Form -->
            <div class="glass p-8 rounded-3xl shadow-2xl text-center max-w-md mx-auto">
                <h1 class="text-3xl font-black mb-2 tracking-tighter animate-heartbeat font-urbanist uppercase">STREAM<span class="text-[#ccff00]">TV</span></h1>
                <p class="text-gray-500 text-sm mb-8 uppercase tracking-widest">Panel Sécurisé PHP</p>
                
                <?php if (isset($error)): ?>
                    <div class="bg-red-500/10 border border-red-500/50 text-red-500 p-3 rounded-xl mb-6 text-sm">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" class="space-y-4">
                    <input type="text" name="user" placeholder="Nom d'utilisateur" required 
                           class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all">
                    <input type="password" name="pass" placeholder="Mot de passe" required 
                           class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all">
                    <button type="submit" name="login" 
                            class="w-full bg-[#ccff00] text-black font-black py-4 rounded-xl hover:scale-[1.02] active:scale-[0.98] transition-all">
                        SE CONNECTER
                    </button>
                </form>
            </div>
        <?php else: ?>
            <!-- Control Panel -->
            <div class="glass p-8 rounded-3xl shadow-2xl">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-black tracking-tighter animate-heartbeat uppercase font-urbanist">STREAM<span class="text-[#ccff00]">TV</span></h1>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Infrastructure Admin</span>
                        <a href="?logout" class="text-[10px] text-red-500 hover:underline uppercase font-bold">Déconnexion</a>
                    </div>
                </div>

                <!-- Global Maintenance Toggle -->
                <div class="mb-10 bg-white/5 p-6 rounded-2xl border border-white/10">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-black uppercase tracking-tight">Mode Maintenance</h2>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border <?php echo ($status === 'on') ? 'border-orange-500/50 bg-orange-500/10' : 'border-green-500/50 bg-green-500/10'; ?>">
                            <span class="w-1.5 h-1.5 rounded-full <?php echo ($status === 'on') ? 'bg-orange-500 animate-pulse' : 'bg-green-500'; ?>"></span>
                            <span class="text-[9px] font-bold uppercase <?php echo ($status === 'on') ? 'text-orange-500' : 'text-green-500'; ?>">
                                <?php echo ($status === 'on') ? 'ACTIF' : 'INACTIF'; ?>
                            </span>
                        </div>
                    </div>
                    
                    <form method="POST">
                        <input type="hidden" name="current_status" value="<?php echo $status; ?>">
                        <button type="submit" name="toggle" 
                                class="w-full <?php echo ($status === 'on') ? 'bg-white text-black' : 'bg-[#ccff00] text-black'; ?> font-black py-4 rounded-xl shadow-xl hover:scale-[1.02] active:scale-[0.95] transition-all text-sm uppercase">
                            <?php echo ($status === 'on') ? 'Désactiver la Maintenance' : 'Activer la Maintenance'; ?>
                        </button>
                    </form>
                </div>

                <!-- Granular Controls -->
                <div class="space-y-6">
                    <h3 class="text-xs text-gray-500 font-black uppercase tracking-[0.2em] border-b border-white/5 pb-2">Visibilité des Pages</h3>
                    
                    <form method="POST" class="space-y-4">
                        <?php 
                        $pageLabels = [
                            'page_plans' => 'Page Nos Plans',
                            'page_download' => 'Page Téléchargements',
                            'page_promos' => 'Page Promotions',
                            'page_contact' => 'Page Contact',
                            'page_test' => 'Page Test Gratuit',
                            'page_channels' => 'Page Bouquets (Standard)',
                            'show_countdown' => 'Compteur FIFA 2026'
                        ];
                        foreach ($pageLabels as $key => $label): 
                            $isOn = ($granular[$key] ?? 'on') === 'on';
                        ?>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-white/[0.02] border border-white/5 hover:border-white/10 transition-colors">
                            <span class="text-sm font-medium text-gray-300"><?php echo $label; ?></span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="<?php echo $key; ?>" <?php echo $isOn ? 'checked' : ''; ?> class="sr-only peer">
                                <div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#ccff00]"></div>
                            </label>
                        </div>
                        <?php endforeach; ?>

                        <button type="submit" name="update_granular" 
                                class="w-full border border-[#ccff00]/30 text-[#ccff00] font-bold py-4 rounded-xl hover:bg-[#ccff00]/10 transition-all text-xs uppercase tracking-widest mt-6">
                            Mettre à jour la configuration
                        </button>
                    </form>
                </div>

                <p class="mt-10 text-[9px] text-center text-gray-600 uppercase tracking-widest">Propulsé par STREAMTV Core Systems</p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>
