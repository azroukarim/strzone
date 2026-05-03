<?php
$pageTitle = "Bouquet VIP";
$activePage = 'channels';
ob_start();
?>
<script>
        const CHANNELS_URL = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/PLAN%20VIP.txt';
        let allChannels = [];

        async function loadChannels() {
            const container = document.getElementById('channelsContainer');
            const resultCountSpan = document.getElementById('resultCount');
            try {
                const response = await fetch(CHANNELS_URL);
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                const text = await response.text();
                const lines = text.split('\n').map(line => line.trim()).filter(line => line.length > 0);
                allChannels = lines.map(line => ({ original: line, display: line }));
                displayChannels(allChannels);
                resultCountSpan.textContent = `👑 ${allChannels.length} bouquets VIP disponibles`;
            } catch (error) {
                container.innerHTML = `<div class="text-center py-12 text-red-400">⚠️ Impossible de charger la liste des bouquets VIP.<br><span class="text-sm text-gray-400">Veuillez réessayer plus tard.</span></div>`;
                resultCountSpan.textContent = '❌ Erreur de chargement';
            }
        }

        function displayChannels(channels) {
            const container = document.getElementById('channelsContainer');
            if (!channels || channels.length === 0) { container.innerHTML = '<div class="text-center py-12 text-gray-400">🔍 Aucun bouquet trouvé</div>'; return; }
            let html = `<div class="mt-6"><h3 class="category-title">👑 TOUS LES BOUQUETS VIP (${channels.length})</h3><div class="channels-grid">${channels.map(ch => `<div class="channel-item"><span class="text-gray-200">${escapeHtml(ch.display)}</span></div>`).join('')}</div></div>`;
            container.innerHTML = html;
        }

        function searchChannels(searchTerm) {
            const term = searchTerm.toLowerCase().trim();
            if (!term) { displayChannels(allChannels); document.getElementById('resultCount').innerHTML = `👑 ${allChannels.length} bouquets VIP disponibles`; return; }
            const filtered = allChannels.filter(ch => ch.display.toLowerCase().includes(term));
            displayChannels(filtered);
            document.getElementById('resultCount').innerHTML = `🔍 ${filtered.length} bouquet(s) trouvé(s) pour "${escapeHtml(term)}"`;
        }

        function escapeHtml(text) { const div = document.createElement('div'); div.textContent = text; return div.innerHTML; }
        document.getElementById('searchInput')?.addEventListener('input', (e) => searchChannels(e.target.value));
        document.addEventListener('DOMContentLoaded', loadChannels);
    </script>
<?php
$extraFooter = ob_get_clean();

include 'header.php';
?>

<style>
    .channels-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 0.75rem; }
    .channel-item { background: rgba(255, 255, 255, 0.05); border-radius: 0.5rem; padding: 0.5rem 1rem; transition: all 0.2s ease; border-left: 3px solid #ffd700; font-size: 0.9rem; }
    .channel-item:hover { background: rgba(255, 215, 0, 0.1); transform: translateX(5px); }
    .category-title { background: linear-gradient(135deg, #ffd700, #ffaa00); -webkit-background-clip: text; background-clip: text; color: transparent; font-size: 1.3rem; font-weight: 800; margin-top: 1.5rem; margin-bottom: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid rgba(255, 215, 0, 0.3); display: inline-block; }
    .loading-spinner { border: 3px solid rgba(255, 215, 0, 0.3); border-top: 3px solid #ffd700; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin: 2rem auto; }
    @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    .search-box { background: rgba(0,0,0,0.5); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 50px; padding: 0.75rem 1.5rem; width: 100%; max-width: 400px; color: white; outline: none; transition: all 0.3s ease; }
    .search-box:focus { border-color: #ffd700; box-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }
    .result-count { background: rgba(255, 215, 0, 0.2); padding: 0.25rem 0.75rem; border-radius: 50px; font-size: 0.8rem; }
</style>
<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="pt-20 pb-8 text-center">
                <h1 class="text-4xl md:text-6xl font-black uppercase mb-4"><span>Plan</span> <span class="text-[#ffd700]">PREMIUM+VIP</span></h1>
                <p class="text-gray-300 text-lg">👑 Découvrez la liste complète des bouquets VIP inclus dans votre abonnement</p>
                <div class="w-24 h-1 bg-[#ffd700] mx-auto mt-4 rounded-full"></div>
            </section>
        </div></div></div>

    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 my-6">
                <input type="text" id="searchInput" placeholder="🔍 Rechercher un bouquet..." class="search-box">
                <div id="resultCount" class="result-count">Chargement...</div>
            </div>
            <div id="channelsContainer" class="min-h-[400px]"><div class="loading-spinner"></div><p class="text-center text-gray-400">Chargement des bouquets VIP...</p></div>
            <div class="text-center py-12 my-6">
                <div class="bg-gradient-to-r from-[#ffd700]/10 to-transparent border border-[#ffd700]/30 rounded-2xl p-8 max-w-2xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">👑 Prêt à profiter de l'expérience VIP ?</h2>
                    <p class="text-gray-300 mb-6">Cliquez ci-dessous pour souscrire au plan VIP et recevoir vos identifiants immédiatement sur WhatsApp</p>
                    <a href="https://wa.me/212670965351?text=Bonjour,%20je%20suis%20intéressé%20par%20le%20plan%20VIP%20à%2060€/an.%20Pouvez-vous%20me%20fournir%20plus%20d'informations%20?Merci" class="inline-block bg-[#25D366] text-white font-bold py-3 px-8 rounded-full text-lg hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-[#25D366]/50">💬 S'ABONNER MAINTENANT SUR WHATSAPP</a>
                    <p class="text-gray-500 text-sm mt-4">🔒 Support 24/7 | Installation guidée | Paiement sécurisé</p>
                </div>
            </div>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>

