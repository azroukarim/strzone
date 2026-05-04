<?php
$pageTitle = "Bouquets";
$activePage = 'channels';
$showPreloader = false;
ob_start();
?>
<script>
        const CHANNELS_URL = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/PLAN%20STANDARD.TXT';
        
        let allChannels = [];
        let categories = {};

        async function loadChannels() {
            const container = document.getElementById('channelsContainer');
            const resultCountSpan = document.getElementById('resultCount');
            
            try {
                const response = await fetch(CHANNELS_URL);
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                
                const text = await response.text();
                
                const lines = text.split('\n').map(line => line.trim()).filter(line => line.length > 0);
                
                categories = {};
                allChannels = [];
                
                for (const line of lines) {
                    let category = 'AUTRES BOUQUETS';
                    if (line.startsWith('LIVE -')) category = '📡 BOUQUETS LIVE TV';
                    else if (line.startsWith('MOVIES -')) category = '🎬 BOUQUETS MOVIES';
                    else if (line.startsWith('SERIES -')) category = '📺 BOUQUETS SERIES';
                    
                    if (!categories[category]) categories[category] = [];
                    
                    let displayName = line;
                    if (line.startsWith('LIVE -')) displayName = line.replace('LIVE -', '').trim();
                    else if (line.startsWith('MOVIES -')) displayName = line.replace('MOVIES -', '').trim();
                    else if (line.startsWith('SERIES -')) displayName = line.replace('SERIES -', '').trim();
                    
                    categories[category].push({
                        original: line,
                        display: displayName
                    });
                    allChannels.push({
                        name: displayName,
                        original: line,
                        category: category
                    });
                }
                
                displayChannels(allChannels);
                resultCountSpan.textContent = `📦 ${allChannels.length} bouquets disponibles`;
                
            } catch (error) {
                console.error('Erreur de chargement:', error);
                container.innerHTML = `
                    <div class="text-center py-12 text-red-400">
                        ⚠️ Impossible de charger la liste des bouquets.<br>
                        <span class="text-sm text-gray-400">Veuillez réessayer plus tard.</span>
                    </div>
                `;
                resultCountSpan.textContent = '❌ Erreur de chargement';
            }
        }

        function displayChannels(channels) {
            const container = document.getElementById('channelsContainer');
            
            if (!channels || channels.length === 0) {
                container.innerHTML = '<div class="text-center py-12 text-gray-400">🔍 Aucun bouquet trouvé</div>';
                return;
            }
            
            const grouped = {};
            for (const channel of channels) {
                if (!grouped[channel.category]) grouped[channel.category] = [];
                grouped[channel.category].push(channel);
            }
            
            let html = '';
            for (const [category, channelsList] of Object.entries(grouped)) {
                html += `
                    <div class="mt-6">
                        <h3 class="category-title">${category} (${channelsList.length})</h3>
                        <div class="channels-grid">
                            ${channelsList.map(ch => `
                                <div class="channel-item">
                                    <span class="text-gray-200">${escapeHtml(ch.name)}</span>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
            }
            
            container.innerHTML = html;
        }

        function searchChannels(searchTerm) {
            const term = searchTerm.toLowerCase().trim();
            if (!term) {
                displayChannels(allChannels);
                document.getElementById('resultCount').innerHTML = `📦 ${allChannels.length} bouquets disponibles`;
                return;
            }
            
            const filtered = allChannels.filter(ch => 
                ch.name.toLowerCase().includes(term) || 
                ch.original.toLowerCase().includes(term)
            );
            
            displayChannels(filtered);
            document.getElementById('resultCount').innerHTML = `🔍 ${filtered.length} bouquet(s) trouvé(s) for "${escapeHtml(term)}"`;
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        document.addEventListener('DOMContentLoaded', () => {
            loadChannels();
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', (e) => searchChannels(e.target.value));
            }
        });
    </script>
