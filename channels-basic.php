<?php
$pageTitle = "Bouquet Basic";
$activePage = 'channels';
ob_start();
?>
<script>
        const CHANNELS_URL = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/PLAN%20BASIC.txt';
        
        let allChannels = [];

        async function loadChannels() {
            const container = document.getElementById('channelsContainer');
            const resultCountSpan = document.getElementById('resultCount');
            
            try {
                const response = await fetch(CHANNELS_URL);
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                
                const text = await response.text();
                
                const lines = text.split('\n').map(line => line.trim()).filter(line => line.length > 0);
                
                allChannels = [];
                for (const line of lines) {
                    let displayName = line;
                    displayName = displayName.replace(/^\|TV\||^\|TV\|\s*/, '');
                    displayName = displayName.replace(/^\|VD\||^\|SR\||^\|VD\/SR\|/, '');
                    displayName = displayName.replace(/\|/g, '');
                    displayName = displayName.trim();
                    
                    if (displayName.length > 0) {
                        allChannels.push({
                            original: line,
                            display: displayName
                        });
                    }
                }
                
                displayChannels(allChannels);
                resultCountSpan.textContent = `📺 ${allChannels.length} bouquets disponibles`;
                
            } catch (error) {
                console.error('Erreur de chargement:', error);
                container.innerHTML = `
                    <div class="text-center py-12 text-red-400">
                        ⚠️ Impossible de charger la liste des chaînes BASIC.<br>
                        <span class="text-sm text-gray-400">Veuillez réessayer plus tard.</span>
                    </div>
                `;
                resultCountSpan.textContent = '❌ Erreur de chargement';
            }
        }

        function displayChannels(channels) {
            const container = document.getElementById('channelsContainer');
            
            if (!channels || channels.length === 0) {
                container.innerHTML = '<div class="text-center py-12 text-gray-400">🔍 Aucune chaîne trouvée</div>';
                return;
            }
            
            let html = `
                <div class="mt-6">
                    <h3 class="category-title">📺 TOUTES LES CHAÎNES BASIC (${channels.length})</h3>
                    <div class="channels-grid">
                        ${channels.map(ch => `
                            <div class="channel-item">
                                <span class="text-gray-200">${escapeHtml(ch.display)}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
            
            container.innerHTML = html;
        }

        function searchChannels(searchTerm) {
            const term = searchTerm.toLowerCase().trim();
            if (!term) {
                displayChannels(allChannels);
                document.getElementById('resultCount').innerHTML = `📺 ${allChannels.length} bouquets disponibles`;
                return;
            }
            
            const filtered = allChannels.filter(ch => 
                ch.display.toLowerCase().includes(term) || 
                ch.original.toLowerCase().includes(term)
            );
            
            displayChannels(filtered);
            document.getElementById('resultCount').innerHTML = `🔍 ${filtered.length} résultat(s) pour "${escapeHtml(term)}"`;
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => searchChannels(e.target.value));
        }
        
        document.addEventListener('DOMContentLoaded', loadChannels);
    </script>
<?php
$extraFooter = ob_get_clean();

include 'header.php';
?>

<div class="page-content">
        <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            <section class="pt-20 pb-8 text-center">
                <h1 class="text-4xl md:text-6xl font-black uppercase mb-4">
                    <span>Plan</span> 
                    <span class="text-[#ccff00]">BASIC</span>
                </h1>
                <p class="text-gray-300 text-lg">📺 Découvrez la liste complète des bouquets inclus dans votre abonnement</p>
                <div class="w-24 h-1 bg-[#ccff00] mx-auto mt-4 rounded-full"></div>
            </section>
        </div></div></div>

    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 my-6">
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="🔍 Rechercher une chaîne..." class="search-box">
                </div>
                <div id="resultCount" class="result-count">Chargement...</div>
            </div>

            <div id="channelsContainer" class="min-h-[400px]">
                <div class="loading-spinner"></div>
                <p class="text-center text-gray-400">Chargement des chaînes BASIC...</p>
            </div>

            <div class="text-center py-12 my-6">
                <div class="bg-gradient-to-r from-[#ccff00]/10 to-transparent border border-[#ccff00]/30 rounded-2xl p-8 max-w-2xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">🎯 Prêt à profiter de ces chaînes ?</h2>
                    <p class="text-gray-300 mb-6">Cliquez ci-dessous pour souscrire au plan BASIC et recevoir vos identifiants immédiatement sur WhatsApp</p>
                    <a href="https://wa.me/212670965351?text=Bonjour,%20je%20suis%20intéressé%20par%20le%20plan%20BASIC%20à%2015€/an.%20Pouvez-vous%20me%20fournir%20plus%20d'informations%20?Merci" 
                       class="inline-block bg-[#25D366] text-white font-bold py-3 px-8 rounded-full text-lg hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-[#25D366]/50">
                        💬 S'ABONNER MAINTENANT SUR WHATSAPP
                    </a>
                    <p class="text-gray-500 text-sm mt-4">🔒 Support 24/7 | Installation guidée | Paiement sécurisé</p>
                </div>
            </div>
        </div></div></div>
    </div>

<?php include 'footer.php'; ?>
