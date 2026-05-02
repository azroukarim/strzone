<?php
/**
 * STREAMTV - Dynamic Channels List
 */
$plan = isset($_GET['plan']) ? strtoupper($_GET['plan']) : 'STANDARD';
$pageTitle = "Liste des Bouquets - Plan " . $plan;
$activePage = 'channels';
$showPreloader = false;

include 'header.php';

// Map plan to text file
$planFiles = [
    'BASIC' => 'PLAN%20BASIC.TXT',
    'STANDARD' => 'PLAN%20STANDARD.TXT',
    'PREMIUM' => 'PLAN%20PREMIUM.TXT',
    'VIP' => 'PLAN%20VIP.TXT'
];

$fileToFetch = $planFiles[$plan] ?? 'PLAN%20STANDARD.TXT';
?>

<style>
    .channels-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 0.75rem; }
    .channel-item { background: rgba(255, 255, 255, 0.05); border-radius: 0.5rem; padding: 0.5rem 1rem; transition: all 0.2s ease; border-left: 3px solid #ccff00; font-size: 0.85rem; }
    .channel-item:hover { background: rgba(204, 255, 0, 0.1); transform: translateX(5px); }
    .category-title { background: linear-gradient(135deg, #ccff00, #a0cc00); -webkit-background-clip: text; background-clip: text; color: transparent; font-size: 1.2rem; font-weight: 800; margin-top: 1.5rem; margin-bottom: 0.75rem; border-bottom: 2px solid rgba(204, 255, 0, 0.3); display: inline-block; }
    .plan-tab { padding: 0.75rem 1.5rem; border-radius: 50px; background: rgba(255,255,255,0.05); color: #fff; font-weight: 700; transition: all 0.3s ease; border: 1px solid rgba(255,255,255,0.1); }
    .plan-tab.active { background: #ccff00; color: #000; border-color: #ccff00; }
    .loading-spinner { border: 3px solid rgba(204, 255, 0, 0.2); border-top: 3px solid #ccff00; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 2rem auto; }
    @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
</style>

<div class="page-content">
    <div class="bg-stadium py-20 text-center">
        <h1 class="text-4xl md:text-6xl font-black uppercase mb-8">Liste des <span class="text-[#ccff00]">Bouquets</span></h1>
        
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            <a href="?plan=basic" class="plan-tab <?php echo $plan == 'BASIC' ? 'active' : ''; ?>">BASIC</a>
            <a href="?plan=standard" class="plan-tab <?php echo $plan == 'STANDARD' ? 'active' : ''; ?>">STANDARD</a>
            <a href="?plan=premium" class="plan-tab <?php echo $plan == 'PREMIUM' ? 'active' : ''; ?>">PREMIUM</a>
            <a href="?plan=vip" class="plan-tab <?php echo $plan == 'VIP' ? 'active' : ''; ?>">VIP</a>
        </div>
        
        <p class="text-xl text-gray-300">Bouquets inclus dans le Plan <span class="text-[#ccff00] font-black"><?php echo $plan; ?></span></p>
    </div>

    <div class="bg-movie pb-20">
        <div class="max-w-[1400px] mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 py-6 border-b border-white/5 mb-6">
                <input type="text" id="searchInput" placeholder="🔍 Rechercher un bouquet..." class="bg-black/50 border border-[#ccff00]/30 rounded-full px-6 py-3 w-full max-w-md text-white outline-none focus:border-[#ccff00]">
                <div id="resultCount" class="bg-[#ccff00]/20 px-4 py-1 rounded-full text-xs font-bold text-[#ccff00]">Chargement...</div>
            </div>

            <div id="channelsContainer" class="min-h-[400px]">
                <div class="loading-spinner"></div>
            </div>
        </div>
    </div>
</div>

<script>
    const CHANNELS_URL = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/<?php echo $fileToFetch; ?>';
    let allChannels = [];

    async function loadChannels() {
        const container = document.getElementById('channelsContainer');
        const countSpan = document.getElementById('resultCount');
        try {
            const response = await fetch(CHANNELS_URL);
            const text = await response.text();
            const lines = text.split('\n').map(l => l.trim()).filter(l => l.length > 0);
            
            allChannels = lines.map(line => {
                let cat = '📺 BOUQUETS TV';
                if (line.includes('MOVIES')) cat = '🎬 MOVIES & VOD';
                else if (line.includes('SERIES')) cat = '🍿 SERIES';
                else if (line.includes('LIVE')) cat = '📡 LIVE SPORTS & TV';
                
                return { name: line.replace(/^(LIVE|MOVIES|SERIES) - /, ''), cat: cat };
            });
            
            displayChannels(allChannels);
            countSpan.textContent = `${allChannels.length} BOUQUETS`;
        } catch (e) {
            container.innerHTML = '<p class="text-center text-red-400">Erreur de chargement des données.</p>';
        }
    }

    function displayChannels(data) {
        const container = document.getElementById('channelsContainer');
        if(!data.length) { container.innerHTML = '<p class="text-center py-10">Aucun bouquet trouvé.</p>'; return; }
        
        const grouped = data.reduce((acc, ch) => {
            acc[ch.cat] = acc[ch.cat] || [];
            acc[ch.cat].push(ch);
            return acc;
        }, {});

        container.innerHTML = Object.entries(grouped).map(([cat, list]) => `
            <div class="mb-10">
                <h3 class="category-title">${cat}</h3>
                <div class="channels-grid">
                    ${list.map(ch => `<div class="channel-item">${ch.name}</div>`).join('')}
                </div>
            </div>
        `).join('');
    }

    document.getElementById('searchInput').addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        displayChannels(allChannels.filter(ch => ch.name.toLowerCase().includes(term)));
    });

    loadChannels();
</script>

<?php include 'footer.php'; ?>
