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
if (isset($_SESSION['authenticated']) && isset($_POST['toggle'])) {
    $currentStatus = $_POST['current_status'];
    $newStatus = ($currentStatus === 'on') ? 'off' : 'on';
    file_put_contents($CONFIG_FILE, json_encode(['status' => $newStatus]));
}

// --- READ CURRENT STATUS ---
$status = 'off';
if (file_exists($CONFIG_FILE)) {
    $config = json_decode(file_get_contents($CONFIG_FILE), true);
    $status = $config['status'] ?? 'off';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STREAMTV | PHP Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@900&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background: #050505; color: white; overflow: hidden; }
        .neon-glow { text-shadow: 0 0 20px rgba(204, 255, 0, 0.6); }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            15% { transform: scale(1.1); }
            30% { transform: scale(1); }
            45% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .animate-heartbeat { animation: heartbeat 1.5s infinite; display: inline-block; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-[#ccff00]/10 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-[#ccff00]/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative z-10 w-full max-w-md">
        
        <?php if (!isset($_SESSION['authenticated'])): ?>
            <!-- Login Form -->
            <div class="glass p-8 rounded-3xl shadow-2xl text-center">
                <h1 class="text-3xl font-black mb-2 tracking-tighter animate-heartbeat">STREAM<span class="text-[#ccff00]">TV</span></h1>
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
            <div class="glass p-8 rounded-3xl shadow-2xl text-center">
                <h1 class="text-2xl font-black mb-6 tracking-tighter animate-heartbeat">STREAM<span class="text-[#ccff00]">TV</span></h1>
                <div class="flex justify-between items-center mb-8">
                    <span class="text-xs text-gray-500 font-bold uppercase tracking-widest">Admin Connecté</span>
                    <a href="?logout" class="text-xs text-red-500 hover:underline uppercase font-bold">Déconnexion</a>
                </div>

                <div class="mb-10">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border <?php echo ($status === 'on') ? 'border-orange-500/50 bg-orange-500/10' : 'border-green-500/50 bg-green-500/10'; ?> mb-4">
                        <span class="w-2 h-2 rounded-full <?php echo ($status === 'on') ? 'bg-orange-500 animate-pulse' : 'bg-green-500'; ?>"></span>
                        <span class="text-[10px] font-bold uppercase tracking-tighter <?php echo ($status === 'on') ? 'text-orange-500' : 'text-green-500'; ?>">
                            <?php echo ($status === 'on') ? 'Mode Maintenance ACTIVÉ' : 'Site en Ligne'; ?>
                        </span>
                    </div>
                    <h2 class="text-2xl font-black">Contrôle du Site</h2>
                </div>

                <form method="POST">
                    <input type="hidden" name="current_status" value="<?php echo $status; ?>">
                    <button type="submit" name="toggle" 
                            class="w-full <?php echo ($status === 'on') ? 'bg-white text-black' : 'bg-[#ccff00] text-black'; ?> font-black py-6 rounded-2xl shadow-xl hover:scale-[1.02] active:scale-[0.95] transition-all flex flex-col items-center justify-center gap-1">
                        <span class="text-lg"><?php echo ($status === 'on') ? 'DÉSACTIVER LA MAINTENANCE' : 'ACTIVER LA MAINTENANCE'; ?></span>
                        <span class="text-[10px] opacity-60 font-normal"><?php echo ($status === 'on') ? 'Remettre le site en ligne' : 'Afficher la page de maintenance aux visiteurs'; ?></span>
                    </button>
                </form>

                <p class="mt-8 text-[10px] text-gray-600 uppercase tracking-widest">Propulsé par PHP & InfinityFree</p>
            </div>
        <?php endif; ?>

    </div>

</body>
</html>
