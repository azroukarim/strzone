<?php
/**
 * STREAMZONE - Contact
 */
$pageTitle = "Contactez-nous";
$activePage = 'contact';
$showPreloader = false;

$successMsg = "";
if (isset($_POST['send_message'])) {
    $msg = [
        'date' => date('Y-m-d H:i:s'),
        'name' => $_POST['name'] ?? 'Anonyme',
        'email' => $_POST['email'] ?? '',
        'subject' => $_POST['subject'] ?? 'No Subject',
        'message' => $_POST['message'] ?? ''
    ];
    
    // Save to a hidden JSON file (protected by .htaccess)
    $messagesFile = 'messages_log.json';
    $currentMessages = file_exists($messagesFile) ? json_decode(file_get_contents($messagesFile), true) : [];
    $currentMessages[] = $msg;
    file_put_contents($messagesFile, json_encode($currentMessages, JSON_PRETTY_PRINT));
    
    $successMsg = "Votre message a été envoyé avec succès ! Nous vous répondrons bientôt.";
}

include 'header.php';
?>

<div class="page-content py-20">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Contactez <span class="text-[#ccff00]">l'Équipe</span></h1>
            <p class="text-gray-400 mt-4">Une question ? Un problème technique ? Nous sommes là pour vous aider 24h/24.</p>
        </div>

        <?php if ($successMsg): ?>
            <div class="bg-green-500/10 border border-green-500/50 text-green-500 p-4 rounded-2xl mb-8 text-center animate-bounce">
                <?php echo $successMsg; ?>
            </div>
        <?php endif; ?>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="glass p-6 rounded-3xl border-white/5">
                    <h3 class="text-[#ccff00] font-bold uppercase text-sm mb-4 tracking-widest">Support Direct</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-[#ccff00]/10 rounded-2xl flex items-center justify-center text-[#ccff00]">
                            <i data-lucide="phone"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase">WhatsApp</p>
                            <p class="font-bold">+212 670-965351</p>
                        </div>
                    </div>
                    <a href="https://wa.me/212670965351" class="block w-full bg-[#ccff00] text-black text-center py-3 rounded-xl font-bold hover:scale-105 transition-all">DISCUTER SUR WHATSAPP</a>
                </div>

                <div class="glass p-6 rounded-3xl border-white/5">
                    <h3 class="text-white font-bold uppercase text-sm mb-4 tracking-widest">Horaires</h3>
                    <p class="text-gray-400 text-sm">Lundi - Dimanche : <span class="text-white font-bold">24h/24</span></p>
                    <p class="text-gray-300 text-xs mt-2">Temps de réponse moyen : < 15 minutes</p>
                </div>
            </div>

            <!-- Contact Form -->
            <form method="POST" class="glass p-8 rounded-3xl border-white/5 space-y-4">
                <input type="text" name="name" placeholder="Votre Nom" required class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all">
                <input type="email" name="email" placeholder="Votre Email" required class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all">
                <select name="subject" class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all text-gray-400">
                    <option value="Support Technique">Support Technique</option>
                    <option value="Abonnement">Abonnement / Paiement</option>
                    <option value="Test Gratuit">Demande de Test</option>
                </select>
                <textarea name="message" rows="4" placeholder="Comment pouvons-nous vous aider ?" required class="w-full bg-white/5 border border-white/10 rounded-xl p-4 outline-none focus:border-[#ccff00] transition-all"></textarea>
                <button type="submit" name="send_message" class="w-full border-2 border-[#ccff00] text-[#ccff00] py-4 rounded-xl font-black uppercase hover:bg-[#ccff00] hover:text-black transition-all">ENVOYER LE MESSAGE</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
