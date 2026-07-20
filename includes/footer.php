<?php
/**
 * footer.php
 * Site footer with the "Join the Movement" CTA, social links and copyright.
 * Also closes the <body> and <html> tags and loads Bootstrap's JS bundle.
 */
require_once __DIR__ . '/config.php';
?>
<footer class="flu-footer" id="resources">
    <div class="container">
        <div class="row align-items-center gy-4 py-4">
            <div class="col-lg-5 text-center text-lg-start">
                <h3 class="footer-heading mb-1">JOIN THE MOVEMENT</h3>
                <p class="text-secondary-gold mb-0">Invest in Knowledge. Reap Freedom.</p>
            </div>
            <div class="col-lg-3 text-center">
                <a href="#enroll" class="btn btn-gold btn-lg px-4">ENROLL NOW</a>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <p class="text-uppercase small text-secondary-gold mb-2">Connect With Us</p>
                <div class="d-flex justify-content-center justify-content-lg-end gap-2 mb-2">
                    <?php foreach ($socials as $s): ?>
                        <a href="<?= htmlspecialchars($s['href']) ?>" class="flu-social"
                           aria-label="<?= htmlspecialchars($s['label']) ?>">
                            <i class="bi <?= htmlspecialchars($s['icon']) ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a href="#" class="text-secondary-gold small text-decoration-none">
                    <?= htmlspecialchars($site['website']) ?>
                </a>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="row align-items-center py-3">
            <div class="col-md-6 text-center text-md-start">
                <span class="flu-brand-mark small-mark">FLU</span>
                <span class="ms-2 text-secondary-gold small">
                    &copy; <?= (int) $site['year'] ?> <?= htmlspecialchars($site['name']) ?>. All rights reserved.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                <span class="footer-signature">Jerome Fernando</span>
                <span class="text-secondary-gold small ms-2"><?= htmlspecialchars($site['founder_title']) ?></span>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top -->
<a href="#top" class="flu-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>

<!-- Bootstrap 5.3 JS bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
