<?php
$pageTitle = "Téléchargements";
$activePage = 'download';
include 'header.php';
?>

<style>
    .app-card {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 1.25rem;
        padding: 1rem;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 255, 255, 0.08);
        height: 100%;
        text-align: center;
        backdrop-filter: blur(10px);
    }
    .app-card:hover {
        background: rgba(204, 255, 0, 0.08);
        border-color: #ccff00;
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(204, 255, 0, 0.1);
    }
    .app-logo {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        object-fit: cover;
        margin: 0 auto 0.8rem auto;
        border: 2px solid rgba(204, 255, 0, 0.3);
        background: #111;
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    }
    .app-name {
        font-size: 1rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 0.5rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .download-code {
        font-size: 0.7rem;
        color: #888;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 0.8rem;
        background: rgba(255,255,255,0.05);
        padding: 4px 8px;
        border-radius: 6px;
        display: inline-block;
    }
    .download-code span {
        color: #ccff00;
        font-weight: 800;
        font-family: 'Roboto', monospace;
        font-size: 0.85rem;
    }
    .download-btn {
        background: #ccff00;
        color: #000;
        font-weight: 900;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none;
        display: inline-block;
        font-size: 0.7rem;
        width: 100%;
    }
    .download-btn:hover {
        background: #fff;
        transform: scale(1.02);
        box-shadow: 0 0 20px rgba(204, 255, 0, 0.4);
        color: #000;
    }
    .loading-spinner {
        border: 3px solid rgba(204, 255, 0, 0.2);
        border-top: 3px solid #ccff00;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        animation: spin 1s linear infinite;
        margin: 3rem auto;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .page-title {
        font-size: 2.5rem !important;
        font-weight: 900 !important;
    }
    .page-subtitle {
        font-size: 1rem !important;
        color: #aaa;
    }
    .broken-icon {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        background: linear-gradient(135deg, #111, #222);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.8rem auto;
        border: 2px solid rgba(204, 255, 0, 0.3);
    }
    .broken-icon span {
        font-size: 1.8rem;
    }
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
    @media (max-width: 768px) {
        .app-card {
            padding: 0.6rem;
            border-radius: 1rem;
        }
        .app-logo, .broken-icon {
            width: 45px;
            height: 45px;
            margin-bottom: 0.5rem;
        }
        .broken-icon span {
            font-size: 1.2rem;
        }
        .app-name {
            font-size: 0.75rem;
            margin-bottom: 0.3rem;
        }
        .download-code {
            font-size: 0.55rem;
            margin-bottom: 0.5rem;
            padding: 2px 6px;
        }
        .download-code span {
            font-size: 0.65rem;
        }
        .download-btn {
            padding: 0.4rem;
            font-size: 0.55rem;
        }
    }
</style>

<div class="page-content">
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <section class="flex flex-col justify-center items-center text-center pt-12 md:pt-20 pb-6 md:pb-8">
            <h1 class="text-4xl md:text-6xl font-black uppercase font-urbanist leading-tight fade-down"><span data-key="download_title">Télé</span><span class="text-[#ccff00] title-glow" data-key="download_highlight">chargements</span></h1>
            <p class="page-subtitle text-sm text-gray-300 mb-5" data-key="download_subtitle">Téléchargez nos applications pour profiter de STREAMTV</p>
            <div class="w-16 h-1 bg-[#ccff00] mx-auto"></div>
        </section>
    </div></div></div>
    
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="pb-16 pt-2">
            <div id="appsContainer" class="grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 max-w-5xl mx-auto">
                <div class="loading-spinner"></div>
                <p class="text-center text-gray-400 col-span-full text-sm">Chargement des applications...</p>
            </div>
        </div>
    </div></div></div>
</div>

<?php 
ob_start();
?>
<script>
    const APPS_URL = 'https://raw.githubusercontent.com/azroukarim/strzone/refs/heads/main/links/apps.txt';
    
    async function loadApps() {
        const container = document.getElementById('appsContainer');
        
        try {
            const response = await fetch(APPS_URL);
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            
            const text = await response.text();
            const lines = text.split('\n').map(line => line.trim()).filter(line => line.length > 0);
            
            const apps = [];
            
            for (const line of lines) {
                // استخراج رابط الصورة (Logo)
                const logoMatch = line.match(/Logo=\s*([^|]+)/i);
                const nameMatch = line.match(/name=\s*([^|]+)/i);
                const infosMatch = line.match(/infos=\s*([^|]+)/i);
                const downloadMatch = line.match(/download link=\s*([^\s]+)/i);
                
                if (nameMatch) {
                    let codeText = infosMatch ? infosMatch[1].trim() : null;
                    let codeNumber = null;
                    let codeLabel = null;
                    
                    if (codeText) {
                        const numberMatch = codeText.match(/\d+/);
                        codeNumber = numberMatch ? numberMatch[0] : codeText;
                        const labelMatch = codeText.match(/^[A-Za-z\s:]+/i);
                        codeLabel = labelMatch ? labelMatch[0].trim() : 'Downloader code:';
                    }
                    
                    apps.push({
                        logo: logoMatch ? logoMatch[1].trim() : null,
                        name: nameMatch[1].trim(),
                        codeLabel: codeLabel,
                        codeNumber: codeNumber,
                        downloadUrl: downloadMatch ? downloadMatch[1].trim() : '#'
                    });
                }
            }
            
            if (apps.length === 0) {
                container.innerHTML = '<div class="text-center py-10 text-gray-400 col-span-full text-sm">❌ Aucune application trouvée</div>';
                return;
            }
            
            let html = '';
            for (let i = 0; i < apps.length; i++) {
                const app = apps[i];
                html += `
                    <div class="app-card plan-card-shake">
                        ${app.logo ? `
                            <img src="${app.logo}" alt="${app.name}" class="app-logo" 
                                 onerror="this.onerror=null; this.parentNode.innerHTML += '<div class=\\'broken-icon mx-auto\\'><span>📱</span></div>'; this.remove();">
                        ` : `
                            <div class="broken-icon mx-auto">
                                <span>📱</span>
                            </div>
                        `}
                        <div class="app-name">${escapeHtml(app.name)}</div>
                        ${app.codeNumber ? `
                            <div class="download-code">
                                ${app.codeLabel ? escapeHtml(app.codeLabel) : 'DOWNLOADER CODE:'} <span>${escapeHtml(app.codeNumber)}</span>
                            </div>
                        ` : ''}
                        <a href="${app.downloadUrl}" class="download-btn inline-block" target="_blank" rel="noopener noreferrer">
                            📥 TÉLÉCHARGER
                        </a>
                    </div>
                `;
            }
            
            container.innerHTML = html;
            
        } catch (error) {
            console.error('Erreur de chargement:', error);
            container.innerHTML = `
                <div class="text-center py-10 text-red-400 col-span-full text-sm">
                    ⚠️ Impossible de charger la liste des applications.<br>
                    <span class="text-xs text-gray-400">Veuillez réessayer plus tard.</span>
                </div>
            `;
        }
    }
    
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
    
    document.addEventListener('DOMContentLoaded', loadApps);
</script>
<?php
$extraFooter = ob_get_clean();
include 'footer.php'; 
?>
