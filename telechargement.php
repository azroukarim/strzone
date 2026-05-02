<?php
/**
 * STREAMTV - Téléchargements Dynamiques
 */
$pageTitle = "Téléchargez nos Applications";
$activePage = 'download';
$showPreloader = false;

include 'header.php';
?>

<style>
    .app-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 30px;
        padding: 2rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-align: center;
    }
    .app-card:hover {
        transform: translateY(-10px);
        border-color: #ccff00;
        background: rgba(204, 255, 0, 0.05);
    }
    .app-logo {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin: 0 auto 1.5rem;
        filter: drop-shadow(0 10px 15px rgba(0,0,0,0.3));
    }
    .downloader-badge {
        background: rgba(204, 255, 0, 0.15);
        color: #ccff00;
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 800;
        display: inline-block;
        margin-bottom: 1rem;
    }
</style>

<div class="page-content py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter">Nos <span class="text-[#ccff00]">Applications</span></h1>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Installez nos applications officielles sur vos appareils Android, Firestick et Smart TV.</p>
        </div>

        <div id="appsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Les applications seront chargées ici -->
            <div class="col-span-full text-center py-20">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-t-2 border-[#ccff00]"></div>
            </div>
        </div>
    </div>
</div>

<script>
    const APPS_FILE = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/apps.txt';

    async function loadApps() {
        const container = document.getElementById('appsContainer');
        try {
            const response = await fetch(APPS_FILE);
            const text = await response.text();
            
            const lines = text.split('\n').filter(line => line.trim().length > 0);
            
            container.innerHTML = lines.map(line => {
                // Parsing de la ligne formatée: Logo=... | name=... | infos=... | download link=...
                const parts = line.split('|').reduce((acc, part) => {
                    const [key, value] = part.split('=').map(s => s.trim());
                    // Nettoyage de la clé (enlever appsX:)
                    const cleanKey = key.includes(':') ? key.split(':')[1] : key;
                    acc[cleanKey.toLowerCase()] = value;
                    return acc;
                }, {});

                return `
                    <div class="app-card">
                        <img src="${parts.logo}" alt="${parts.name}" class="app-logo">
                        <h3 class="text-2xl font-black mb-2">${parts.name}</h3>
                        <div class="downloader-badge">${parts.infos}</div>
                        <div class="space-y-4">
                            <a href="${parts['download link']}" class="block bg-white text-black font-bold py-3 rounded-xl hover:bg-[#ccff00] transition-colors">
                                TÉLÉCHARGER APK
                            </a>
                        </div>
                    </div>
                `;
            }).join('');
            
        } catch (error) {
            container.innerHTML = '<p class="text-center col-span-full text-red-400">Erreur lors du chargement des applications.</p>';
        }
    }

    document.addEventListener('DOMContentLoaded', loadApps);
</script>

<?php include 'footer.php'; ?>
