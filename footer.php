<?php
/**
 * STREAMZONE - Universal Footer
 */
?>
    <footer class="main-footer pt-5 pb-4 mt-5">
        <div class="container text-center">
            <h2 class="brand-name mb-4">STREAMZONE</h2>
            <div class="footer-links mb-4 d-flex justify-content-center flex-wrap gap-4">
                <a href="index.php">Accueil</a>
                <a href="plans.php">Plans</a>
                <a href="contact.php">Contact</a>
                <a href="privacypolicy.html">Vie Privée</a>
            </div>
            <div class="social-icons mb-4 d-flex justify-content-center gap-3">
                <a href="#" class="social-icon-btn"><i data-lucide="facebook"></i></a>
                <a href="#" class="social-icon-btn"><i data-lucide="instagram"></i></a>
                <a href="#" class="social-icon-btn"><i data-lucide="twitter"></i></a>
            </div>
            <hr style="border-color: rgba(255,255,255,0.1); max-width: 800px; margin: 2rem auto;">
            <p class="copyright-text mb-0">&copy; 2024 <span class="text-[#ccff00]">STREAMZONE</span> - Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        lucide.createIcons();
        
        // Music logic
        const audio = document.getElementById('bgAudio');
        document.addEventListener('click', function() {
            if (audio.paused) {
                audio.play().catch(e => console.log('Audio auto-play blocked'));
            }
        }, { once: true });

        // Preloader Dismiss
        <?php if (isset($showPreloader) && $showPreloader): ?>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                if(preloader) preloader.classList.add('fade-out');
            }, 2200);
        });
        <?php endif; ?>
    </script>
    
    <?php if (isset($extraFooter)) echo $extraFooter; ?>
</body>
</html>
