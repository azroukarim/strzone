<?php
$pageTitle = "Téléchargements";
$activePage = 'download';
include 'header.php';
?>

<style>
    .app-card {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 0.875rem;
        padding: 0.9rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
        height: 100%;
        text-align: center;
    }
    .app-card:hover {
        background: rgba(204, 255, 0, 0.1);
        border-color: #ccff00;
        transform: translateY(-3px);
    }
    .app-logo {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        object-fit: cover;
        margin: 0 auto 0.6rem auto;
        border: 2px solid rgba(204, 255, 0, 0.5);
        background: #1a1a1a;
    }
    .app-name {
        font-size: 0.9rem;
        font-weight: 700;
        color: #ccff00;
        margin-bottom: 0.5rem;
        letter-spacing: 0.3px;
    }
    .download-code {
        font-size: 0.6rem;
        color: #9ca3af;
        font-weight: 500;
        letter-spacing: 0.3px;
        margin-bottom: 0.6rem;
    }
    .download-code span {
        color: #ccff00;
        font-weight: 700;
        font-family: monospace;
        font-size: 0.75rem;
    }
    .download-btn {
        background: linear-gradient(135deg, #ccff00, #a0cc00);
        color: #000;
        font-weight: 700;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        text-decoration: none;
        display: inline-block;
        font-size: 0.6rem;
    }
    .download-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 0 12px rgba(204, 255, 0, 0.4);
        color: #000;
    }
    .loading-spinner {
        border: 3px solid rgba(204, 255, 0, 0.3);
        border-top: 3px solid #ccff00;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        animation: spin 1s linear infinite;
        margin: 2rem auto;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .page-title {
        font-size: 2rem !important;
    }
    .page-subtitle {
        font-size: 0.85rem !important;
    }
    .broken-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: linear-gradient(135deg, #1a1a1a, #2a2a2a);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.6rem auto;
        border: 2px solid rgba(204, 255, 0, 0.5);
    }
    .broken-icon span {
        font-size: 1.6rem;
    }
    @media (max-width: 768px) {
        .app-logo, .broken-icon {
            width: 42px;
            height: 42px;
        }
        .broken-icon span {
            font-size: 1.3rem;
        }
        .app-name {
            font-size: 0.8rem;
        }
        .download-code {
            font-size: 0.55rem;
        }
        .download-code span {
            font-size: 0.7rem;
        }
        .page-title {
            font-size: 1.6rem !important;
        }
    }
</style>

<div class="page-content">
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <section class="min-h-screen flex flex-col justify-center items-center text-center py-10 md:py-16">
            <h1 class="page-title text-3xl md:text-4xl font-black uppercase mb-3"><span data-key="download_title">Télé</span> <span class="text-[#ccff00]" data-key="download_highlight">chargements</span></h1>
            <p class="page-subtitle text-sm text-gray-300 mb-5" data-key="download_subtitle">Téléchargez nos applications pour profiter de STREAMTV</p>
            <div class="w-16 h-1 bg-[#ccff00] mx-auto"></div>
        </section>
    </div></div></div>
    
    <div class="bg-stadium"><div class="section-content"><div class="max-w-[1600px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="py-10">
            <div id="appsContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
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
                    <div class="app-card">
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