<?php
$extraFooter = ob_get_clean();

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
    .channels-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 0.75rem; }
    .channel-item { background: rgba(255, 255, 255, 0.03); border-radius: 0.75rem; padding: 0.6rem 1.2rem; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); border-left: 4px solid #ccff00; font-size: 0.95rem; font-weight: 500; color: #eee; backdrop-filter: blur(5px); }
    .channel-item:hover { background: rgba(204, 255, 0, 0.1); transform: translateX(8px); border-left-width: 8px; color: #fff; }
    .category-title { background: linear-gradient(90deg, #ccff00, #fff); -webkit-background-clip: text; background-clip: text; color: transparent; font-size: 1.5rem; font-weight: 900; margin-top: 2.5rem; margin-bottom: 1.2rem; padding-bottom: 0.6rem; border-bottom: 2px solid rgba(204, 255, 0, 0.2); display: block; text-transform: uppercase; letter-spacing: 1px; }
    .loading-spinner { border: 3px solid rgba(204, 255, 0, 0.2); border-top: 3px solid #ccff00; border-radius: 50%; width: 45px; height: 45px; animation: spin 1s linear infinite; margin: 3rem auto; }
    @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    .search-box { background: rgba(255,255,255,0.03); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 50px; padding: 0.85rem 1.75rem; width: 100%; max-width: 450px; color: white; outline: none; transition: all 0.3s ease; font-weight: 500; }
    .search-box:focus { border-color: #ccff00; box-shadow: 0 0 20px rgba(204, 255, 0, 0.2); background: rgba(255,255,255,0.05); }
    .result-count { background: rgba(204, 255, 0, 0.15); color: #ccff00; padding: 0.4rem 1.2rem; border-radius: 50px; font-size: 0.85rem; font-weight: 700; border: 1px solid rgba(204, 255, 0, 0.2); }
</style>

<div class="page-content bg-stadium">
    <div class="section-content">
        <div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="pt-20 pb-8 text-center">
                <h1 class="text-4xl md:text-7xl font-black uppercase mb-4 animate-heartbeat">
                    <span>Plan</span> 
                    <span class="text-[#ccff00]">STANDARD</span>
                </h1>
                <p class="text-gray-300 text-lg">📦 Découvrez la liste complète des bouquets inclus dans votre abonnement</p>
                <div class="glow-divider mt-8"></div>
            </section>
            
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 my-6">
                <div class="relative w-full md:w-auto">
                    <input type="text" id="searchInput" placeholder="🔍 Rechercher un bouquet..." class="search-box">
                </div>
                <div id="resultCount" class="result-count">Chargement...</div>
            </div>

            <div id="channelsContainer" class="min-h-[400px]">
                <div class="loading-spinner"></div>
                <p class="text-center text-gray-400">Chargement des bouquets...</p>
            </div>

            <div class="glow-divider my-12"></div>
            <div class="text-center py-12 my-6">
                <div class="bg-gradient-to-r from-[#ccff00]/10 to-transparent border border-[#ccff00]/30 rounded-2xl p-8 max-w-2xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">🎯 Prêt à profiter de ces bouquets ?</h2>
                    <div class="glow-divider my-8"></div>
                    <p class="text-gray-300 mb-6">Cliquez ci-dessous pour souscrire au plan STANDARD et recevoir vos identifiants immédiatement sur WhatsApp</p>
                    <a href="https://wa.me/212670965351?text=Bonjour,%20je%20suis%20intéressé%20par%20le%20plan%20STANDARD%20à%2025€/an.%20Pouvez-vous%20me%20fournir%20plus%20d'informations%20?Merci" 
                       class="inline-block bg-[#25D366] text-white font-bold py-3 px-8 rounded-full text-lg hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-[#25D366]/50">
                        💬 S'ABONNER MAINTENANT SUR WHATSAPP
                    </a>
                    <p class="text-gray-500 text-sm mt-4">🔒 Support 24/7 | Installation guidée | Paiement sécurisé</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
